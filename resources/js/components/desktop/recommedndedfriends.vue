<template>
  <div>
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-primary">
            <div class="card-body">
              <h1 class="card-title">本周奖金</h1>
              <img class="card-img" src="/assets/img/card-primary.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">300 messages</li>
                <li class="list-group-item">150 emails</li>
                <li class="list-group-item">24/7 Support</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>95
                </h3>
                <h5 class="text-on-back">95</h5>
                <p class="plan">Professional plan</p>
              </div>
            </div>
            <div class="card-footer rounded bg-primary text-center mx-3 my-3">
              <div class="total-bonus">
                <h4 class="text-white">
                  <span >2019</span>年奖金总计
                </h4>
                <p class="text-white">
                  ¥&nbsp;
                  <span class="ttext-white">0.00</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-success card-white">
            <div class="card-body">
              <h1 class="card-title">推荐二维码</h1>
              <img class="card-img" src="/assets/img/card-success.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="ag_qrcode qrcode">
                    <img
                      src="data:image/png;base64,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"
                    >
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-warning card-raised card-white">
            <div class="card-body">
              <h1 class="card-title">推荐链接</h1>
              <img class="card-img" src="/assets/img/card-warning.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
              </ul>
              <div class="card-prices margin-top">
                <div class="card">
                  <div class="card-body px-2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        value="http://192.168.1.171:8000/message"
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button class="btn btn-round btn-just-icon btn-warning">复制推荐链接</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-danger card-white">
            <div class="card-body">
              <h1 class="card-title">推荐码</h1>
              <img class="card-img" src="/assets/img/card-danger.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
              </ul>
              <div class="card-prices margin-top">
                <h3 class="text-on-front">
                  <span>$</span>1343296
                </h3>
                <h5 class="text-on-back">96</h5>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button type="button" class="btn btn-round btn-just-icon btn-danger">推荐码</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>日期范围,2019-05-27,到,2019-06-02</th>
          <th></th>
          <th></th>
          <th>结算周期：每周一00:00~每周日23:59:59。于每周一24点前添加到账。</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="w-25">被推荐人</td>
          <td class="w-25">推荐状态</td>
          <td class="w-25">有效投注额</td>
          <td class="w-25">奖金金额</td>
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
                  <font style="vertical-align: inherit;">第</font>
                </font>
                <input type="text" class="col-lg-4 form-control" placeholder value="0">
                <span class="total_page_pl">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">共 0 页</font>
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
            <br>
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
</template>
<script>
export default {};
</script>
<style scoped>
</style>

