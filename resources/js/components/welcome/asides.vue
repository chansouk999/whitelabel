<template>
  <div>
    <div class="navbar-minimize-fixed">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">TNK</a>
          <a href="javascript:void(0)" class="simple-text logo-normal">Creative Tim</a>
        </div>
        <ul class="nav">
          <li class="nav-aside active">
            <a href="examples/dashboard.html">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">首页</p>
            </a>
          </li>
           <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="tim-icons icon-image-02"></i>
              <p>
                Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="../examples/pages/pricing.html">
                    <span class="sidebar-mini-icon">P</span>
                    <span class="sidebar-normal"> Pricing </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/rtl.html">
                    <span class="sidebar-mini-icon">RS</span>
                    <span class="sidebar-normal"> RTL Support </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/timeline.html">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> Timeline </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/login.html">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal"> Login </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/register.html">
                    <span class="sidebar-mini-icon">R</span>
                    <span class="sidebar-normal"> Register </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/lock.html">
                    <span class="sidebar-mini-icon">LS</span>
                    <span class="sidebar-normal"> Lock Screen </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/user.html">
                    <span class="sidebar-mini-icon">UP</span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-aside">
            <a href="examples/dashboard.html">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">AG国际厅</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="examples/dashboard.html">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">AG旗舰厅</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="examples/dashboard.html">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">
                电子游戏
                <span class="badge badge-default text-danger">NEWS</span>
              </p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="examples/calendar.html">
              <i class="tim-icons icon-time-alarm"></i>
              <p class="text-aside">彩票游戏</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="examples/calendar.html">
              <i class="icon-fish"></i>
              <p class="text-aside">AG捕鱼王</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="examples/calendar.html">
              <i class="tim-icons icon-video-66"></i>
              <p class="text-aside">AS电玩城</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="examples/calendar.html">
              <i class="tim-icons icon-user-run"></i>
              <p class="text-aside">体育投注</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="examples/calendar.html">
              <i class="tim-icons icon-money-coins"></i>
              <p class="text-aside">最新优惠</p>
            </a>
          </li>
          <li class="nav-aside">
            <div class="qr-wrap">
              <div class="ocrloader">
                <em></em>
                <div>
                  <img src="/assets/img/qrcode.png" width="127px">
                </div>
                <span></span>
              </div>
            </div>
              <p>扫一扫 下载手机亚游</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>
