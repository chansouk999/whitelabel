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
            <!-- 支付宝 -->
            Alipay
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#transfertoapi" role="tab" data-toggle="tab">
            <i class="tim-icons icon-settings"></i>
            Transfer Balance to API game
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#topupbalacne" role="tab" data-toggle="tab">
            <i class="tim-icons icon-settings"></i>
            Top-Up
          </a>
        </li>
        <!-- <li class="nav-item">
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
        </li>-->
      </ul>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="alipay">
          <div class="card">
            <div class="card-body">
              <div class="row py-3">
                <div class="col-lg-4 text-right">
                  <label class="text-dark p-2">Amount:</label>
                </div>
                <div class="col-lg-8 form-row text-left">
                  <div class="form-group col-lg-1">
                    <input
                      type="text"
                      class="form-control"
                      @click="paymentamount = 1"
                      value="1"
                      readonly="readonly"
                    />
                  </div>
                  <div class="form-group col-lg-1">
                    <input
                      type="text"
                      class="form-control"
                      @click="paymentamount = 100"
                      value="100"
                      readonly="readonly"
                    />
                  </div>
                  <div class="form-group col-lg-1">
                    <input
                      type="text"
                      class="form-control"
                      @click="paymentamount = 200"
                      value="200"
                      readonly="readonly"
                    />
                  </div>
                  <div class="form-group col-lg-1">
                    <input
                      type="text"
                      class="form-control"
                      @click="paymentamount = 500"
                      value="500"
                      readonly="readonly"
                    />
                  </div>
                  <div class="form-group col-lg-1">
                    <input
                      type="text"
                      class="form-control"
                      @click="paymentamount = 1000"
                      value="1,000"
                      readonly="readonly"
                    />
                  </div>
                  <div class="form-group col-lg-1">
                    <input
                      type="text"
                      class="form-control"
                      @click="paymentamount = 2000"
                      value="2,000"
                      readonly="readonly"
                    />
                  </div>
                  <div class="form-group col-lg-1">
                    <input
                      type="text"
                      class="form-control"
                      @click="paymentamount = 5000"
                      value="5,000"
                      readonly="readonly"
                    />
                  </div>
                </div>
              </div>
              <form class="layui-form layui-field-box">
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <!-- <label class="text-dark p-2">充值方式：</label> -->
                    <!-- 支付金额: -->
                    <label class="text-dark p-2">Payment amount:</label>
                  </div>
                  <div class="col-lg-3">
                    <input
                      type="text"
                      name="money"
                      required
                      readonly="readonly"
                      style="background:#fff"
                      v-model="paymentamount"
                      lay-verify="required"
                      placeholder="请输入支付金额"
                      class="form-control paymentAmount"
                    />
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <!-- 充值方式 -->
                    <label class="text-dark p-2">Recharge method：</label>
                    <!-- <label class="text-dark p-2">充值金额：</label> -->
                  </div>
                  <div class="col-lg-8 form-row text-left">
                    <div class="col-lg-8 form-row text-left">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="data_type"
                            value="json"
                            v-model="recmetho"
                            title="JSON"
                            checked
                          />
                          JSON
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input
                            class="form-check-input"
                            type="radio"
                            v-model="recmetho"
                            name="data_type"
                            value="h5"
                            title="H5收银台"
                          />
                          <!-- H5收银台 -->
                          H5 checkout counter
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <!-- 支付类型： -->
                    <label class="text-dark py-3">Payment Types:</label>
                    <!-- <label class="text-dark py-3">到账金额：</label> -->
                  </div>
                  <div class="col-lg-8 text-left">
                    <div class="form-group col-md-4 px-0">
                      <select
                        id="inputState"
                        name="pay_type"
                        v-model="paymenttype"
                        class="form-control"
                      >
                        <!-- <option value="1">微信二维码</option> -->
                        <option value="2" selected>Alipay</option>
                        <!--支付宝二维码 -->
                        <!-- <option value="3">银行综合码</option> -->
                        <!-- <option value="4">银行卡</option> -->
                        <!-- <option value="10" selected>随机(微信|支付宝|银行综合码)</option> -->
                      </select>
                    </div>
                    <button
                      @click.prevent="payment"
                      type="submit"
                      class="btn btn-primary bg-custome"
                      lay-submit
                      lay-filter="submit1"
                    >Next Step</button>
                  </div>
                </div>
              </form>
              <!-- <div class="card">
                <div class="card-body">
                  <form class="layui-form layui-field-box" id="form2">
                    <div class="row py-3">
                      <div class="col-lg-4 text-right">
                        <label class="text-dark p-2">充值方式：</label>
                        <label class="text-dark p-2">订单号:</label>
                      </div>
                      <div class="col-lg-3 d-block text-left">
                        <input
                          type="text"
                          id="order_sn"
                          name="order_sn"
                          required
                          lay-verify="required"
                          value
                          placeholder="请输入订单号"
                          class="form-control"
                        >
                        <button
                          type="submit"
                          class="btn btn-custome"
                          
                          lay-submit
                          lay-filter="submit1"
                        >确认</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>-->
            </div>
          </div>
        </div>

        <div class="tab-pane" id="transfertoapi">
          <div class="panel panel-default">
            <div class="card">
              <div class="card-body">
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <label class="text-dark p-2">Current Balance: {{balance}}</label>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <label class="text-dark p-2">Amount:</label>
                  </div>
                  <div class="col-lg-8 form-row text-left">
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="transferamount = 100"
                        value="100"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="transferamount = 200"
                        value="200"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="transferamount = 500"
                        value="500"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="transferamount = 1000"
                        value="1,000"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="transferamount = 2000"
                        value="2,000"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="transferamount = 5000"
                        value="5,000"
                        readonly="readonly"
                      />
                    </div>
                  </div>
                </div>
                <form class="layui-form layui-field-box">
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <!-- <label class="text-dark p-2">充值方式：</label> -->
                      <!-- 支付金额: -->
                      <label class="text-dark p-2">amount:</label>
                    </div>
                    <div class="col-lg-3">
                      <input
                        type="text"
                        name="money"
                        required
                        readonly="readonly"
                        style="background:#fff"
                        v-model="transferamount"
                        lay-verify="required"
                        placeholder="请输入支付金额"
                        class="form-control paymentAmount"
                      />
                      <br />
                      <button
                        @click.prevent="transfermoney"
                        type="submit"
                        class="btn btn-primary bg-custome"
                        lay-submit
                        lay-filter="submit1"
                      >Send to lec68.com</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="topupbalacne">
          <div class="panel panel-default">
            <div class="card">
              <div class="card-body">
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <label class="text-dark p-2">Current Balance: {{balance}}</label>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-lg-4 text-right">
                    <label class="text-dark p-2">Amount:</label>
                  </div>
                  <div class="col-lg-8 form-row text-left">
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="topupbalannceamount = 100"
                        value="100"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="topupbalannceamount = 200"
                        value="200"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="topupbalannceamount = 500"
                        value="500"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="topupbalannceamount = 1000"
                        value="1,000"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="topupbalannceamount = 2000"
                        value="2,000"
                        readonly="readonly"
                      />
                    </div>
                    <div class="form-group col-lg-1">
                      <input
                        type="text"
                        class="form-control"
                        @click="topupbalannceamount = 5000"
                        value="5,000"
                        readonly="readonly"
                      />
                    </div>
                  </div>
                </div>
                <div class="layui-form layui-field-box">
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <!-- <label class="text-dark p-2">充值方式：</label> -->
                      <!-- 支付金额: -->
                      <label class="text-dark p-2">amount:</label>
                    </div>
                    <div class="col-lg-3">
                      <input
                        type="text"
                        name="money"
                        required
                        readonly="readonly"
                        style="background:#fff"
                        v-model="topupbalannceamount"
                        lay-verify="required"
                        placeholder="请输入支付金额"
                        class="form-control paymentAmount"
                      />
                      <br />
                      <button
                        data-toggle="modal"
                        data-target="#showtopup"
                        class="btn btn-primary bg-custome"
                      >Reuqest top-up</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="modal fade"
          id="showtopup"
          tabindex="-1"
          role="dialog"
          aria-labelledby="myModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
                <h6 class="title title-up">Modal title</h6>
              </div>
              <div class="modal-body">
                <div class="col-md-12">
                  <div class="card" style="width: 20rem;">
                    <div
                      class="card-body bg-baninfo"
                      style="background-image: url(assets/img/visa-bg.jpg);"
                    >
                      <div class="d-flex justify-content-between">
                        <h2 class="text-white">BCEL One</h2>
                        <div class="addreess">
                          <p class="text-white">Vientainer</p>
                          <p class="text-white">Xaithany</p>
                        </div>
                      </div>
                      <div class="user_id text-white">{{random}}</div>
                      <div class="d-flex justify-content-between">
                        <p class="card-userName text-white">TEST.</p>
                        <p class="card-bankAccount text-white">TEST</p>
                      </div>
                      <div class="form-check form-use float-right">
                        <label class="form-check-label text-white">
                          <input class="form-check-input checkuse" type="checkbox" />
                          Laos
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" @click.prevent="topupbalance">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
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
                        <input type="radio" name="test" value="small" checked />
                        <img src="/assets/img/wechat.png" />
                      </label>

                      <label>
                        <input type="radio" name="test" value="big" />
                        <img src="/assets/img/unionpay.png" />
                      </label>
                    </div>
                  </div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值金额：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="100" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="200" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="500" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="1,000" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="2,000" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="5,000" />
                      </div>
                    </div>
                  </div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark py-3">到账金额：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <div class="d-flex">
                        <input type="text" class="form-control mt-2" placeholder="请输入6位数验证码" />
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
                        <input type="radio" name="test" value="small" checked />
                        <img src="/assets/img/mastercard.png" />
                      </label>

                      <label>
                        <input type="radio" name="test" value="big" />
                        <img src="/assets/img/cardphone.png" />
                      </label>
                    </div>
                  </div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark p-2">充值金额：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="100" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="200" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="500" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="1,000" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="2,000" />
                      </div>
                      <div class="form-group col-lg-1">
                        <input type="text" class="form-control" value="5,000" />
                      </div>
                    </div>
                  </div>
                  <div class="row py-3">
                    <div class="col-lg-4 text-right">
                      <label class="text-dark py-3">到账金额：</label>
                    </div>
                    <div class="col-lg-8 form-row text-left">
                      <div class="d-flex">
                        <input type="text" class="form-control mt-2" placeholder="请输入6位数验证码" />
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
                        />
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
                        />
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
                        />
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
                        <input type="text" class="form-control" aria-label placeholder="优惠金额无上限" />
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
                        />
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

    <!-- QR -->
    <div id="contentpop">
      <div class="pop-qr2" v-if="loading == false">
        <div class="qr-data2">
          <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
      <div class="pop-qr" v-if="qr_pop == true">
        <div class="close-op" @click="qr_pop=false"></div>
        <div class="qr-data">
          <div id="json_html">
            {{ order_sn }}
            <div class="top-info" v-html="remake"></div>
            <img class="qrcode" :src="qrcode" alt />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { msgmixin } from "../msgmixin.js";
export default {
  mixins: [msgmixin],
  data() {
    return {
      random: "",
      topupbalannceamount: 0,
      transferamount: 0,
      order_sn: null,
      loading: null,
      remake: null,
      qrcode: null,
      paymentamount: 0,
      qr_pop: null,
      disabled: true,
      recmetho: null,
      paymenttype: null
    };
  },
  watch: {
    paymentamount(e) {
      $(".paymentAmount").css("border", "1px solid green");
      setTimeout(() => {
        $(".paymentAmount").css("border", "1px solid #bbbdc4");
      }, 500);
    }
  },
  mounted() {
    this.random = Math.random() * 100; //multiply to generate random number between 0, 100
  },
  methods: {
    topupbalance(code) {
      if (this.topupbalannceamount == 0) {
        this.$swal({
          type: "warning",
          title: "Error",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success",
          html: "Please Check your money amount",
          timer: 1000
        });
      } else {
        axios
          .post("topupbalance", {
            amount: this.topupbalannceamount,
            detail: "topup"
          })
          .then(res => {
            console.log(res.data);
            code = res.data.code;
            if (code == 200) {
              this.$swal({
                type: "success",
                title: res.data.msg,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                html: "Please check the box that you fill in",
                timer: 1000
              });
            }
            if (code == 300) {
              alert("query error");
            }
            if (code == 500) {
              alert("internal error");
            }
            if (code == 203) {
              let Time = new Date().getTime();
              let sec = res.data.data[3];
              let n = 30;
              setInterval(() => {
                sec++;
                n--;
                console.log(n - sec);
              }, 1000);
            }
          });
      }
    },
    gotar() {
      let vm = this;
      let opendata =
        '<div id="contentpop"> <div class="pop-qr" >' +
        '<div class="close-op"></div>' +
        '<div class="qr-data">' +
        '<div id="json_html">' +
        vm.order_sn +
        '<div class="top-info" >' +
        vm.remake +
        "</div>" +
        '<img class="qrcode" src="' +
        vm.qrcode +
        '" alt="">' +
        " </div>" +
        "</div>" +
        " </div> </div>";
      var win = window.open("", "LEC68.COM", "width=850px,height=1060px");
      win.document.write(
        '<html><head><title>Your QR CODE</title><link rel="stylesheet" type="text/css" href="css/mystyle.css"></head><body>'
      );
      win.document.write(opendata);
      win.document.write("</body></html>");
    }
  }
};
</script>
<style scoped>
</style>

