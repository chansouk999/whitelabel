<template>
  <div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top color-bg">
      <div class="container-fluid px-0">
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
          class="navbar-toggler pl-5"
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
              <a href="#" class="button nav-link d-flex float-left">
                <div class="icons">
                  <i class="tim-icons icon-single-02 icon-default"></i>
                  <i class="tim-icons icon-coins icon-hover"></i>
                </div>Recommend friends
              </a>
            </li>
          </ul>

          <span v-if="checkuser == 'false'">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a
                  href="#"
                  class="button nav-link d-flex float-left"
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
                  class="button nav-link d-flex float-left"
                  data-toggle="modal"
                  data-target="#register"
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
                  class="button nav-link d-flex float-left"
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
          <span v-else-if="checkuser == 'true'">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a :href="messages" class="button nav-link d-flex float-left">
                  <div class="icons">
                    <i class="tim-icons icon-chat-33 icon-default"></i>
                    <i class="tim-icons icon-chat-33 icon-hover"></i>
                  </div>Message
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="button nav-link d-flex float-left" @click="myaccount()">
                  <div class="icons">
                    <i class="tim-icons icon-single-02 icon-default"></i>
                    <i class="tim-icons icon-single-02 icon-hover"></i>
                  </div>My Account
                </a>
              </li>

              <li class="nav-item">
                <a :href="lobby" class="button nav-link d-flex float-left">
                  <div class="icons">
                    <i class="tim-icons icon-controller icon-default"></i>
                    <i class="tim-icons icon-controller icon-hover"></i>
                  </div>Game Lobby
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="button nav-link d-flex float-left" @click="rechargeClick()">
                  <div class="icons">
                    <i class="tim-icons icon-coins icon-default"></i>
                    <i class="tim-icons icon-coins icon-hover"></i>
                  </div>Recharge
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="button nav-link d-flex float-left" @click="withDrawClick()">
                  <div class="icons">
                    <i class="tim-icons icon-money-coins icon-default"></i>
                    <i class="tim-icons icon-cart icon-hover"></i>
                  </div>WithDraw
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="button nav-link d-flex float-left fixed-logout">
                  <div class="dropdown show-dropdown">
                    <a href="#" data-toggle="dropdown">
                      <div class="icons">
                        <i class="tim-icons icon-single-02 icon-default"></i>
                        <i class="tim-icons icon-bullet-list-67 icon-hover"></i>
                      </div>
                    </a>
                    <div class="dropdown-menu mt-3 p-0">
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
                        <a href="logout" class="btn-logout" @click="byebye">
                          <i class="fa fa-power-off"></i>Log Out
                        </a>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </span>
        </div>
        <span class="d-none d-xl-block">
          
        </span>
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
                      <!-- <input class="form-check-input" type="checkbox"  name="remember" id="remember" value="true"> -->
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
                        data-target="#register"
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
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-7 mr-auto">
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
            <input type="text" class="form-control"  placeholder="SEARCH">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Navbar -->
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
            <div
              class="mobile-bottom-nav__item-content"
              data-toggle="modal"
              data-target="#freetrial"
            >
              <i class="tim-icons icon-controller icon-default"></i>
              <!-- Free Try -->
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
              <i class="tim-icons icon-controller icon-default"></i>
              <!-- Lobby -->
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
import myaccount from "../index/myaccount.vue";
import recommedndedfriends from "../index/recommedndedfriends.vue";
import transactionrecord from "../index/transactionrecord.vue";
import instantrecharge from "../index/instantrecharge.vue";
import applyforwithdrawal from "../index/applyforwithdrawal.vue";
import selfservicewashing from "../index/selfservicewashing.vue";
import changepassword from "../index/changepassword.vue";
import bankinfo from "../index/bankinfo.vue";
import modifyphone from "../index/modifyphone.vue";
import subscription from "../index/subscription.vue";
import message from "../index/message.vue";
export default {
  data() {
    return {
      isShowonlyIndex: false,
      navShowName: "message",
      ismenu: false,
      messages: "./index",
      welcome: "/",
      lobby: "./lobby",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
  },
  components: {
    myaccount,
    recommedndedfriends,
    transactionrecord,
    instantrecharge,
    applyforwithdrawal,
    selfservicewashing,
    changepassword,
    bankinfo,
    modifyphone,
    subscription,
    message
  },
  methods: {
    byebye(){
      let config = {
        headers:{'X-CSRF-TOKEN':this.csrf}
      }
      // axios.get('http://localhost:8001/logout',config).then(res=>{
      //   console.log('pkpkpkpk')
      // })

    },
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
