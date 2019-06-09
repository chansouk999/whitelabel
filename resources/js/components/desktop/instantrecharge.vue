<template>
  <div>
    <div class="u-content u-transaction">
      <ul class="nav nav-pills nav-pills-primary nav-pills-icons" role="tablist">
        <!--
        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
        -->
        <li class="nav-item">
          <a class="nav-link active" href="#alipay" role="tab" data-toggle="tab">
            <i class="tim-icons icon-atom"></i>
            支付宝
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#scancode" role="tab" data-toggle="tab">
            <i class="tim-icons icon-settings"></i>
            扫码支付
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#banktransfer" role="tab" data-toggle="tab">
            <i class="tim-icons icon-bullet-list-67"></i>
            银行卡转账
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#bitcoin" role="tab" data-toggle="tab">
            <i class="tim-icons icon-atom"></i>
            比特币支付
          </a>
        </li>
      </ul>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="alipay">
          <div class="card">
            <div class="card-body">
              <form action>
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <!-- <label class="text-dark p-2">充值方式：</label> -->
                    <label class="text-dark p-2">Recharge method:</label>
                  </div>
                  <div class="col-lg-8 form-row text-left">
                    <label>
                      <input type="radio" name="test" value="small" checked>
                      <img src="/assets/img/alipay.png">
                    </label>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <label class="text-dark p-2">Recharge amount：</label>
                    <!-- <label class="text-dark p-2">充值金额：</label> -->
                  </div>
                  <div class="col-lg-8 form-row text-left">
                    <div class="form-group col-lg-1">
                      <input type="text" class="form-control" id="inputZip" value="100">
                    </div>
                    <div class="form-group col-lg-1">
                      <input type="text" class="form-control" id="inputZip" value="200">
                    </div>
                    <div class="form-group col-lg-1">
                      <input type="text" class="form-control" id="inputZip" value="500">
                    </div>
                    <div class="form-group col-lg-1">
                      <input type="text" class="form-control" id="inputZip" value="1,000">
                    </div>
                    <div class="form-group col-lg-1">
                      <input type="text" class="form-control" id="inputZip" value="2,000">
                    </div>
                    <div class="form-group col-lg-1">
                      <input type="text" class="form-control" id="inputZip" value="5,000">
                    </div>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <label class="text-dark py-3">Amount reached：</label>
                    <!-- <label class="text-dark py-3">到账金额：</label> -->
                  </div>
                  <div class="col-lg-8 form-row text-left">
                    <div class="d-flex">
                      <input
                        type="text"
                        class="form-control mt-2"
                        id="inputZip"
                        placeholder="请输入6位数验证码"
                      >
                      <button type="submit" class="btn btn-custome">发送验证码</button>
                    </div>
                  </div>
                </div>
                <div class="d-block">
                  <button class="btn btn-custome">下一步</button>
                  <p class="text-dark">
                    <i class="fa fa-exclamation-circle"></i>支付二维码仅本次订单支付有效，
                    <i>过后请勿再使用</i>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="scancode">
          <div class="panel panel-default">
            <div class="card">
              <div class="card-body">
                <form action>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值方式：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <label>
                        <input type="radio" name="test" value="small" checked>
                        <img src="/assets/img/wechat.png">
                      </label>

                      <label>
                        <input type="radio" name="test" value="big">
                        <img src="/assets/img/unionpay.png">
                      </label>
                    </div>
                  </div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值金额：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="100">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="200">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="500">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="1,000">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="2,000">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="5,000">
                      </div>
                    </div>
                  </div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark py-3">到账金额：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <div class="d-flex">
                        <input
                          type="text"
                          class="form-control mt-2"
                          id="inputZip"
                          placeholder="请输入6位数验证码"
                        >
                        <button type="submit" class="btn btn-custome">发送验证码</button>
                      </div>
                    </div>
                  </div>
                  <div class="d-block">
                    <button class="btn btn-custome">下一步</button>
                    <p class="text-dark">
                      <i class="fa fa-exclamation-circle"></i>支付二维码仅本次订单支付有效，
                      <i>过后请勿再使用</i>
                    </p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="banktransfer">
          <div class="panel panel-default">
            <div class="card">
              <div class="card-body">
                <form action>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值方式：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <label>
                        <input type="radio" name="test" value="small" checked>
                        <img src="/assets/img/mastercard.png">
                      </label>

                      <label>
                        <input type="radio" name="test" value="big">
                        <img src="/assets/img/cardphone.png">
                      </label>
                    </div>
                  </div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值金额：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="100">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="200">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="500">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="1,000">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="2,000">
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" id="inputZip" value="5,000">
                      </div>
                    </div>
                  </div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark py-3">到账金额：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <div class="d-flex">
                        <input
                          type="text"
                          class="form-control mt-2"
                          id="inputZip"
                          placeholder="请输入6位数验证码"
                        >
                        <button type="submit" class="btn btn-custome">发送验证码</button>
                      </div>
                    </div>
                  </div>
                  <div class="d-block">
                    <button class="btn btn-custome">下一步</button>
                    <p class="text-dark">
                      <i class="fa fa-exclamation-circle"></i>支付二维码仅本次订单支付有效，
                      <i>过后请勿再使用</i>
                    </p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="bitcoin">
          <div class="panel panel-default">
            <div class="card">
              <div class="card-body">
                <form action>
                  <div class="row">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值金额：</label>
                    </div>
                    <div class="col-lg-5 form-row text-left">
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          aria-label
                          placeholder="单笔充值金额 0.01-15.6131 比特币"
                        >
                        <div class="input-group-append">
                          <span class="input-group-text bg-custome px-5 border-0">比特币</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值金额：</label>
                    </div>
                    <div class="col-lg-5 form-row text-left">
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          aria-label
                          placeholder="单笔充值金额 0.01-15.6131 比特币"
                        >
                        <div class="input-group-append">
                          <span class="input-group-text bg-custome px-5 border-0">比特币</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-dark mr-5 d-block">请输入充值金额</div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">首存特惠：</label>
                    </div>
                    <div class="col-lg-5 form-row text-left">
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          aria-label
                          placeholder="首存即送 188 人民币"
                        >
                        <div class="input-group-append">
                          <span class="input-group-text bg-custome px-5 border-0">188元</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值优惠：</label>
                    </div>
                    <div class="col-lg-5 form-row text-left">
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          aria-label
                          placeholder="优惠金额无上限"
                        >
                        <div class="input-group-append">
                          <span class="input-group-text bg-custome px-5 border-0">1%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">到账金额：</label>
                    </div>
                    <div class="col-lg-5 form-row text-left">
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          aria-label
                          placeholder="充值金额 + 优惠金额"
                        >
                        <div class="input-group-append">
                          <span class="input-group-text bg-custome px-5 border-0">人民币</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-block">
                    <button class="btn btn-custome">下一步</button>
                    <p class="text-dark">
                      <i class="fa fa-exclamation-circle"></i>支付二维码仅本次订单支付有效，
                      <i>过后请勿再使用</i>
                    </p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>

