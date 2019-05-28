<template>
  <div>
    <div class="u-content u-account">
      <div class="section-1 clearfix">
        <div class="pull-left info">
          <div class="media">
            <div class="media-left">
              <img alt src="assets/img/u_account_icon.png">
            </div>
            <div class="media-body">
              <em id="account-user-name">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">{{ name }}</font>
                </font>
              </em>
              <span id="account-user-level" class="level-0">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">New member</font>
                </font>
              </span>
              <small id="account-before-login-date">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Last login:</font>
                </font>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">{{ login_at }}</font>
                </font>
              </small>
            </div>
          </div>
          <ul class="list-inline d-flex">
            <li>
              <a href="#" id="phone-status">
                <i class="icon-mobile"></i>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Verify phone</font>
                </font>
              </a>
            </li>
            <li>
              <a class="pointer-link login-setting-js">
                <i class="icon-setting"></i>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Login settings</font>
                </font>
              </a>
            </li>
            <li>
              <a href="/ucenter/bank/bankIndex">
                <i class="icon-card"></i>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Manage bank card</font>
                </font>
              </a>
            </li>
          </ul>
        </div>
        <div class="pull-left stats">
          <div class="canvas-wrap" data-result="56">
            <canvas id="canvas" width="70" height="70"></canvas>
            <span id="procent">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">0</font>
              </font>
            </span>
          </div>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Your weekly valid bet amount has exceeded</font>
          </font>
          <span id="procent-value">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">0</font>
            </font>
          </span>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">users</font>
          </font>
        </div>
        <div class="pull-left balance">
          <font style="vertical-align: inherit;">
            <!-- qwqwqw -->
            <!-- <button>Refresh</button><br> -->
            <font style="vertical-align: inherit;">The total balance</font>
          </font>
          <span id="eid_c_total_credit">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">$ {{balance}}</font>
            </font>
          </span>
          <a id="refresh_total_credit" class="btn btn-sm btn-default" href="javascript:;">
            <i class="fa fa-refresh"></i>
            <font style="vertical-align: inherit;"  @click="refresh">
              <font style="vertical-align: inherit;">Refresh quota</font>
            </font>
          </a>
        </div>
        <div class="pull-left two-btns">
          <a class="btn btn-deposit link-loding-gobut" href="/ucenter/pay/payIndex">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Immediately recharge</font>
            </font>
            <span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Deposit Now to</font>
              </font>
            </span>
          </a>
          <a class="btn link-loding-gobut" href="/ucenter/withdraw/withdrawIndex">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">apply for withdrawal with</font>
            </font>
            <span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Withdraw Now</font>
              </font>
            </span>
          </a>
        </div>
      </div>
      <div class="section-2">
        <p>
          <span>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">My member star rating</font>
            </font>
          </span>
          <font style="vertical-align: inherit;">
            <font
              style="vertical-align: inherit;"
            >(join the VIP ranks, enjoy the star courtesy, super privilege, let you enjoy the endless surprise offer)</font>
          </font>
        </p>
        <div class="unit-wrap clearfix">
          <div class="chart-wrap clearfix">
            <div class="btns rebate-switch-js">
              <a class="active pointer-link" data-game-kind="VIDEO">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Live video video</font>
                </font>
              </a>
              <a class="pointer-link" data-game-kind="SLOT">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">game</font>
                </font>
              </a>
              <a class="pointer-link" data-game-kind="FISHING">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">fishing game</font>
                </font>
              </a>
              <a class="pointer-link" data-game-kind="SPORT">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">sports game</font>
                </font>
              </a>
            </div>
            <ul class="amount pull-left">
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6000000</font>
                </font>
              </li>
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">3000000</font>
                </font>
              </li>
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1000000</font>
                </font>
              </li>
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">500000</font>
                </font>
              </li>
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">100,000</font>
                </font>
              </li>
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Open an account and place a bet</font>
                </font>
              </li>
            </ul>
            <ul class="pull-left bars">
              <li class="new" style="display:none">
                <span class="level">新会员</span>
              </li>
              <li>
                <em>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0.60%</font>
                  </font>
                </em>
                <span class="tip-message">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">can enjoy the wash code</font>
                  </font>
                </span>
                <span class="bar null" style="height: 30px;"></span>
                <span class="level">
                  <i class="crown crown-1"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">One star</font>
                  </font>
                </span>
              </li>
              <li>
                <em>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0.60%</font>
                  </font>
                </em>
                <span class="tip-message">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">can enjoy the wash code</font>
                  </font>
                </span>
                <span class="bar null" style="height: 60px;"></span>
                <span class="level">
                  <i class="crown crown-2"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Two stars</font>
                  </font>
                </span>
              </li>
              <li>
                <em>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0.60%</font>
                  </font>
                </em>
                <span class="tip-message">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">can enjoy the wash code</font>
                  </font>
                </span>
                <span class="bar null" style="height: 90px;"></span>
                <span class="level">
                  <i class="crown"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Three Star</font>
                  </font>
                </span>
              </li>
              <li>
                <em>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0.70%</font>
                  </font>
                </em>
                <span class="tip-message">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">can enjoy the wash code</font>
                  </font>
                </span>
                <span class="bar null" style="height: 120px;"></span>
                <span class="level">
                  <i class="crown"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">VIP4</font>
                  </font>
                </span>
              </li>
              <li>
                <em>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0.80%</font>
                  </font>
                </em>
                <span class="tip-message">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">can enjoy the wash code</font>
                  </font>
                </span>
                <span class="bar null" style="height: 150px;"></span>
                <span class="level">
                  <i class="crown"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">VIP5</font>
                  </font>
                </span>
              </li>
              <li>
                <em>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0.90%</font>
                  </font>
                </em>
                <span class="tip-message">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">can enjoy the wash code</font>
                  </font>
                </span>
                <span class="bar null" style="height: 180px;"></span>
                <span class="level">
                  <i class="crown"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">VIP6</font>
                  </font>
                </span>
              </li>
            </ul>
          </div>
          <div class="u-balance">
            <div class="unit">
              <img src="assets/img/diamond.png" alt class="diamond">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Effective bet amount this week</font>
              </font>
              <h3 id="weeks_betamount">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">0.00</font>
                </font>
              </h3>
            </div>

            <div class="unit">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Recharge can be promoted to</font>
                <a
                  href="/ucenter/pay/payIndex"
                  class="btn btn-sm link-loding-gobut next-level-link-js"
                >
                  <font style="vertical-align: inherit;">immediately recharge</font>
                </a>
              </font>
              <span class="next-level-js">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">One star</font>
                </font>
              </span>
              <br>
              <a
                href="/ucenter/pay/payIndex"
                class="btn btn-sm link-loding-gobut next-level-link-js"
              ></a>
            </div>
            <div class="vip-header next-level-group-div">
              <i class="icon-gift"></i>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">If you reach</font>
              </font>
              <span class="next-level-js">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">One star</font>
                </font>
              </span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">you can enjoy</font>
              </font>
            </div>
            <ul class="list-inline next-level-group-div d-flex">
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Wash code ratio</font>
                </font>
                <span class="next-level-rate-js">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0.60%</font>
                  </font>
                </span>
              </li>
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Promotion Gifts</font>
                </font>
                <span class="next-level-bonus-js">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0</font>
                  </font>
                </span>
              </li>
              <li>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">VIP deposit</font>
                </font>
                <span>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">priority privilege</font>
                  </font>
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="tips">
          <i class="icon-exclamation-circle"></i>
          <span>
            <font style="vertical-align: inherit;">
              <font
                style="vertical-align: inherit;"
              >Promotional star betting amount statistics period: Beijing time Monday 00:00:00 to Sunday 23:59:59</font>
            </font>
            <br>
            <font style="vertical-align: inherit;">
              <font
                style="vertical-align: inherit;"
              >promotion bonus time: After successful promotion of the star rating, the bonus will be automatically distributed, please click after receiving the bonus distribution notice You can receive it (the bonus is valid for 30 days and expires)</font>
            </font>
          </span>
        </div>
      </div>
      <div class="section-3">
        <p>
          <span>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Friend recommendation</font>
            </font>
          </span>
          <font style="vertical-align: inherit;">
            <font
              style="vertical-align: inherit;"
            >(invite friends to share the recommendation code and earn a free bonus)</font>
          </font>
        </p>
        <div class="media">
          <div class="media-left" id="account-recommend">
            <span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">1343296</font>
              </font>
            </span>
          </div>
          <div class="media-body">
            <p>
              <font style="vertical-align: inherit;">
                <font
                  style="vertical-align: inherit;"
                >Referring friends can enjoy a bonus of 0.1% of the effective bet amount of the friend, that is, the delivery is sent, the top is not capped.</font>
              </font>
            </p>
            <a href="/publicity/recommend" target="_blank" class="hide">查看详情</a>
            <dl class="dl-horizontal">
              <dt>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Recommended method:</font>
                </font>
              </dt>
              <dd>
                <span>
                  <font style="vertical-align: inherit;">
                    <font
                      style="vertical-align: inherit;"
                    >1. Let your friends fill in the digital recommendation code on the left when registering an account.</font>
                  </font>
                </span>
              </dd>
              <dd class="nested">
                <span>
                  <font style="vertical-align: inherit;">
                    <font
                      style="vertical-align: inherit;"
                    >2. Click on the link on the right to copy, send referral link to your friends registered account</font>
                  </font>
                </span>
                <a
                  style="cursor: pointer;margin-left:-21px"
                  id="copy_link_button"
                  data-clipboard-text="https://ag9.com/register?recommendcode=1343296"
                  title="copy Link"
                  class="btn-copy"
                >
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Copy Link</font>
                  </font>
                </a>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <!-- 登录设定 -->
      <div class="modal" id="user-phone" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content account-phone-wrap">
            <div class="modal-header">
              <h4 class="modal-title">验证电话</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <div class="sections">
                <div class="msection-1 section-area">
                  <div class="content-details">
                    <form id="verifyPhoneForm" class="form-horizontal form-template">
                      <p class="text-center">
                        我的手机号码：
                        <span class="js-phone"></span>
                      </p>
                      <p class="text-center text-orange">系统发送短信验证码至已绑定手机号码，输入并立即验证</p>
                      <div class="form-group">
                        <label class="control-label col-xs-3">
                          <span class="required">*</span>验证码：
                        </label>
                        <div class="col-xs-9">
                          <div class="col-xs-6">
                            <input
                              id="captcha"
                              name="captcha"
                              type="text"
                              maxlength="6"
                              class="form-control"
                              placeholder="请输入手机验证码"
                            >
                          </div>
                          <a
                            class="btn-resend btn-offset col-xs-5 col-xs-push-1 pointer-link"
                            verify-type="bound"
                          >发送手机验证码</a>
                        </div>
                        <p class="error-msg"></p>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-9 col-xs-push-3 submit">
                          <a class="btn-submit btn-block" data-selection="msection-2">立即验证</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="msection-2 section-area" style="display: none">
                  <div class="content-details">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th>登录方式</th>
                          <th>&nbsp;</th>
                        </tr>
                        <tr>
                          <td>密码登录</td>
                          <td>
                            <em>账号密码登录</em>
                            <label class="switcher">
                              <input name="passwordLogin" type="checkbox">
                              <span>
                                <i></i>
                              </span>
                            </label>
                          </td>
                        </tr>
                        <tr class="highlight">
                          <td>动态密码登录</td>
                          <td>
                            <em>绑定手机接收动态密码短信</em>
                            <label class="switcher">
                              <input name="smsLogin" type="checkbox">
                              <span>
                                <i></i>
                              </span>
                            </label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data(){
    return{
      id:null,
      user_id:null,
      provider_name:null,
      balance:null,
      pro_id:null,
      login_at:null,
      name:null,
      email:null,
    }
  },mounted() {
      this.userdata()
  },methods: {
    refresh(){
        this.userdata()
    },
     userdata(){
      axios.get('/userdetaildata').then(res=>{
        console.log(res.data)
        this.id = res.data.id
        this.user_id = res.data.user_id
        this.provider_name = res.data.provider_name
        this.balance = res.data.userBalance
        this.pro_id = res.data.pro_id
        this.name = res.data.name
        this.email = res.data.email
        this.login_at = res.data.updated_at
        $('.id').val(this.id);
        $('.provider_name').val(this.provider_name);
        $('.balance').val(this.balance);
        $('.pro_id').val(this.pro_id);
        $('.name').val(this.name);
        $('.email').val(this.email);
      }).catch(er=>{
        console.log(er.res)
      })
    },
  },
};
</script>
<style scoped>
</style>

