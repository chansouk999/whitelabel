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
          <a href="javascript:void(0)" class="simple-text logo-normal">Stock List</a>
        </div>
        <ul class="nav">
          <li class="nav-aside active">
            <a href="http://finance.sina.com.cn/realstock/company/sh000001/nc.shtml">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">SH000001</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="http://finance.sina.com.cn/realstock/company/sz399001/nc.shtml">
              <i class="tim-icons icon-money-coins"></i>
              <p class="text-aside">SZ399001</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="http://finance.sina.com.cn/realstock/company/sh000300/nc.shtml">
              <i class="tim-icons icon-user-run"></i>
              <p class="text-aside">SH00300</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="http://finance.sina.com.cn/realstock/company/sz399415/nc.shtml">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">SZ399415</p>
            </a>
          </li>
          <li class="nav-aside">
            <a href="https://finance.sina.com.cn/money/forex/hq/DINIW.shtml">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">US dollar Index</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="tim-icons icon-image-02"></i>
              <p>
                BTC/USDT
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="https://www.hbg.com/en-us/exchange/#s=btc_usdt">
                    <span class="sidebar-mini-icon">1</span>
                    <span class="sidebar-normal">1 Minutes</span>
                  </a>
                </li>
                <li>
                  <a href="https://www.hbg.com/en-us/exchange/#s=btc_usdt">
                    <span class="sidebar-mini-icon">5</span>
                    <span class="sidebar-normal">5 Minutes</span>
                  </a>
                </li>
              </ul>
            </div>
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
