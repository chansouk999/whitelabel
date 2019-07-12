<template>
  <div>
    <div class="u-content u-transaction">
      <ul class="nav nav-pills nav-pills-primary nav-pills-icons" role="tablist">
        <!--
        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
        -->
        <li class="nav-item">
          <a class="nav-link active" href="#withdrawalsrecord" role="tab" data-toggle="tab">
            <i class="tim-icons icon-atom"></i>
            withdrawals Record
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#rechargerecord" role="tab" data-toggle="tab">
            <i class="tim-icons icon-settings"></i>
            Rechange Recoard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#washingrecord" role="tab" data-toggle="tab">
            <i class="tim-icons icon-bullet-list-67"></i>
            Wahing Record
          </a>
        </li>
      </ul>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="withdrawalsrecord">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div id="withdraw_form" class="form-inline">
                <!-- input with datetimepicker -->
                <div class="form-group">
                  <label class="label-control px-2">Date range</label>
                  <input type="date" class="form-control" v-model="Firstdate" />
                </div>
                <div class="form-group">
                  <label class="label-control px-2">To</label>
                  <input
                    type="date"
                    class="form-control"
                    v-model="SecoundDate"
                    @change="withdraw('withdraw')"
                  />
                </div>
                <label class="px-2">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">status</font>
                  </font>
                </label>
                <!-- Example single danger button -->
                <div class="btn-group">
                  <button type="button" class="btn bg-custome">All</button>
                </div>
                <button
                  class="btn bg-custome"
                  id="search-button"
                  data-toggle="modal"
                  data-target="#searchModal"
                >
                  <i class="fa fa-search"></i> 查询\
                </button>
              </div>
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>User ID</th>
                  <th>Event</th>
                  <th>Serveby</th>
                  <th>Amount</th>
                  <th>Eventid</th>
                  <th>DATA & TIME</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(data,index) in playerRecord">
                  <td>{{index+1}}</td>
                  <td>{{ JSON.parse(data.detail).user_id }}</td>
                  <td>{{ JSON.parse(data.detail).event }}</td>
                  <td>{{ JSON.parse(data.detail).serveby }}</td>
                  <td>{{ JSON.parse(data.detail).amount }}</td>
                  <td>{{ JSON.parse(data.detail).eventid }}</td>
                  <td>{{ JSON.parse(data.detail).Time }}</td>
                </tr>
              </tbody>
            </table>

            <table class="table table-striped col6">
              <tbody>
                <tr class="last">
                  <td colspan="3" class="text-right">
                    <div action class="pull-left form-inline">
                      <div class="form-group">
                        <button class="btn btn-default step-backward">
                          <i class="fa fa-step-backward"></i>
                        </button>
                        <button class="btn btn-default backward">
                          <i class="fa fa-backward"></i>
                        </button>
                      </div>
                      <div class="form-group">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">First</font>
                        </font>
                        <input type="text" class="col-lg-2 form-control" placeholder value="0" />
                        <span class="total_page_pl">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Total 0 pages</font>
                          </font>
                        </span>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-default forward">
                          <i class="fa fa-forward"></i>
                        </button>
                        <button class="btn btn-default step-forward">
                          <i class="fa fa-step-forward"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="row2" style="width: 280px;">
                    <b>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Subtotal:</font>
                      </font>
                    </b>
                    <span class="subtotal-amount">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0</font>
                      </font>
                    </span>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">yuan</font>
                    </font>
                    <br />
                    <b>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">total:</font>
                      </font>
                    </b>
                    <span class="total-amount">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0</font>
                      </font>
                    </span>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">yuan</font>
                    </font>
                  </td>
                  <td colspan="2" style="width: 160px;">
                    <span class="page_angle">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Display 0 to 0, total 0 records</font>
                      </font>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane" id="rechargerecord">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div id="withdraw_form" class="form-inline">
                <!-- input with datetimepicker -->
                <div class="form-group">
                  <label class="label-control px-2">Date range</label>
                  <input type="date" class="form-control" v-model="Firstdate" />
                </div>
                <div class="form-group">
                  <label class="label-control px-2">To</label>
                  <input
                    type="date"
                    class="form-control"
                    v-model="SecoundDate"
                    @change="withdraw('rechange')"
                  />
                </div>
                <label class="px-2">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">status</font>
                  </font>
                </label>
                <!-- Example single danger button -->
                <div class="btn-group">
                  <button type="button" class="btn bg-custome" @click="resetData()">All</button>
                </div>
                <button
                  class="btn bg-custome"
                  id="search-button"
                  data-toggle="modal"
                  data-target="#searchModal"
                >
                  <i class="fa fa-search"></i> 查询\
                </button>
              </div>
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>User ID</th>
                  <th>Request Detail</th>
                  <th>Amount</th>
                  <th>Card No</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>Branch</th>
                  <th>Request Time</th>
                  <th>Request IP</th>
                  <th>DATA & TIME</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(data,index) in loppdataRequets">
                  <td>{{index+1}}</td>
                  <td>{{ data.userId }}</td>
                  <td>{{ data.requestDetail }}</td>
                  <td>{{ data.amount }}</td>
                  <td>{{ JSON.parse(data.detail).cardno }}</td>
                  <td>{{ JSON.parse(data.detail).regcity }}</td>
                  <td>{{ JSON.parse(data.detail).regprovince }}</td>
                  <td>{{ JSON.parse(data.detail).branch }}</td>
                  <td>{{ data.requestTime }}</td>
                  <td>{{ data.ip }}</td>
                  <td>{{ data.created_at }}</td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped col6">
              <tbody>
                <tr class="last">
                  <td colspan="3" class="text-right">
                    <div action class="pull-left form-inline">
                      <div class="form-group">
                        <button class="btn btn-default step-backward">
                          <i class="fa fa-step-backward"></i>
                        </button>
                        <button class="btn btn-default backward">
                          <i class="fa fa-backward"></i>
                        </button>
                      </div>
                      <div class="form-group">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">First</font>
                        </font>
                        <input type="text" class="col-lg-2 form-control" placeholder value="0" />
                        <span class="total_page_pl">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Total 0 pages</font>
                          </font>
                        </span>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-default forward">
                          <i class="fa fa-forward"></i>
                        </button>
                        <button class="btn btn-default step-forward">
                          <i class="fa fa-step-forward"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="row2" style="width: 280px;">
                    <b>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Subtotal:</font>
                      </font>
                    </b>
                    <span class="subtotal-amount">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0</font>
                      </font>
                    </span>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">yuan</font>
                    </font>
                    <br />
                    <b>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">total:</font>
                      </font>
                    </b>
                    <span class="total-amount">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0</font>
                      </font>
                    </span>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">yuan</font>
                    </font>
                  </td>
                  <td colspan="2" style="width: 160px;">
                    <span class="page_angle">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Display 0 to 0, total 0 records</font>
                      </font>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane" id="washingrecord">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div id="withdraw_form" class="form-inline">
                <!-- input with datetimepicker -->
                <div class="form-group">
                  <label class="label-control px-2">Date range</label>
                  <input type="text" class="form-control datetimepicker" value="10/05/2018" />
                </div>
                <div class="form-group">
                  <label class="label-control px-2">To</label>
                  <input type="text" class="form-control datetimepicker" value="10/05/2018" />
                </div>
                <label class="px-2">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">status</font>
                  </font>
                </label>
                <!-- Example single danger button -->
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-primary dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >All</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
                <button
                  class="btn btn-primary"
                  id="search-button"
                  data-toggle="modal"
                  data-target="#searchModal"
                >
                  <i class="fa fa-search"></i> 查询
                </button>
              </div>
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>申请时间</th>
                  <th>提现单号</th>
                  <th>提现银行卡</th>
                  <th>申请时间</th>
                  <th>提现单号</th>
                  <th>提现银行卡</th>
                  <th>提现银行卡</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mark</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                </tr>
              </tbody>
            </table>

            <table class="table table-striped col6">
              <tbody>
                <tr class="last">
                  <td colspan="3" class="text-right">
                    <div action class="pull-left form-inline">
                      <div class="form-group">
                        <button class="btn btn-default step-backward">
                          <i class="fa fa-step-backward"></i>
                        </button>
                        <button class="btn btn-default backward">
                          <i class="fa fa-backward"></i>
                        </button>
                      </div>
                      <div class="form-group">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">First test</font>
                        </font>
                        <input type="text" class="col-lg-2 form-control" placeholder value="0" />
                        <span class="total_page_pl">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Total 0 pages</font>
                          </font>
                        </span>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-default forward">
                          <i class="fa fa-forward"></i>
                        </button>
                        <button class="btn btn-default step-forward">
                          <i class="fa fa-step-forward"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="row2" style="width: 280px;">
                    <b>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Subtotal:</font>
                      </font>
                    </b>
                    <span class="subtotal-amount">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0</font>
                      </font>
                    </span>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">yuan</font>
                    </font>
                    <br />
                    <b>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">total:</font>
                      </font>
                    </b>
                    <span class="total-amount">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0</font>
                      </font>
                    </span>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">yuan</font>
                    </font>
                  </td>
                  <td colspan="2" style="width: 160px;">
                    <span class="page_angle">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Display 0 to 0, total 0 records</font>
                      </font>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane fade tab-1 active in" id="tab-1">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div id="collapse-t1-3" class="panel-collapse collapse">
                <div class="panel-body">
                  <i class="fa fa-font"></i>表示提现已完成，请您登录银行账户查询确认。注：银行转账的到账时间主要取决于银行，如遇节假日跨行转账可能会有延迟，提现到账也将会被延迟。
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade tab-2" id="tab-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="form-inline">
                <label>日期范围</label>
                <div class="input-group">
                  <input
                    id="deposit_begin_time"
                    type="text"
                    class="form-control date-input"
                    placeholder="2016-12-05 12:00:00"
                    readonly
                  />
                  <span class="input-group-btn">
                    <button
                      class="btn btn-default"
                      type="button"
                      onclick="$('#deposit_begin_time').datetimepicker('show');"
                    >
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
                </div>
                <label>到</label>
                <div class="input-group">
                  <input
                    id="deposit_end_time"
                    type="text"
                    class="form-control date-input"
                    placeholder="2016-12-05 12:00:00"
                    readonly
                  />
                  <span class="input-group-btn">
                    <button
                      class="btn btn-default"
                      type="button"
                      onclick="$('#deposit_end_time').datetimepicker('show');"
                    >
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
                </div>
                <label>类型</label>
                <div class="input-group">
                  <select class="form-control" id="orderType">
                    <option selected value="ONLINE_PAYMENT">在线支付</option>
                    <option value="VIRTUAL_ALL">比特币支付</option>
                    <option value="BQ">银行卡转账</option>
                  </select>
                </div>
                <label>状态</label>
                <div class="input-group">
                  <select name="paymentFlag" id="paymentFlag" class="form-control">
                    <option value selected>全部</option>
                    <option value="WAIT">等待</option>
                    <option value="SUCCESS">成功</option>
                    <option value="FAILED">失败</option>
                  </select>
                </div>
                <button id="deposit_search" class="btn btn-orange">
                  <i class="fa fa-search"></i> 查询
                </button>
              </div>
            </div>
            <div class="panel-body" id="tab-2-grid"></div>
            <div class="hid_paging">
              <div id="deposit_paging"></div>
            </div>

            <table class="table table-striped col6" id="paging-2-grid">
              <tbody>
                <tr class="last">
                  <td colspan="3" class="text-right">
                    <div action class="pull-left form-inline">
                      <div class="form-group">
                        <button class="btn btn-default step-backward">
                          <i class="fa fa-step-backward"></i>
                        </button>
                        <button class="btn btn-default backward">
                          <i class="fa fa-backward"></i>
                        </button>
                      </div>
                      <div class="form-group">
                        第
                        <input type="text" class="form-control page-no" readonly />
                        <span class="total_page_pl">共 0 页</span>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-default forward">
                          <i class="fa fa-forward"></i>
                        </button>
                        <button class="btn btn-default step-forward">
                          <i class="fa fa-step-forward"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="row2" style="width: 300px;">
                    <b>小计：</b>
                    <span class="subtotal-amount">0</span>元
                    <br />
                    <b>总计：</b>
                    <span class="total-amount">0</span>元
                  </td>
                  <td colspan="1" style="width: 388px;">
                    <span class="page_angle">显示0到0,共0记录</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="footnote">温馨提示：在线支付类型包含 在线支付、扫码支付、APP支付</p>
          <div class="panel-group accordion" id="accordion2">
            <div class="panel panel-default">
              <div class="panel-heading" id="heading-t2-1">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse-t2-1">
                    <i class="fa fa-quora"></i>在线支付未到账？
                  </a>
                </h4>
              </div>
              <div id="collapse-t2-1" class="panel-collapse collapse">
                <div class="panel-body">
                  <dl class="dl-horizontal">
                    <dt>
                      <i class="fa fa-font"></i>
                    </dt>
                    <dd>
                      确认您的银行卡是否已经扣款成功，短信不能作为出入账凭证哦；
                      <br />如银行卡已扣款成功，请复制单号联系
                      <a href="javascript:;" class="text-orange as-cs-js">在线客服</a>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" id="heading-t2-2">
                <h4 class="panel-title">
                  <a
                    class="collapsed"
                    data-toggle="collapse"
                    data-parent="#accordion2"
                    href="#collapse-t2-2"
                  >
                    <i class="fa fa-quora"></i>二维码支付未到账？
                  </a>
                </h4>
              </div>
              <div id="collapse-t2-2" class="panel-collapse collapse">
                <div class="panel-body">
                  <dl class="dl-horizontal">
                    <dt>
                      <i class="fa fa-font"></i>
                    </dt>
                    <dd>确认您的微信/支付宝是否已经扣款成功，短信不能作为出入账凭证哦；</dd>
                    <dd>
                      如微信/支付宝已扣款成功，请复制单号联系
                      <a href="javascript:;" class="text-orange as-cs-js">在线客服</a>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" id="heading-t2-3">
                <h4 class="panel-title">
                  <a
                    class="collapsed"
                    data-toggle="collapse"
                    data-parent="#accordion2"
                    href="#collapse-t2-3"
                  >
                    <i class="fa fa-quora"></i>银行卡充值未到账？
                  </a>
                </h4>
              </div>
              <div id="collapse-t2-3" class="panel-collapse collapse">
                <div class="panel-body">
                  <dl class="dl-horizontal">
                    <dt>
                      <i class="fa fa-font"></i>
                    </dt>
                    <dd>确认您的银行卡是否转账成功，跨行转账如未选择实时汇款，则无法实时到账，请耐心等待银行转账成功后即可到账。</dd>
                    <dd>
                      请检查您所提交的订单信息是否正确，汇款人姓名、充值金额是否与订单信息一致。订单信息填写有误，点此
                      <a
                        href="/ucenter/pay/payIndex#tab-3"
                      >重新提交</a>。
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" id="heading-t2-4">
                <h4 class="panel-title">
                  <a
                    class="collapsed"
                    data-toggle="collapse"
                    data-parent="#accordion2"
                    href="#collapse-t2-4"
                  >
                    <i class="fa fa-quora"></i>支付宝充值未到账？
                  </a>
                </h4>
              </div>
              <div id="collapse-t2-4" class="panel-collapse collapse">
                <div class="panel-body">
                  <dl class="dl-horizontal">
                    <dt>
                      <i class="fa fa-font"></i>
                    </dt>
                    <dd>请登录支付宝查看转账状态，只有状态为成功才代表转账成功，如遇银行系统清算，支付宝转账会有延迟。</dd>
                    <dd>
                      请检查您所提交的订单信息是否正确，汇款姓名、充值金额是否与订单信息一致。订单信息填写有误，点此
                      <a
                        href="/ucenter/pay/payIndex#tab-4"
                      >重新提交</a>。
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade tab-3" id="tab-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="form-inline">
                <label>日期范围</label>
                <div class="input-group">
                  <input
                    id="rebate_begin_time"
                    type="text"
                    class="form-control"
                    placeholder="2016-12-05 12:00:00"
                    readonly
                  />
                  <span class="input-group-btn">
                    <button
                      class="btn btn-default"
                      type="button"
                      onclick="$('#rebate_begin_time').datetimepicker('show');"
                    >
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
                </div>
                <label>到</label>
                <div class="input-group">
                  <input
                    id="rebate_end_time"
                    type="text"
                    class="form-control"
                    placeholder="2016-12-05 12:00:00"
                    readonly
                  />
                  <span class="input-group-btn">
                    <button
                      class="btn btn-default"
                      type="button"
                      onclick="$('#rebate_end_time').datetimepicker('show');"
                    >
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
                </div>
                <label>类型</label>
                <select id="rebate_type" class="form-control">
                  <option value="AUTOMATIC">周洗码</option>
                  <option selected value="MANUAL">实时洗码</option>
                </select>
                <button id="rebate_search" class="btn btn-orange">
                  <i class="fa fa-search"></i> 查询
                </button>
              </div>
            </div>
            <div class="panel-body" id="tab-3-grid"></div>
            <div class="hid_paging">
              <div id="rebate_paging"></div>
            </div>

            <table class="table table-striped col6" id="paging-3-grid">
              <tbody>
                <tr class="last">
                  <td colspan="3" class="text-right">
                    <div action class="pull-left form-inline">
                      <div class="form-group">
                        <button class="btn btn-default step-backward">
                          <i class="fa fa-step-backward"></i>
                        </button>
                        <button class="btn btn-default backward">
                          <i class="fa fa-backward"></i>
                        </button>
                      </div>
                      <div class="form-group">
                        第
                        <input type="text" class="form-control page-no" readonly />
                        <span class="total_page_pl">共 0 页</span>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-default forward">
                          <i class="fa fa-forward"></i>
                        </button>
                        <button class="btn btn-default step-forward">
                          <i class="fa fa-step-forward"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="row2" style="width: 300px;">
                    <b>小计：</b>
                    <span class="subtotal-amount">0</span>元
                    <br />
                    <b>总计：</b>
                    <span class="total-amount">0</span>元
                  </td>
                  <td colspan="1" style="width: 339px">
                    <span class="page_angle">显示0到0,共0记录</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade tab-4" id="tab-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="form-inline">
                <label>日期范围</label>
                <div class="input-group">
                  <input
                    id="promotion_begin_time"
                    type="text"
                    class="form-control"
                    placeholder="2016-12-05 12:00:00"
                    readonly
                  />
                  <span class="input-group-btn">
                    <button
                      class="btn btn-default"
                      type="button"
                      onclick="$('#promotion_begin_time').datetimepicker('show');"
                    >
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
                </div>
                <label>到</label>
                <div class="input-group">
                  <input
                    id="promotion_end_time"
                    type="text"
                    class="form-control"
                    placeholder="2016-12-05 12:00:00"
                    readonly
                  />
                  <span class="input-group-btn">
                    <button
                      class="btn btn-default"
                      type="button"
                      onclick="$('#promotion_end_time').datetimepicker('show');"
                    >
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
                </div>
                <button id="promotion_search" class="btn btn-orange">
                  <i class="fa fa-search"></i> 查询
                </button>
              </div>
            </div>
            <div class="panel-body" id="tab-4-grid"></div>
            <div class="hid_paging">
              <div id="promotion_paging"></div>
            </div>

            <table class="table table-striped col6" id="paging-4-grid">
              <tbody>
                <tr class="last">
                  <td colspan="3" class="text-right">
                    <div action class="pull-left form-inline">
                      <div class="form-group">
                        <button class="btn btn-default step-backward">
                          <i class="fa fa-step-backward"></i>
                        </button>
                        <button class="btn btn-default backward">
                          <i class="fa fa-backward"></i>
                        </button>
                      </div>
                      <div class="form-group">
                        第
                        <input type="text" class="form-control page-no" readonly />
                        <span class="total_page_pl">共 0 页</span>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-default forward">
                          <i class="fa fa-forward"></i>
                        </button>
                        <button class="btn btn-default step-forward">
                          <i class="fa fa-step-forward"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="row2" style="width: 500px;">
                    <b>小计：</b>
                    <span class="subtotal-amount">0</span>元
                    <br />
                    <b>总计：</b>
                    <span class="total-amount">0</span>元
                  </td>
                  <td colspan="1" style="width: 389px;">
                    <span class="page_angle">显示0到0,共0记录</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- 游戏记录 -->
        <div class="tab-pane fade tab-5" id="tab-5" style>
          <div class="panel panel-default">
            <div class="panel-heading">
              <form class="form-inline">
                <label for="gameRecord_beginDateTime">日期范围</label>
                <div class="input-group">
                  <input id="gameRecord_beginDateTime" type="text" class="form-control" readonly />
                  <span class="input-group-btn">
                    <button
                      class="btn btn-default"
                      type="button"
                      onclick="$('#gameRecord_beginDateTime').datetimepicker('show');"
                    >
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
                </div>
                <label for="gameRecord_endDateTime">到</label>
                <div class="input-group">
                  <input id="gameRecord_endDateTime" type="text" class="form-control" readonly />
                  <span class="input-group-btn">
                    <button
                      class="btn btn-default"
                      type="button"
                      onclick="$('#gameRecord_endDateTime').datetimepicker('show');"
                    >
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
                </div>
                <label for="gameRecord_gamePlatformId">游戏平台</label>
                <select id="gameRecord_gamePlatformId" class="form-control">
                  <option value="AG_QJ">AG旗舰厅</option>
                  <option value="AG_GJ">AG国际厅</option>
                  <option value="AG_CASINO">AG赌场厅</option>
                  <option value="AG_EG">AG电游</option>
                  <option value="AS_EG">AS电玩城</option>
                  <option value="PP_EG">PP电游</option>
                  <option value="PNG_EG">PNG电游</option>
                  <option value="TTG_EG">TTG电游</option>
                  <option value="MG_EG">MG电游</option>
                  <option value="PT_EG">PT电游</option>
                  <option value="SW_EG">SW电游</option>
                  <option value="AG_FISH">AG捕鱼王</option>
                  <option value="SB_SPORT">沙巴体育</option>
                  <option value="AG_SPORT">AG国际体育</option>
                  <option value="SCG">QG刮刮彩</option>
                  <option value="NBT">亚游劲彩</option>
                  <option value="VRLOT">VR彩票</option>
                  <option value="SCGHB">QG疯狂红包</option>
                </select>
                <a id="gameRecord_search" href="javascript:;" class="btn btn-orange">
                  <i class="fa fa-search"></i>查询
                </a>
              </form>
            </div>
            <div class="panel-body">
              <table id="gameRecord_table" class="table table-striped col6">
                <tbody>
                  <tr>
                    <th>时间</th>
                    <th>平台</th>
                    <th>游戏类型</th>
                    <th>投注单号</th>
                    <th>投注金额</th>
                    <th>有效投注额</th>
                    <th>派彩金额</th>
                    <th>备注说明</th>
                  </tr>
                  <tr>
                    <td colspan="8">所选时间段内暂无记录!</td>
                  </tr>
                  <tr class="last">
                    <td colspan="4" class="text-right">
                      <div class="pull-left form-inline">
                        <div class="form-group">
                          <button class="btn btn-default">
                            <i class="gameRecord fa fa-step-backward"></i>
                          </button>
                          <button class="btn btn-default">
                            <i class="gameRecord fa fa-backward"></i>
                          </button>
                        </div>
                        <div class="form-group">
                          第
                          <input type="text" class="form-control page-no" readonly value="0" /> 页 共0页
                        </div>
                        <div class="form-group">
                          <button class="btn btn-default">
                            <i class="gameRecord fa fa-forward"></i>
                          </button>
                          <button class="btn btn-default">
                            <i class="gameRecord fa fa-step-forward"></i>
                          </button>
                        </div>
                      </div>
                    </td>
                    <td>
                      <b>共计:</b>0
                    </td>
                    <td>0</td>
                    <td>0</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <p class="footnote">温馨提示：实时投注记录需在5分钟后查询。</p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      Firstdate: "",
      SecoundDate: "",
      playerRecord: [],
      loppdataRequets: []
    };
  },
  mounted() {
    let today = new Date();
    let dd = String(today.getDate()).padStart(2, "0");
    let mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
    let yyyy = today.getFullYear();
    today = yyyy + "-" + mm + "-" + dd;
    this.Firstdate = today;
    this.SecoundDate = today;
    this.GetPlayerRecore();
    this.getRequetUser();
  },
  methods: {
    withdraw(rechange) {
      let data = {
        fristdate: this.Firstdate,
        secound: this.SecoundDate,
        tab: rechange
      };
      axios
        .post("/getDate", data)
        .then(res => {
          if (res.data.method == "Rechange") {
            this.loppdataRequets = res.data.Data;
          } else {
            this.playerRecord = res.data.Data;
          }
          console.log(res.data);
        })
        .catch(res => {
          console.log(res.respone);
        });
    },
    resetData() {
      this.getRequetUser();
      console.log(this.loppdataRequets);
    },
    GetPlayerRecore() {
      axios.get("/getPlayerRecord").then(res => {
        console.log(res.data);
        this.playerRecord = res.data;
      });
    },
    getRequetUser() {
      axios.get("/getRequets").then(res => {
        console.log(res.data);
        this.loppdataRequets = res.data;
      });
    }
  }
};
</script>
<style scoped>
</style>
