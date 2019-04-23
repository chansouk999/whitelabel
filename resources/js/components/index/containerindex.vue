<template>
  <div>
    <div class="wrapper container-whitelabel">
      <asides></asides>

      <div class="main-panel">
        <navbars></navbars>

        <div class="content">
          <div class="row">
            <div class="col-12 p-0">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>-->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="first-slide"
                      src="https://static-pc.swcqlz.com/cms/cms_pic/201903287c512df06b914cefb2b3a96d20d3fdbd.jpg"
                      alt="First
              slide"
                    >
                    <div class="container">
                      <div class="carousel-caption text-left">
                        <div class="carousel-caption">
                          <!-- <img src="./images/logo.png" width="13%"> -->
                          <h4 class="text-head">TNK</h4>
                          <p class="text-detail">Come to Play</p>
                          <a href="#" class="btn btn-outline-warning btn_readmore">
                            Lear More
                            <i class="tim-icons icon-double-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img
                      class="second-slide"
                      src="https://static-pc.swcqlz.com/cms/cms_pic/20190116b7081a09233642559f3d536b0f67a03c.jpg"
                      alt="Second
              slide"
                    >
                    <div class="container">
                      <div class="slide-caption">
                        <h2 class="slide-caption__title">Mussum Ipsum</h2>
                        <p
                          class="slide-caption__desc"
                        >Mé faiz elementum girarzis, nisi eros vermeio.</p>
                        <a href="#" class="btn">Mussum ipsum button</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img
                      class="third-slide"
                      src="https://static-pc.swcqlz.com/cms/cms_pic/201904186dd50985f5c34d37ae90fc88627920ea.jpg"
                      alt="Third
              slide"
                    >
                    <div class="container">
                      <div class="carousel-caption text-right"></div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img
                      class="third-slide"
                      src="https://static-pc.swcqlz.com/cms/cms_pic/2019042269bfb5e0c6d847738d2861b0d9644a79.jpg"
                      alt="Third
              slide"
                    >
                    <div class="container">
                        <div class="slide-caption">
                        <h2 class="slide-caption__title">Mussum Ipsum</h2>
                        <p
                          class="slide-caption__desc"
                        >Mé faiz elementum girarzis, nisi eros vermeio.</p>
                        <a href="#" class="btn">Mussum ipsum button</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img
                      class="third-slide"
                      src="https://static-pc.swcqlz.com/cms/cms_pic/20190116b7081a09233642559f3d536b0f67a03c.jpg"
                      alt="Third
              slide"
                    >
                    <div class="container">
                      <div class="carousel-caption text-right"></div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <i class="tim-icons icon-minimal-left icon-cutome"></i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <i class="tim-icons icon-minimal-right icon-cutome"></i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <!-- Sidebar -->
            </div>
          </div>
        </div>

        <footers></footers>
      </div>
    </div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog"></i>
          <span class="carousel-text">Setting</span>
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
          <i class="tim-icons icon-chart-bar-32 fa-2x"></i>
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
  </div>
</template>
<script>
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
export default {
  components: {
    navbars,
    asides,
    footers
  }
};
</script>
<style scoped>
</style>
