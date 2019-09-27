<template>
  <div>
    <div class="u-content u-friend">
      <div class="top-group clearfix">
        <ul class="recommand-list">
          <li class="recommand-item">
            <div class="data-box">
              <div class="week-bonus">
                <h4>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">This week bonus</font>
                  </font>
                </h4>
                <p>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">¥&nbsp;</font>
                  </font>
                  <span id="recommendCommission">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">0.00</font>
                    </font>
                  </span>
                </p>
              </div>
              <ol class="about-friends">
                <li class="friends-item">
                  <h4>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Effectively recommend friends</font>
                    </font>
                  </h4>
                  <p>
                    <span id="totalValidCustomers">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0</font>
                      </font>
                    </span>
                  </p>
                </li>
                <li class="friends-item separator-line"></li>
                <li class="friends-item">
                  <h4>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Friend's valid bet amount this week</font>
                    </font>
                  </h4>
                  <p>
                    <span id="validTurnover">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0.00</font>
                      </font>
                    </span>
                  </p>
                </li>
              </ol>
              <div class="total-bonus">
                <h4>
                  <span id="year_friend">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">2019</font>
                    </font>
                  </span>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Annual bonus total</font>
                  </font>
                </h4>
                <p>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">¥&nbsp;</font>
                  </font>
                  <span class="total-bet-year-js">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">0.00</font>
                    </font>
                  </span>
                </p>
              </div>
            </div>
          </li>
          <li class="recommand-item">
            <div class="data-box">
              <div id="recommend-qr-code" class="hidden">
                <canvas width="124" height="124"></canvas>
              </div>
              <div class="recommand-qrcode">
                <p>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Recommended QR code</font>
                  </font>
                  <span
                    type="button"
                    class="btn-link"
                    data-toggle="tooltip"
                    data-placement="top"
                    title
                    data-original-title="将二维码提供给您的朋友，请您朋友扫描二维码打开网站进行注册"
                  >
                    <i class="icon-ask"></i>
                  </span>
                </p>
                <div class="ag_qrcode qrcode">
                  <img
                    src="data:image/png;base64,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"
                  >
                </div>
              </div>
            </div>
          </li>
          <li class="recommand-item">
            <div class="data-box">
              <div class="recommand-link">
                <p>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Recommended link</font>
                  </font>
                  <span
                    type="button"
                    class="btn-link"
                    data-toggle="tooltip"
                    data-placement="top"
                    title
                    data-original-title="将推荐链接提供给您的朋友，请您朋友通过该链接进行注册"
                  >
                    <i class="icon-ask"></i>
                  </span>
                </p>
                <input
                  id="recommend-link"
                  type="text"
                  class="form-control"
                  data-text="value"
                  readonly
                >
                <a
                  id="btnCopy"
                  data-clipboard-text
                  title="Copy recommended link"
                  class="btn zeroclipboard-is-hover"
                >
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Copy recommended link</font>
                  </font>
                </a>
              </div>
            </div>
          </li>
          <li class="recommand-item">
            <div class="data-box">
              <div class="recommand-numcode">
                <p>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Recommendation code</font>
                  </font>
                  <span
                    type="button"
                    class="btn-link"
                    data-toggle="tooltip"
                    data-placement="top"
                    title
                    data-original-title="将推荐码提供给您的朋友，请您朋友在注册的时候输入推荐码"
                  >
                    <i class="icon-ask"></i>
                  </span>
                </p>
                <h4>
                  <span id="codetext">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">1343296</font>
                    </font>
                  </span>
                  <a
                    id="recommended-code-js"
                    style="display: none;"
                    href="/ucenter/recommend/code/create?redirect=/ucenter/recommend/statis"
                    class="btn"
                  >
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Click to get the recommendation code</font>
                    </font>
                  </a>
                </h4>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <form action class="form-inline">
            <label>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Date range</font>
              </font>
            </label>
            <div class="input-group">
              <p class="form-control-static" id="startDateTime">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">2019-04-22</font>
                </font>
              </p>
            </div>
            <label>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">To</font>
              </font>
            </label>
            <div class="input-group">
              <p class="form-control-static" id="endDateTime">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">2019-04-28</font>
                </font>
              </p>
            </div>
            <div class="input-group pull-right">
              <p class="tip">
                <font style="vertical-align: inherit;">
                  <font
                    style="vertical-align: inherit;"
                  >Billing cycle: Every Monday from 00:00 to Sunday 23:59:59.</font>
                  <font
                    style="vertical-align: inherit;"
                  >Added to the account before 24 o'clock every Monday.</font>
                </font>
              </p>
            </div>
          </form>
        </div>
        <div
          class="table panel-body jsgrid"
          id="tab_grid"
          style="position: static; height: auto; width: 100%;"
        >
          <div class="jsgrid-grid-header jsgrid-header-scrollbar">
            <table class="jsgrid-table">
              <tbody>
                <tr class="jsgrid-header-row">
                  <th class="jsgrid-header-cell jsgrid-align-center" style="width: 70px;">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Referee</font>
                    </font>
                  </th>
                  <th class="jsgrid-header-cell jsgrid-align-center" style="width: 70px;">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Recommended status</font>
                    </font>
                    <span
                      type="button"
                      class="btn-link"
                      data-toggle="tooltip"
                      data-placement="top"
                      title
                      data-original-title="1星级及以上的被推荐人，将视为有效活跃会员。如果您朋友是无效会员，请让您的好友进行充值，充值成功后即可自动成为有效会员。"
                    >
                      <i class="fa fa-question-circle"></i>
                    </span>
                  </th>
                  <th class="jsgrid-header-cell jsgrid-align-center" style="width: 60px;">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Effective bet amount</font>
                    </font>
                  </th>
                  <th class="jsgrid-header-cell jsgrid-align-center" style="width: 60px;">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Bonus amount</font>
                    </font>
                  </th>
                </tr>
                <tr class="jsgrid-filter-row" style="display: none;">
                  <td class="jsgrid-cell jsgrid-align-center" style="width: 70px;">
                    <input type="text">
                  </td>
                  <td class="jsgrid-cell jsgrid-align-center" style="width: 70px;">
                    <input type="text">
                  </td>
                  <td class="jsgrid-cell jsgrid-align-center" style="width: 60px;">
                    <input type="text">
                  </td>
                  <td class="jsgrid-cell jsgrid-align-center" style="width: 60px;">
                    <input type="text">
                  </td>
                </tr>
                <tr class="jsgrid-insert-row" style="display: none;">
                  <td class="jsgrid-cell jsgrid-align-center" style="width: 70px;">
                    <input type="text">
                  </td>
                  <td class="jsgrid-cell jsgrid-align-center" style="width: 70px;">
                    <input type="text">
                  </td>
                  <td class="jsgrid-cell jsgrid-align-center" style="width: 60px;">
                    <input type="text">
                  </td>
                  <td class="jsgrid-cell jsgrid-align-center" style="width: 60px;">
                    <input type="text">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="jsgrid-grid-body">
            <table class="jsgrid-table">
              <tbody>
                <tr class="jsgrid-nodata-row">
                  <td class="jsgrid-cell" colspan="4">
                    <div class="no-data">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">No data!</font>
                      </font>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div
            class="jsgrid-load-shader"
            style="display: none; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1000;"
          ></div>
          <div
            class="jsgrid-load-panel"
            style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;"
          >
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Please, wait...</font>
            </font>
          </div>
        </div>
        <div style="display: none;">
          <div id="tab_paging" class="jsgrid-pager-container" style="display: none;">
            <div class="jsgrid-pager">
              <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                <a href="javascript:void(0);">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">&lt;&lt;</font>
                  </font>
                </a>
              </span>
              <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                <a href="javascript:void(0);">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">&lt;</font>
                  </font>
                </a>
              </span>
              <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                <a href="javascript:void(0);">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">&gt;</font>
                  </font>
                </a>
              </span>
              <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                <a href="javascript:void(0);">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">&gt;&gt;</font>
                  </font>
                </a>
              </span>
            </div>
          </div>
        </div>

        <table class="table table-striped col6" id="paging-4-grid">
          <tbody>
            <tr class="last">
              <td colspan="6" class="text-right">
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
                    <input type="text" class="form-control page-no" readonly>
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
                  <div class="form-group">
                    <button class="btn btn-default refresh">
                      <i class="fa fa-refresh"></i>
                    </button>
                  </div>
                </div>
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
</template>
<script>
export default {};
</script>
<style scoped>
</style>

