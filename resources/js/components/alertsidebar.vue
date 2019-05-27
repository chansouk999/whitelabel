<template>
  <div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x fa-spin"></i>
        </a>
        <ul class="dropdown-menu">
          <li class="header-title">Navbar Background</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors text-center">
                <span class="badge filter badge-primary" id="bg-primary"></span>
                <span class="badge filter badge-info" id="bg-info"></span>
                <span class="badge filter badge-success" id="bg-success"></span>
                <span class="badge filter badge-danger" id="bg-danger"></span>
                <span class="badge filter badge-orange" id="bg-orange"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="header-title">Sidebar Background</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors text-center">
                <span class="badge filter badge-primary active" data-color="primary"></span>
                <span class="badge filter badge-info" data-color="blue"></span>
                <span class="badge filter badge-success" data-color="green"></span>
                <span class="badge filter badge-danger" data-color="red"></span>
                <span class="badge filter badge-orange" data-color="orange"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="button-container">
            <a
              href="https://www.creative-tim.com/product/black-dashboard"
              target="_blank"
              class="btn btn-primary btn-block btn-round"
            >Download Now</a>
            <a
              href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html"
              target="_blank"
              class="btn btn-default btn-block btn-round"
            >Documentation</a>
          </li>
          <li class="header-title">Change the Background color here</li>
          <li class="button-container text-center">
            <button
              type="button"
              class="btn btn-default btn-round animation-on-hover btn-sm dark-badge"
            >DARK MODE</button>
            <button
              type="button"
              class="btn btn-success btn-round animation-on-hover btn-sm light-badge"
            >LIGHT MODE</button>
            <br>
            <br>
            <a
              class="github-button"
              href="https://github.com/creativetimofficial/black-dashboard"
              data-icon="octicon-star"
              data-size="large"
              data-show-count="true"
              aria-label="Star ntkme/github-buttons on GitHub"
            >TNK</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="fixed-plugin-cutome">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="text-white tim-icons icon-components fa-2x"></i>
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
    <div class="d-block d-xl-none">
      <nav class="mobile-bottom-nav">
        <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
          <div class="mobile-bottom-nav__item-content">
           <i class="tim-icons icon-bank"></i>
          </div>
        </div>
        <div class="mobile-bottom-nav__item">
          <div class="mobile-bottom-nav__item-content">
            <i class="tim-icons icon-chat-33 icon-default"></i>
          </div>
        </div>
        <div class="mobile-bottom-nav__item">
          <div class="mobile-bottom-nav__item-content">
            <i class="tim-icons icon-controller icon-default"></i>
          </div>
        </div>
        <div class="mobile-bottom-nav__item">
          <div class="mobile-bottom-nav__item-content">
           <i class="tim-icons icon-coins icon-default"></i>
          </div>
        </div>
        <div class="mobile-bottom-nav__item">
          <div class="mobile-bottom-nav__item-content">
            <i class="tim-icons icon-money-coins icon-default"></i>
          </div>
        </div>

        <div class="mobile-bottom-nav__item">
          <div class="mobile-bottom-nav__item-content">
            <i class="tim-icons icon-single-02"></i>
          </div>
        </div>
      </nav>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>
