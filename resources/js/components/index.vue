<template>
  <div>
    <div class="wrapper container-whitelabel">
      <asides></asides>
      <div class="main-panel">
        <navbars></navbars>
        <div class="content">
          <hr>
          <div class="row">
            <div class="col-12 p-0 home-wrap">
              <div class="container-wrap main-container u-wrap">
                <div class="u-menu">
                  <div class="umenu-wrap">
                    <dl>
                      <dt>
                        <i class="icon-user"></i>我的户口
                      </dt>
                      <dd data-sidebar="u_account">
                        <a
                          class="nav-link active"
                          data-toggle="tab"
                          href="#link2"
                          role="tablist"
                          aria-expanded="true"
                        >我的账户</a>
                      </dd>
                      <dd data-sidebar="u_friend">
                        <a href="/ucenter/recommend/statis">好友推荐</a>
                      </dd>
                      <dd data-sidebar="u_transaction">
                        <a href="/ucenter/transaction/view">交易记录</a>
                      </dd>
                    </dl>
                    <dl>
                      <dt>
                        <i class="icon-yuan"></i>财务中心
                      </dt>
                      <dd data-sidebar="u_pay">
                        <a href="/ucenter/pay/payIndex">立即充值</a>
                      </dd>
                      <dd data-sidebar="u_withdraw">
                        <a href="/ucenter/withdraw/withdrawIndex">申请提现</a>
                      </dd>
                      <dd data-sidebar="u_self_rebate">
                        <a href="/ucenter/rebate/view">自助洗码</a>
                      </dd>
                    </dl>
                    <dl id="u-menu-mission">
                      <dt>
                        <i class="icon-task"></i>我的任务
                      </dt>
                      <dd class="newcomer-dd" data-sidebar="u_mission_newcomer">
                        <a href="/ucenter/mission/newcomer">新手任务</a>
                      </dd>
                      <dd class="daily-dd" data-sidebar="u_mission_daily">
                        <a href="/ucenter/mission/daily">日常任务</a>
                      </dd>
                      <dd class="achieve-dd" data-sidebar="u_mission_achieve">
                        <a href="/ucenter/mission/achieve">成就任务</a>
                      </dd>
                    </dl>
                    <dl>
                      <dt>
                        <i class="icon-records"></i>客户资料
                      </dt>
                      <dd data-sidebar="u_person_pwdIndex">
                        <a href="/ucenter/person/pwdIndex">修改密码</a>
                      </dd>
                      <dd data-sidebar="u_bank">
                        <a href="/ucenter/bank/bankIndex">银行资料</a>
                      </dd>
                      <dd data-sidebar="u_person_phoneIndex">
                        <a href="/ucenter/security/phone">修改电话</a>
                      </dd>
                    </dl>
                    <dl class="border-0">
                      <dt class="active">
                        <i class="icon-msg"></i>信息服务
                      </dt>
                      <dd data-sidebar="u_sms_subscribeIndex">
                        <a href="/ucenter/subscribe">短信订阅</a>
                      </dd>
                      <dd data-sidebar="u_station_letter" class="active">
                        <a
                          onclick="_hmt.push(['_trackEvent','AG8','消息','我的消息','我的消息']);"
                          id="eid_s_letter"
                          href="/ucenter/letters"
                        >
                          我的消息
                          <!--<shiro:hasAnyRoles name="customer:type:1">-->
                          <em class="badge letter" style>2</em>
                          <!--</shiro:hasAnyRoles>-->
                        </a>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="u-main">
                  <div class="u-title">我的消息</div>
                  <div class="u-content">
                    <!-- start your code here! -->
                    <div class="u-letter u-inner">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" id="male" class="ctr-male btn-select-all">
                          <label class="btn-select-all" for="male" data-check="true">全选</label>
                          <div class="dropdown" style="display:inline-block">
                            <button
                              class="btn btn-default dropdown-toggle"
                              type="button"
                              id="dropdownMenu1"
                              onclick="_hmt.push(['_trackEvent','AG8','我的消息','消息状态','消息状态']);"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="true"
                            >
                              消息状态
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li>
                                <a href="#" data-href="ALL">全部</a>
                              </li>
                              <li>
                                <a href="#" data-href="READ">已读</a>
                              </li>
                              <li>
                                <a href="#" data-href="UNREAD">未读</a>
                              </li>
                            </ul>
                          </div>
                          <a
                            class="btn btn-default btn-cancel"
                            onclick="_hmt.push(['_trackEvent','AG8','我的消息','标为已读','标为已读']);"
                          >标为已读</a>
                          <a
                            class="btn btn-default btn-del"
                            onclick="_hmt.push(['_trackEvent','AG8','我的消息','删除所选','删除所选']);"
                          >删除所选</a>
                        </div>
                        <ul class="nav nav-tabs yh-tabs">
                          <li class="active">
                            <a
                              data-toggle="tab"
                              aria-expanded="false"
                              data-value="0"
                              onclick="_hmt.push(['_trackEvent','AG8','我的消息','优惠通知','优惠通知']);"
                            >优惠通知</a>
                            <em class="badge">2</em>
                          </li>
                          <li class>
                            <a
                              data-toggle="tab"
                              aria-expanded="true"
                              data-value="1"
                              onclick="_hmt.push(['_trackEvent','AG8','我的消息','系统公告','系统公告']);"
                            >系统公告</a>
                          </li>
                        </ul>
                        <ul class="list-group letter-list" data-init="1">
                          <li>
                            <input type="checkbox" class="form-control" value="132922">
                            <a
                              class="trun-right"
                              href="/ucenter/letter/details/index.html?id=132922&amp;msgType=0"
                            >
                              <h3 class="not-read">
                                【优惠通知】亚游电台第九期大奖活动！
                                <span class="s-right">2019-04-19 11:28</span>
                              </h3>
                              <p>
                                亚游电台第九期，全新的互动奖励，彩券、刮刮卡、礼金邀您来抢！更多详情
                                点我
                              </p>
                            </a>
                          </li>
                          <li>
                            <input type="checkbox" class="form-control" value="125129">
                            <a
                              class="trun-right"
                              href="/ucenter/letter/details/index.html?id=125129&amp;msgType=0"
                            >
                              <h3 class="not-read">
                                PP玩转锦标赛，红包领不停
                                <span class="s-right">2019-04-12 17:35</span>
                              </h3>
                              <p>PP电子玩转锦标赛，红包领不停！每周四18:00至周一18:00，投注指定PP电子游戏，即有机会赢取奖池！更有机会领取红...</p>
                            </a>
                          </li>
                        </ul>
                      </div>
                     <nav class="d-flex justify-content-center" aria-label="...">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">1</a>
                              </li>
                              <li class="page-item active">
                                <a class="page-link" href="#">
                                  2
                                  <span class="sr-only">(current)</span>
                                </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Sidebar -->
              <hr>
            </div>
          </div>
        </div>
        <div class="fixed-plugin">
          <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
              <img src="assets/img/q-btn.png">
              <!-- <i class="fa fa-cog"></i>
              <span class="carousel-text text-white">Setting</span>-->
            </a>
            <ul class="dropdown-menu">
              <li class="header-title">Sidebar Background</li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                  <div class="badge-colors text-center">
                    <span class="badge filter badge-primary active" data-color="primary"></span>
                    <span class="badge filter badge-info" data-color="blue"></span>
                    <span class="badge filter badge-success" data-color="green"></span>
                    <span class="badge filter badge-warning" data-color="orange"></span>
                    <span class="badge filter badge-danger" data-color="red"></span>
                  </div>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="header-title">Sidebar Mini</li>
              <li class="adjustments-line">
                <div class="togglebutton switch-sidebar-mini">
                  <span class="label-switch">OFF</span>
                  <input
                    type="checkbox"
                    name="checkbox"
                    checked
                    class="bootstrap-switch"
                    data-on-label
                    data-off-label
                  >
                  <span class="label-switch label-right">ON</span>
                </div>
                <div class="togglebutton switch-change-color mt-3">
                  <span class="label-switch">LIGHT MODE</span>
                  <input
                    type="checkbox"
                    name="checkbox"
                    class="bootstrap-switch"
                    data-on-label
                    data-off-label
                  >
                  <span class="label-switch label-right">DARK MODE</span>
                </div>
              </li>
              <li class="button-container mt-4">
                <a
                  href="../docs/1.0/getting-started/introduction.html"
                  class="btn btn-default btn-block btn-round"
                >Documentation</a>
              </li>
              <li class="header-title">Thank you for 95 shares!</li>
              <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info">
                  <i class="fab fa-twitter"></i> &middot; 45
                </button>
                <button id="facebook" class="btn btn-round btn-info">
                  <i class="fab fa-facebook-f"></i> &middot; 50
                </button>
                <br>
                <br>
                <a
                  class="github-button"
                  href="https://github.com/creativetimofficial/ct-black-dashboard-pro"
                  data-icon="octicon-star"
                  data-size="large"
                  data-show-count="true"
                  aria-label="Star ntkme/github-buttons on GitHub"
                >Star</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="fixed-plugin-cutome">
          <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
              <img src="assets/img/chat-btn.gif">
            </a>
            <ul class="dropdown-menu">
              <li class="button-container mt-4 pb-0">
                <a
                  href="../docs/1.0/getting-started/introduction.html"
                  class="btn btn-default btn-block btn-round"
                >在线咨询</a>
              </li>
              <li class="button-container pt-0">
                <a
                  href="../docs/1.0/getting-started/introduction.html"
                  class="btn btn-default btn-block btn-round"
                >电话回拨</a>
              </li>
              <li class="button-container bg-call">
                <p class="home_custom">
                  <i class="fas fa-phone-volume"></i>服务热线
                </p>
              </li>
              <li class="button-container pt-0">
                <p>香港热线(0.49元/分)</p>
                <p class="hongKong1">
                  +852-3841-5777
                  <br>
                </p>
                <p class="hongKong2">+852-3008-3777</p>
              </li>
              <li class="button-container pt-0">
                <p>菲律宾热线(0.99元/分)</p>
                <p>+63-2-949-8222</p>
              </li>
              <li class="button-container pt-0"></li>
            </ul>
          </div>
        </div>

        <div class="fixed-plugin-tools">
          <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
              <img src="/assets/img/tools-btn.png">
            </a>
            <ul class="dropdown-menu">
              <li class="button-container mt-4 pb-0">
                <a
                  href="../docs/1.0/getting-started/introduction.html"
                  class="btn btn-default btn-block btn-round"
                >在线咨询</a>
              </li>
              <li class="button-container pt-0">
                <a
                  href="../docs/1.0/getting-started/introduction.html"
                  class="btn btn-default btn-block btn-round"
                >电话回拨</a>
              </li>
              <li class="button-container bg-call">
                <p class="home_custom">
                  <i class="fas fa-phone-volume"></i>服务热线
                </p>
              </li>
              <li class="button-container pt-0">
                <p>香港热线(0.49元/分)</p>
                <p class="hongKong1">
                  +852-3841-5777
                  <br>
                </p>
                <p class="hongKong2">+852-3008-3777</p>
              </li>
              <li class="button-container pt-0">
                <p>菲律宾热线(0.99元/分)</p>
                <p>+63-2-949-8222</p>
              </li>
              <li class="button-container pt-0"></li>
            </ul>
          </div>
        </div>
        <footers></footers>
      </div>
    </div>
  </div>
</template>
<script>
import navbars from "./welcome/navbar";
import asides from "./welcome/asides";
import footers from "./welcome/footers";
export default {
  components: {
    navbars,
    asides,
    footers
  },
  mounted() {}
};
</script>
<style scoped>
</style>
