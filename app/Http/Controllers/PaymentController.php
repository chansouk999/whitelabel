<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as Reqst;
use Auth;
use Jenssegers\Agent\Agent;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Validator;
use App\clientid;
use Illuminate\Support\Facades\Cache;
use App\access_token;
use Illuminate\Support\Facades\DB;
use Exception;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Support\Facades\Hash;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;

class PaymentController extends Controller
{
    private $api = 'https://pay.duobao33.com/pay/'; // api地址 //API address: https://pay.duobao33.com/ 
    private $bid = '1'; // 商户号，后台取得 //merchant account : 18
    private $key = 'vhzw7epncps0szxd'; // 商户钥匙，后台取得 // encryptedkey : 0yxlmlv8u4az177p
    private $iv = 'rrhs7ryxs3ock5vt'; // 商户钥匙iv，后台取得// encryptedIV : phpzs30dl5g536pa

    // query


    public function query($order_sn) {
        //bid 商户号。必填项。 
        //merchant id, must be included
        $order['bid'] = $this->bid;
        //order_sn 订单号：数字或字母组成。必填项。
        //order number
        $order['order_sn'] = $order_sn;
        //sign 签名 MD5(商户key+ "|" + bid + "|" + order_sn + "|" + 商户iv)
        //必须按此顺序
        $order['sign'] = md5(
          $this->key . '|' .
          $this->bid . '|' .
          $order['order_sn'] . '|' .
          $this->iv
        );
        //下单请求 
        //check order request
        $result = $this->curl($this->api.'api/detail', $order);
        try {
          $content = json_decode($result, true);
          if(empty($content)) {
            throw new Exception('查询失败'); //check orderfailed
          }
          if($content['code'] !== 100) {
            throw new Exception('查询失败:'.$content['msg'], $content['code']);
          }
          return json_encode($content);
        } catch (Exception $e) {
          return json_encode(['code' => $e->getCode(), 'msg' => $e->getMessage()]);
        }
      }


    //curl

    public function curl($url, array $post) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        if (preg_match('/^https:\/\//i', $url)) {
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // https请求 不验证证书和hosts
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // 不从证书中检查SSL加密算法是否存在
        }
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 2);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        $response = curl_exec($ch);
        $request_info = curl_getinfo($ch);
        $http_code = $request_info['http_code'];
        $this->logs(['response' => $response]);
        if ($http_code == 200) {
          curl_close($ch);
          return $response;
        }
        if (curl_errno($ch)) {
          $this->logs(['error' => $url . ' 请求失败 ' . curl_error($ch), 'info' => $request_info]);
          curl_close($ch);
          return false;
        }
        if ($http_code !== 200) {
          $this->logs(['error' => $url . ' 请求失败,状态:' . $http_code, 'info' => $request_info]);
          curl_close($ch);
          return $response;
        }
        curl_close($ch);
        return $request_info;
      }



    // logsss
    public function logs($log = null, $fn = '') {
        $path = __DIR__.'/log/' . date('Ymd/', time());
        if (!is_dir($path)) {
          mkdir($path, 0777, true);
        }
        $name = $path . date('Ymd', time()) . $fn . '.log';
        $content = '';
        if (file_exists($name)) {
          $content = file_get_contents($name);
        }
        $content .= date('Y-m-d H:i:s', time()) . "\n" . var_export($log, true) . "\n------------------\n";
        file_put_contents($name, $content);
      }






    // dd order


    public function addOrder(array $data) {
        //bid 商户号。必填项。 
        //merchant id, must be included
        $order['bid'] = $this->bid;
        //money 订单金额：number，必须大于0。必填项。 
        // money for pay amount, must be greater than 0, must be included
        $order['money'] = (float) $data['money'];
        //order_sn 订单号：数字或字母组成。必填项。// order number, combined with nubmer and alpabet , must be included
        $order['order_sn'] = time() . mt_rand(10000, 99999) . mt_rand(10000, 99999);
        //notify_url 异步通知地址。必填项。 // callback url, must be included
        $order['notify_url'] = $data['notify_url'];
        //pay_type 支付类型：number。1:微信二维码,2:支付宝二维码,3:银行固码,4:银行卡，10:(1,2,3随机)。必填项。
        //pay_type, in number, 1 wechatpay, 2 alipay, 3 bank online pay, 4 bank transfer, 10 random selection between 1,2,3
        $order['pay_type'] = 10;
        //data_type 数据类型：string, 当等于'json'则为json数据，否则返回平台的h5收银台网址
        //data_type will return json data type if is =json, otherwise return to h5 merchant url
        $order['data_type'] = !empty($data['data_type']) ? $data['data_type'] : '';
       
        //sign 签名 MD5(
        //商户key + "|" +
        //bid + "|" +
        //money + "|" +
        //order_sn + "|" +
        //notify_url + "|" +
        //商户iv)
        //必须按此顺序
        $order['sign'] = md5(
          $this->key . '|' .
          $this->bid . '|' .
          $order['money'] . '|' .
          $order['order_sn'] . '|' .
          $order['notify_url'] . '|' .
          $this->iv
        );
        //下单请求
        // order request
        $result = $this->curl($this->api.'api/index', $order);
        try {
          $content = json_decode($result, true);
          if(empty($content)) {
            throw new Exception('下单失败'); // order failed
          }
          if($content['code'] !== 100) {
            throw new Exception('下单失败:'.$content['msg'], $content['code']);
          }
          return json_encode($content);
        } catch (Exception $e) {
          return json_encode(['code' => $e->getCode(), 'msg' => $e->getMessage()]);
        }
      }


      // notify



      public function notify($data) {
        /**
         * $data 返回数据格式：
         * pay_time 支付时间：number, 10位数时间戳,
         * money 订单金额：number,
         * pay_money 实际支付金额：number,
         * order_sn 商户订单号：string,
         * sys_order_sn 平台订单号：string,
         * sign MD5签名：string,
         */
        try {
          if(empty($data) || !is_array($data)) {
            throw new Exception('数据为空或数据参数错误'); //data is empty 
          }
          if(empty($data['sign']) ||
            empty($data['pay_time']) ||
            empty($data['money']) ||
            empty($data['pay_money']) ||
            empty($data['order_sn']) ||
            empty($data['sys_order_sn'])
          ) {
            throw new Exception('参数错误'); // error in data given
          }
          //sign 验签
          //MD5(
          //商户key+ "|" +
          //pay_time + "|" +
          //money + "|" +
          //pay_money + "|" +
          //order_sn + "|" +
          //sys_order_sn + "|" +
          //商户iv
          //) 按此顺序验签
          //必须按此顺序
          $data['money'] = (string) $data['money'];
          $data['pay_money'] = (string) $data['pay_money'];
          $sign = md5(
            $this->key . '|' .
            $data['pay_time'] . '|' .
            $data['money'] . '|' .
            $data['pay_money'] . '|' .
            $data['order_sn'] . '|' .
            $data['sys_order_sn'] . '|' .
            $this->iv
          );
          if($sign !== $data['sign']) {
            throw new Exception('验签失败');
          }
          /*//pay_time 支付时间 
          $notify['pay_time'] = $data['pay_money'];
          //money 订单金额 //order amount
          $notify['money'] = $data['money'];
          //money 实际支付金额// actual paid money
          $notify['pay_money'] = $data['pay_money'];
          //order_sn 商户订单号 // order number
          $notify['order_sn'] = $data['order_sn'];
          //sys_order_sn 多宝付订单号 // third party order number
          $notify['sys_order_sn'] = $data['sys_order_sn'];*/
          //开始更新订单 // starting new ordr
          $this->logs($data, '_notify');
          // 结束更新订单//ending 
          //TODO 返回成功状态关键词 success 
          exit('success');
        } catch (Exception $e) {
          $this->logs(['data' => $data, 'code' => $e->getCode(), 'msg' => $e->getMessage()], '_notify');
        }
        exit('fail');
      }






    /// action form
    public function actionpayment(Request $req)
    {
        function output($str)
        {
            header('Content-type: text/html; charset=utf-8');
            print_r($str);
            exit;
        }
        $hosted =$req->getHttpHost();
        $req = $req->data;
        $money = !empty($req['money']) ? floatval($req['money']) : 0;
        // include __DIR__ . './php/Payment.php';
        // $payment = new payment();
        if ($money > 0) {

            $pay_type = !empty($req['pay_type']) ? intval($req['pay_type']) : 10;
            $data_type = !empty($req['data_type']) ? strip_tags($req['data_type']) : 'json';
            $order = [];
            //money 订单金额：number，必须大于0
           
            $order['money'] = $money;
            
           
            //order_sn 订单号：数字或字母组成
            $order['order_sn'] = time() . mt_rand(10000, 99999) . mt_rand(10000, 99999);
            
            //notify_url 异步通知地址
            $order['notify_url'] = 'http://' . $hosted . '/notify';
            //pay_type 支付类型：number。1:微信二维码,2:支付宝二维码,3:银行综合码,4:银行卡，10:(1,2,3随机)
            $order['pay_type'] = $pay_type;
            //data_type 数据类型：string, json则为json数据，否则h5收银台
            $order['data_type'] = $data_type;
            // return $order;
            $result = $this->addOrder($order);
            return $result;
            if ($result->code === 100) {
                //下单成功
            }
            output($result);
        } elseif (!empty($order["order_sn"])) {
            $result = $this->query($order["order_sn"]);;
            if ($result->code === 100) {
                //查询成功

            }
            output($result);
        } else {
            output(base64_decode('ZmFpbA=='));
            output('请求错误');
        }
    }
}
