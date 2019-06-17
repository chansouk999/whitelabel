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
        <span v-if="checkuser == 'false'">
          <ul class="nav">
            <li class="nav-aside active">
              <a href="#">
                <img src="assets/img/us_flag.png" alt>
                <p class="text-aside">{{us_stock}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/bitcoin.png" alt>
                <p class="text-aside">{{cryptocurrencies}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/china_flag.png" alt>
                <p class="text-aside">{{chines_stock}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/Aragon-icon.png" alt>
                <p class="text-aside">{{lobby}}</p>
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
        </span>
        <span v-if="checkuser == 'true'">
          <ul class="nav">
            <li class="nav-aside active">
              <a href="#">
                <img src="assets/img/Aeternity-icon.png" alt>
                <p class="text-aside">{{stock1}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/Canada-eCoin-icon.png" alt>
                <p class="text-aside">{{stock2}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/Ark-icon.png" alt>
                <p class="text-aside">{{stock3}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/Augur-icon.png" alt>
                <p class="text-aside">{{stock4}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/us_flag.png" alt>
                <p class="text-aside">{{stock5}}</p>
              </a>
            </li>
            <li class="img-btc">
              <a data-toggle="collapse" href="#pagesExamples">
                <img src="assets/img/bitcoin.png" alt>
                <p>
                  {{stock6}}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse" id="pagesExamples">
                <ul class="nav">
                  <li>
                    <a href="#">
                      <span class="sidebar-mini-icon">1</span>
                      <span class="sidebar-normal">1 Minutes</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sidebar-mini-icon">5</span>
                      <span class="sidebar-normal">5 Minutes</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </span>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
  },
  props: [
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6",
    "us_stock",
    "cryptocurrencies",
    "chines_stock",
    "lobby"
  ]
};
</script>
<style scoped>
</style>
