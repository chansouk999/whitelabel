<template>
  <div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-minimize d-inline">
            <button
              class="minimize-sidebar btn btn-link btn-just-icon"
              rel="tooltip"
              data-original-title="Sidebar toggle"
              data-placement="right"
            >
              <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
              <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
            </button>
          </div>
          <div class="navbar-toggle d-inline">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="javascript:void(0)">TNK</a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navigation"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="#" class="button nav-link d-flex">
                <div class="icons">
                  <i class="tim-icons icon-chat-33 icon-default"></i>
                  <i class="tim-icons icon-world icon-hover"></i>
                </div>Asia Tour Forum
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="button nav-link d-flex">
                <div class="icons">
                  <i class="tim-icons icon-bulb-63 icon-default"></i>
                  <i class="tim-icons icon-badge icon-hover"></i>
                </div>Aisan style
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="button nav-link d-flex">
                <div class="icons">
                  <i class="tim-icons icon-single-02 icon-default"></i>
                  <i class="tim-icons icon-coins icon-hover"></i>
                </div>Recommend friends
              </a>
            </li>
          </ul>

          <span v-if="!ismenu">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target="#loginModal"
                >
                  <div class="icons">
                    <i class="tim-icons icon-single-02 icon-default"></i>
                    <i class="tim-icons icon-lock-circle icon-hover"></i>
                  </div>Login
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target=".register"
                >
                  <div class="icons">
                    <i class="fas fa-user-plus icon-default"></i>
                    <i class="tim-icons icon-badge icon-hover"></i>
                  </div>Register
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target="#freetrial"
                >
                  <div class="icons">
                    <i class="tim-icons icon-controller icon-default"></i>
                    <i class="tim-icons icon-credit-card icon-hover"></i>
                  </div>Free Trial
                </a>
              </li>
            </ul>
          </span>

          <!-- After Login done show this -->
          <span v-else>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target="#loginModal"
                >
                  <div class="icons">
                    <i class="tim-icons icon-chat-33 icon-default"></i>
                    <i class="tim-icons icon-chat-33 icon-hover"></i>
                  </div>Message
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target=".register"
                >
                  <div class="icons">
                    <i class="tim-icons icon-single-02 icon-default"></i>
                    <i class="tim-icons icon-single-02 icon-hover"></i>
                  </div>My Account
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target="#freetrial"
                >
                  <div class="icons">
                    <i class="tim-icons icon-trophy icon-default"></i>
                    <i class="tim-icons icon-trophy icon-hover"></i>
                  </div>My Privilege
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target="#loginModal"
                >
                  <div class="icons">
                    <i class="tim-icons icon-controller icon-default"></i>
                    <i class="tim-icons icon-controller icon-hover"></i>
                  </div>Game Lobby
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target=".register"
                >
                  <div class="icons">
                    <i class="tim-icons icon-coins icon-default"></i>
                    <i class="tim-icons icon-coins icon-hover"></i>
                  </div>Recharge
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex"
                  data-toggle="modal"
                  data-target="#freetrial"
                >
                  <div class="icons">
                    <i class="tim-icons icon-money-coins icon-default"></i>
                    <i class="tim-icons icon-cart icon-hover"></i>
                  </div>WithDraw
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="button nav-link d-flex fixed-logout">
                  <div class="dropdown show-dropdown">
                    <a href="#" data-toggle="dropdown">
                      <div class="icons">
                        <i class="tim-icons icon-single-02 icon-default"></i>
                        <i class="tim-icons icon-bullet-list-67 icon-hover"></i>
                      </div>
                    </a>
                    <div class="dropdown-menu">
                      <div class="row p-4">
                           <div class="col-6">
                          <img src="assets/img/user.png" alt>
                        </div>
                        <div class="col-6">
                           <em class="header-user-name">aghq186496</em><br>
                          <span class="header-user-level level-0">新会员</span>
                        </div>
                        <small class="header-before-login-date">最近登录时间：2019-04-24 14:25:40</small>
                        </div>
                        <div class="menu-body">
                            <div id="header-balance">
                                总余额
                                <h2 class="eid_total_credit m-0 p-0">0.00</h2>
                               <div class="d-flex">
                                 <p class="text-desss"> 本地余额 <span id="eid_local_credit">0.00</span></p>
                                 <p class="text-balance">游戏余额 <span id="eid_game_credit">0.00</span></p>
                               </div>
                            </div>
                            <a href="javascript:;" class="btn-logout">
                                <i class="fa fa-power-off"></i>安全退出
                            </a>
                        </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </span>
        </div>
      </div>
    </nav>
    <!-- Modal Login -->
    <div class="modal fade" id="loginModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Login Page</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="col-lg-12 col-md-12">
              <form class="form">
                <div class="card card-login card-white">
                  <div class="card-header">
                    <img src="assets/img/card-primary.png" alt>
                    <h1 class="card-title">Log in</h1>
                  </div>
                  <div class="card-body">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-email-85"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" placeholder="Password" class="form-control">
                    </div>
                  </div>
                  <div class="card-footer">
                    <a
                      href="#pablo"
                      class="btn btn-primary btn-lg btn-block mb-3"
                      @click="ismenu=!ismenu"
                    >登录</a>
                    <div class="d-flex justify-content-between">
                      <a href="javascript:void(0)" class="link footer-link">忘记密码？</a>
                      <div class="d-flex">
                        <p class="link footer-link">没有账号？</p>
                        <a href="javascript:void(0)" class="link footer-link">在此注册</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Register -->
    <div class="modal fade register">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Register Page</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-5 ml-auto">
                  <div class="info-area info-horizontal mt-5">
                    <div class="icon icon-warning">
                      <i class="tim-icons icon-wifi"></i>
                    </div>
                    <div class="description">
                      <h3 class="info-title text-dark m-0">Marketing</h3>
                      <p
                        class="description"
                      >We've created the marketing campaign of the website. It was a very interesting collaboration.</p>
                    </div>
                  </div>
                  <div class="info-area info-horizontal">
                    <div class="icon icon-primary">
                      <i class="tim-icons icon-triangle-right-17"></i>
                    </div>
                    <div class="description">
                      <h3 class="info-title text-dark m-0">Fully Coded in HTML5</h3>
                      <p
                        class="description"
                      >We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.</p>
                    </div>
                  </div>
                  <div class="info-area info-horizontal">
                    <div class="icon icon-info">
                      <i class="tim-icons icon-trophy"></i>
                    </div>
                    <div class="description">
                      <h3 class="info-title text-dark m-0">Built Audience</h3>
                      <p
                        class="description"
                      >There is also a Fully Customizable CMS Admin Dashboard for this product.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 mr-auto">
                  <div class="card card-register card-white">
                    <div class="card-header">
                      <img class="card-img" src="assets/img/card-primary.png" alt="Card image">
                      <h4 class="card-title">Register</h4>
                    </div>
                    <div class="card-body">
                      <form class="form">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-single-02"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-email-85"></i>
                            </div>
                          </div>
                          <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-lock-circle"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-check text-left">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>
                            I agree to the
                            <a
                              href="javascript:void(0)"
                            >terms and conditions</a>.
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <a href="javascript:void(0)" class="btn btn-primary btn-round btn-lg">注册</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Freetrial -->

    <!-- The Modal -->
    <div class="modal fade" id="freetrial">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title text-capitalize">Free trial</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-12 mr-auto">
                  <div class="card card-register card-white">
                    <div class="card-header">
                      <img class="card-img" src="assets/img/card-primary.png" alt="Card image">
                      <h4 class="card-title text-title">12150</h4>
                    </div>
                    <div class="card-body">
                      <form class="form">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-single-02"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-check text-left">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>
                            I agree to the
                            <a
                              href="javascript:void(0)"
                            >terms and conditions</a>.
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <a href="javascript:void(0)" class="btn btn-primary btn-round btn-lg">开始试玩</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal modal-search fade"
      id="searchModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="searchModal"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Navbar -->
  </div>
</template>
<script>
export default {
  data() {
    return {
      ismenu: false
    };
  }
};
</script>
<style scoped>
</style>
