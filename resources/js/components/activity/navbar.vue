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
          <a class="navbar-brand" :href="welcome">TNK</a>
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
                  <i class="tim-icons icon-single-02 icon-default"></i>
                  <i class="tim-icons icon-coins icon-hover"></i>
                </div>Recommend friends
              </a>
            </li>
          </ul>

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
                  <i class="fas fa-user-plus icon-default"></i>
                  <i class="tim-icons icon-badge icon-hover"></i>
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
                  <i class="tim-icons icon-controller icon-default"></i>
                  <i class="tim-icons icon-credit-card icon-hover"></i>
                </div>Recharge
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
                        <em class="header-user-name">aghq186496</em>
                        <br>
                        <span class="header-user-level level-0">新会员</span>
                      </div>
                      <small class="header-before-login-date">最近登录时间：2019-04-24 14:25:40</small>
                    </div>
                    <div class="menu-body">
                      <div id="header-balance">
                        总余额
                        <h2 class="eid_total_credit m-0 p-0">0.00</h2>
                        <div class="d-flex">
                          <p class="text-desss">
                            本地余额
                            <span id="eid_local_credit">0.00</span>
                          </p>
                          <p class="text-balance">
                            游戏余额
                            <span id="eid_game_credit">0.00</span>
                          </p>
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
          <!-- After Login done show this -->
        </div>
      </div>
    </nav>

    <!-- End Navbar -->
    <div></div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      welcome: "/"
    };
  },
  components: {}
};
</script>
<style scoped>
</style>

