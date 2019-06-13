<template>
  <div>
    <notifications group="foo"/>
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
                </div>
                {{recommend_friends}}
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
                  </div>
                  {{login}}
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
                  </div>
                  {{register}}
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
                  </div>
                  {{free_trial}}
                </a>
              </li>
            </ul>
          </span>

          <!-- After Login done show this -->
          <span v-else-if="checkuser == 'true'">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a ref="message" :href="messages" class="button nav-link d-flex float-left">
                  <div class="icons">
                    <i class="tim-icons icon-chat-33 icon-default"></i>
                    <i class="tim-icons icon-chat-33 icon-hover"></i>
                  </div>
                  {{message}}
                </a>
              </li>
              <li class="nav-item">
                <a
                  ref="myaccount"
                  href="#"
                  class="button nav-link d-flex float-left"
                  @click="myaccount()"
                >
                  <div class="icons">
                    <i class="tim-icons icon-single-02 icon-default"></i>
                    <i class="tim-icons icon-single-02 icon-hover"></i>
                  </div>
                  {{myaccount_tra}}
                </a>
              </li>
              <li class="nav-item">
                <a ref="promote" :href="promote" class="button nav-link d-flex float-left">
                  <div class="icons">
                    <i class="tim-icons icon-trophy icon-default"></i>
                    <i class="tim-icons icon-trophy icon-hover"></i>
                  </div>
                  {{myprivilege}}
                </a>
              </li>
              <li class="nav-item">
                <a ref="lobby" :href="lobby" class="button nav-link d-flex float-left">
                  <div class="icons">
                    <i class="tim-icons icon-controller icon-default"></i>
                    <i class="tim-icons icon-controller icon-hover"></i>
                  </div>
                  {{gamelobby}}
                </a>
              </li>
              <li class="nav-item">
                <a
                  ref="recharge"
                  href="#"
                  class="button nav-link d-flex float-left"
                  @click="rechargeClick()"
                >
                  <div class="icons">
                    <i class="tim-icons icon-coins icon-default"></i>
                    <i class="tim-icons icon-coins icon-hover"></i>
                  </div>
                  {{recharge}}
                </a>
              </li>
              <li class="nav-item">
                <a
                  ref="withdraw"
                  href="#"
                  class="button nav-link d-flex float-left"
                  @click="withDrawClick()"
                >
                  <div class="icons">
                    <i class="tim-icons icon-money-coins icon-default"></i>
                    <i class="tim-icons icon-cart icon-hover"></i>
                  </div>
                  {{withdraw}}
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
                        <div class="col-6 bg-logout">
                          <em class="header-user-name">test</em>
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
                        <a href="/logout" class="btn-logout">
                          <i class="fa fa-power-off"></i>Log Out
                        </a>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </span>
          <ul class="navbar-nav">
            <li class="nav-item">
              <!-- Example single danger button -->
              <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-success dropdown-toggle"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span v-if="currentlang=='en'" class="flag-icon flag-icon-us d-flex">
                    <span class="ml-4">English</span>
                  </span>
                  <span v-if="currentlang=='ch'" class="flag-icon flag-icon-cn d-flex">
                    <span class="ml-4">Chines</span>
                  </span>
                  <span v-if="currentlang=='th'" class="flag-icon flag-icon-th d-flex">
                    <span class="ml-4">Thai</span>
                  </span>
                  <span v-if="currentlang=='la'" class="flag-icon flag-icon-la d-flex">
                    <span class="ml-4">Lao</span>
                  </span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="locale/en">
                    English
                    <span class="pull-right flag-icon flag-icon-us"></span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="locale/ch">
                    Chinese
                    <span class="pull-right flag-icon flag-icon-cn"></span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="locale/th">
                    Thai
                    <span class="pull-right flag-icon flag-icon-th"></span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="locale/la">
                    Lao
                    <span class="pull-right flag-icon flag-icon-la"></span>
                  </a>
                </div>
              </div>
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
                        v-model="email"
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
                        v-model="password"
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
                      class="btn btn-default animation-on-hover btn-lg btn-block mb-3"
                      @click.prevent="checklogin"
                    >Login</button>
                    <button
                      style="visibility:hidden"
                      type="submit"
                      class="btn btn-default btn-loginder animation-on-hover btn-lg btn-block mb-3"
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
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-5 ml-auto">
                  <div class="info-area info-horizontal mt-5">
                    <div class="icon icon-warning">
                      <i class="tim-icons icon-wifi"></i>
                    </div>
                    <div class="description">
                      <h3 class="info-title">Marketing</h3>
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
                      <h3 class="info-title">Fully Coded in HTML5</h3>
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
                      <h3 class="info-title">Built Audience</h3>
                      <p
                        class="description"
                      >There is also a Fully Customizable CMS Admin Dashboard for this product.</p>
                    </div>
                  </div>
                </div>
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
                            v-model="reg_name"
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
                            v-model="reg_email"
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
                            v-model="reg_password"
                            type="password"
                            class="form-control"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Enter password"
                          >
                          <br>
                          <input
                            v-model="reg_password_confirm"
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
                        <button
                          type="submit"
                          class="btn btn-primary btn-round btn-lg"
                          @click.prevent="registercheck"
                        >Register</button>
                        <button
                          type="submit"
                          style="visibility:hidden"
                          class="btn btn-primary btn-round btn-lg btnregister"
                        >Register</button>
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
export default {
  data() {
    return {
      reg_name: null,
      reg_email: null,
      reg_password: null,
      reg_password_confirm: null,
      email: null,
      password: null,
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
<<<<<<< HEAD
  mounted() {
    let check;
    let path = window.location.href
      .split("/")
      .pop()
      .split("?")[0];
    let urlParams = new URLSearchParams(window.location.search);
    let myParam = urlParams.get("page");
    if (myParam == null) {
      check = path;
    } else {
      check = myParam;
    }
    switch (check) {
      case "modern":
        this.$refs.index.classList.add("active");
        break;
      case "message":
        this.$refs.message.classList.add("active");
        break;
      case "myaccount":
        this.$refs.myaccount.classList.add("active");
        break;
      case "promote":
        this.$refs.promote.classList.add("active");
        break;
      case "lobby":
        this.$refs.lobby.classList.add("active");
        break;
      case "recharge":
        this.$refs.recharge.classList.add("active");
        break;
      case "withDrawClick":
        this.$refs.withdraw.classList.add("active");
        break;
    }
  },
=======
  // asdasdasd
>>>>>>> 3d0c628b8ba8e50a1570f31407747fcaef9c7832
  components: {},
  methods: {
    registercheck() {
      let vm = this;
      let com = vm.reg_email.split("@");
      let gotcom = com[1].split('.')[1]
      if (
        vm.reg_name === null ||
        vm.reg_email === null ||
        vm.reg_password === null ||
        vm.reg_password_confirm === null
      ) {
        alert("Please Complete the form");
      } else {
        if (!vm.reg_email.includes("@") || !vm.reg_email.includes('.com') || gotcom.length > 3 ) {
          alert('Check your email "@xxxxx.com" before submit ')
        } else if (vm.reg_password !== vm.reg_password_confirm) {
          vm.reg_password = null;
          vm.reg_password_confirm = null;
          alert("Password not Match");
        } else if (vm.reg_password.length < 7) {
          vm.reg_password = null;
          vm.reg_password_confirm = null;
          alert("Password Must Bigger Than 7 Character");
        } else {
          axios
            .post("checkreigster", { name: vm.reg_name, email: vm.reg_email })
            .then(res => {
              if (res.data.success === "nameexist") {
                alert("name already in use try another");
              } else if (res.data.success === "emailexist") {
                alert("email already in use try another");
              } else {
                $(".btnregister").click();
              }
            })
            .catch(er => {
              console.log(er.res);
            });
        }
      }
    },
// asdasdasdasd
    checklogin() {
      let vm = this
      let data = {
        email: vm.email,
        pwd: vm.password
      };
      if(data.email == null || data.pwd == null ){
           alert('Please Complete the form')
      }else if(!vm.email.includes('@') || !vm.email.includes('.com')){
         alert('Check your email "@xxxxx.com" before submit ')
      }
      else{
      axios
        .post("checklogin", data)
        .then(res => {
          if (res.data.success == "notfound") {
            console.log(res.data)
            alert('Email not found');
            // Swal.fire({
            //   type: "error",
            //   title: "Oops...",
            //   text: "please try again later!",
            //   footer: "<a href=>forgot password?</a>",
            //   timer: 2500,
            //   content: el
            // });
          } else if(res.data.success == "passwordnotmatch"){
            console.log(res.data)
             alert('Please check your password');
            // this.$notify({
            //   group: "foo",
            //   title: "Important message",
            //   text: "Hello user! This is a notification!"
            // });
           
          }else{
            console.log(res.data)
             $(".btn-loginder").click();
          }
        })
        .catch(er => {
          console.log(er.response);
        });
      }
    },

    myaccount() {
      let url = window.location.href
        .split("/")
        .pop()
        .split("?")[0];
      // alert(url)
      if (url == "message") {
        $("#myaccountlink")[0].click();
        window.location = "/message?page=myaccount";
      } else {
        window.location = "/message?page=myaccount";
      }
    },
    withDrawClick() {
      let url = window.location.href
        .split("/")
        .pop()
        .split("?")[0];
      // alert(url)
      if (url == "message") {
        $("#withDrawClick")[0].click();
        window.location = "/message?page=withDrawClick";
      } else {
        window.location = "/message?page=withDrawClick";
      }
    },
    rechargeClick() {
      let url = window.location.href
        .split("/")
        .pop()
        .split("?")[0];
      // alert(url);
      if (url == "message") {
        $("#recharge")[0].click();
        window.location = "/message?page=recharge";
      } else {
        window.location = "/message?page=recharge";
      }
    },
    setNavShowName(value, e) {
      this.navShowName = value;
      $("dd").removeClass("active");
      $(e.target.parentElement).addClass("active");
      console.log(e);
    }
  },
  props: [
    "recommend_friends",
    "message",
    "myaccount_tra",
    "myprivilege",
    "gamelobby",
    "recharge",
    "withdraw",
    "currentlang",
    "login",
    "register",
    "free_trial"
  ]
};
</script>
<style scoped>
</style>
