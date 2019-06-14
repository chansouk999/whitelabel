<template>
  <div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top color-bg">
      <div class="container">
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
        <span v-if="checkuser == 'false'">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item d-flex">
              <button class="btn btn-login" data-toggle="modal" data-target="#loginModal">
                <i class="tim-icons icon-single-02 icon-default"></i>
              </button>
              <button class="btn btn-register" data-toggle="modal" data-target="#register">
                <i class="fas fa-user-plus icon-default"></i>
              </button>
            </li>
          </ul>
        </span>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="#" class="button nav-link d-flex float-left">
                <div class="icons">
                  <i class="tim-icons icon-single-02 icon-default"></i>
                  <i class="tim-icons icon-coins icon-hover"></i>
                </div>Recommend friends
              </a>
            </li>
          </ul>
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
          <div class="modal-body px-2">
            <div class="col-lg-12 col-md-12 px-0">
              <form class="form" action="login" method="POST">
                <input type="hidden" name="_token" :value="csrf">
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
                      <input
                        id="email"
                        type="email"
                        class="form-control"
                        name="email"
                        value
                        required
                        autocomplete="email"
                        autofocus
                        placeholder="Enter email"
                      >
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input
                        id="password"
                        type="password"
                        class="form-control"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter Your Password"
                      >
                    </div>
                  </div>
                  <div class="card-footer">
                    <button
                      type="submit"
                      class="btn btn-default animation-on-hover btn-lg btn-block mb-3"
                      @click="ismenu=!ismenu"
                    >Login</button>
                    <div class="d-flex justify-content-between">
                      <a
                        href="#"
                        class="link footer-link"
                        data-toggle="modal"
                        data-target=".register"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <i class="fas fa-user-plus icon-default pr-3"></i>Create Account
                      </a>
                      <div class="d-flex">
                        <a href="javascript:void(0)" class="link footer-link">Forgot Password？</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>s
        </div>
      </div>
    </div>
    <!-- Modal Register -->
    <div class="modal fade" id="register">
      <div class="modal-dialog modal-lg show">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Register Page</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body px-2">
            <div class="container">
              <div class="row">
                <div class="col-md-12 px-0">
                  <div class="card card-register card-white">
                    <form class="form" method="POST" action="register">
                      <div class="card-header">
                        <img class="card-img" src="assets/img/card-primary.png" alt="Card image">
                        <h4 class="card-title text-capitalize">Register</h4>
                      </div>
                      <div class="card-body">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-single-02"></i>
                            </div>
                          </div>
                          <input
                            id="name"
                            type="text"
                            class="form-control"
                            name="name"
                            required
                            autocomplete="name"
                            autofocus
                            placeholder="Enter your name"
                          >
                          <input type="hidden" name="_token" :value="csrf">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-email-85"></i>
                            </div>
                          </div>
                          <input
                            type="email"
                            class="form-control"
                            name="email"
                            required
                            autocomplete="email"
                            placeholder="Enter email"
                          >
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="tim-icons icon-lock-circle"></i>
                            </div>
                          </div>
                          <input
                            type="password"
                            class="form-control"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Enter password"
                          >
                          <br>
                          <input
                            id="password-confirm"
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="password_confirmation"
                          >
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
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">Register</button>
                      </div>
                    </form>
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
                <div class="col-md-7 mr-auto">
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
    <!-- mobile Max show 1199px -->

    <div class="d-block d-xl-none">
      <!-- User Not login -->
      <span v-if="checkuser == 'false'">
        <nav class="mobile-bottom-nav">
          <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
            <div class="mobile-bottom-nav__item-content">
              <i class="tim-icons icon-badge"></i>
              <!-- Recommed Friends -->
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div
              class="mobile-bottom-nav__item-content"
              data-toggle="modal"
              data-target="#loginModal"
            >
              <i class="tim-icons icon-single-02 icon-default"></i>
              <!-- Login -->
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div
              class="mobile-bottom-nav__item-content"
              data-toggle="modal"
              data-target="#register"
            >
              <i class="fa fa-user-plus"></i>
              <!-- Register -->
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <i class="tim-icons icon-settings-gear-63"></i>
              <!-- Change language -->
            </div>
          </div>
        </nav>
      </span>

      <!-- user Login -->
      <span v-else-if="checkuser == 'true'">
        <nav class="mobile-bottom-nav">
          <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
            <div class="mobile-bottom-nav__item-content">
              <i class="tim-icons icon-bank"></i>
              <!--My Account -->
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a :href="messages" @click="myaccount()">
                <i class="tim-icons icon-chat-33 icon-default"></i>
              </a>
              <!-- riviledge -->
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a href="#" @click="rechargeClick()">
                <i class="tim-icons icon-coins icon-default"></i>
              </a>
              <!-- Recharge -->
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a href="#" @click="withDrawClick()">
                <i class="tim-icons icon-money-coins icon-default"></i>
              </a>
              <!-- WithDraw -->
            </div>
          </div>

          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a href="#">
                <i class="tim-icons icon-single-02"></i>
              </a>
              <!-- Profile -->
            </div>
          </div>
        </nav>
      </span>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isShowonlyIndex: false,
      navShowName: "message",
      ismenu: false,
      messages: "./message",
      promote: "./promote",
      welcome: "/",
      lobby: "./lobby",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
  },
  components: {},
  methods: {
    myaccount() {
      $("#myaccountlink")[0].click();
    },
    withDrawClick() {
      $("#withdraw")[0].click();
    },
    rechargeClick() {
      $("#recharge")[0].click();
    },
    setNavShowName(value, e) {
      this.navShowName = value;
      $("dd").removeClass("active");
      $(e.target.parentElement).addClass("active");
      console.log(e);
    }
  }
};
</script>
<style scoped>
</style>
