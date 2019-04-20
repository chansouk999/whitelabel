<template>
  <div>
    <div class="wrapper">
      <asides></asides>

      <div class="main-panel">
        <navbars></navbars>

        <div class="content">
          <div class="row">
            <div class="col-12">
              
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/background1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="assets/images/background2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="assets/images/background3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

              <div class="container-carousel">
              <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
                <ol class="carousel-indicators">
                  <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                  <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                  <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      alt="First slide"
                      class="d-block w-100"
                      src="assets/images/background1.jpg"
                    >
                  </div>
                  <div class="carousel-item">
                    <img
                      alt="Second slide"
                      class="d-block w-100"
                      src="assets/images/background2.jpg"
                    >
                  </div>
                  <div class="carousel-item">
                    <img
                      alt="Third slide"
                      class="d-block w-100"
                      src="assets/images/background3.jpg"
                    >
                  </div>
                </div>
                <a
                  class="carousel-control-prev"
                  data-slide="prev"
                  href="#carouselExampleIndicators"
                  role="button"
                >
                  <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="carousel-control-next"
                  data-slide="next"
                  href="#carouselExampleIndicators"
                  role="button"
                >
                  <span aria-hidden="true" class="carousel-control-next-icon"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              </div>
            </div>
          </div>
        </div>

       <footers></footers>
      </div>
    </div>

    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"></i>
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
                checked
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


  </div>
</template>
<script>
import navbars from "./navbar";
import asides from "./asides";
import footers from './footers';
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
