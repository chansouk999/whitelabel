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
          <span v-if="checkuser == 'true'">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" :href="welcome">TNK</a>
          </span>
          <span v-if="checkuser == 'false'">
            <a class="navbar-brand" :href="welcome">TNK</a>
          </span>
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
                          <label class="form-check-label">{{msg}}</label>
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
                          class="btn btn-block btn-primary btn-round btn-lg"
                          @click.prevent="registercheck"
                        >Register</button>
                        <button
                          type="submit"
                          style="visibility:hidden"
                          class="btn btn-block btn-primary btn-round btn-lg btnregister"
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
              <a href="#">
                <i class="tim-icons icon-bank"></i>
                <p>Home</p>
                <!-- Recommed Friends -->
              </a>
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div
              class="mobile-bottom-nav__item-content"
              data-toggle="modal"
              data-target="#loginModal"
            >
              <a href="#">
                <i class="tim-icons icon-single-02 icon-default"></i>
                <p>Login</p>
                <!-- Login -->
              </a>
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div
              class="mobile-bottom-nav__item-content"
              data-toggle="modal"
              data-target="#register"
            >
              <a href="#">
                <i class="fa fa-user-plus"></i>
                <p>Register</p>
                <!-- Register -->
              </a>
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a href="#">
                <i class="tim-icons icon-settings-gear-63"></i>
                <p>Setting</p>
                <!-- Change language -->
              </a>
            </div>
          </div>
        </nav>
      </span>

      <!-- user Login -->
      <span v-else-if="checkuser == 'true'">
        <nav class="mobile-bottom-nav">
          <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
            <div class="mobile-bottom-nav__item-content">
              <a :href="welcome">
                <i class="tim-icons icon-bank"></i>
                <p>{{home}}</p>
                <!--My Account -->
              </a>
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a href="#">
                <i class="tim-icons icon-chat-33 icon-default"></i>
                <p>{{forum}}</p>
              </a>
              <!-- riviledge -->
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a href="#">
                <i class="tim-icons icon-coins icon-default"></i>
                <p>{{washcode}}</p>
              </a>
              <!-- Recharge -->
            </div>
          </div>
          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a href="#">
                <i class="tim-icons icon-credit-card"></i>
                <p>{{recharge}}</p>
              </a>
              <!-- WithDraw -->
            </div>
          </div>

          <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
              <a href="/myaccount">
                <i class="tim-icons icon-single-02"></i>
                <p>{{mine}}</p>
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
      msg: "we are waiting for you",
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

  watch: {
    reg_email(data) {
      let vm = this;
      let com = data.split("@");
      let gotcom = com[1].split(".")[1];
      if (!data.includes("@") || !data.includes(".com") || gotcom.length > 3) {
        vm.msg = "Check email form Ex:abc@gmail.com";
      } else {
        vm.msg = "Email correct!!";
      }
    },
    reg_password_confirm(data) {
      let vm = this;

      if (data.length > 7) {
        if (data == vm.reg_password) {
          vm.msg = "password matched";
          $(".reg_password").css("border", "1px solid green");
        } else {
          vm.msg = "password not match";
          $(".reg_password").css("border", "1px solid red");
        }
      } else {
        vm.msg = "password must be bigger than 7 character";
      }
    },
    reg_password(data) {
      let vm = this;
      if (data.length > 7) {
        if (data == vm.reg_password_confirm) {
          vm.msg = "password matched";
          $(".reg_password").css("border", "1px solid green");
        } else {
          vm.msg = "password not match";
          $(".reg_password").css("border", "1px solid red");
        }
      } else {
        vm.msg = "password must be bigger than 7 character";
      }
    }
  },
  components: {},
  methods: {
    registercheck() {
      let vm = this;

      if (
        vm.reg_name === null ||
        vm.reg_email === null ||
        vm.reg_password === null ||
        vm.reg_password_confirm === null
      ) {
        alert("Please Complete the form");
      } else {
        let com = vm.reg_email.split("@");
        let gotcom = com[1].split(".")[1];
        if (
          !vm.reg_email.includes("@") ||
          !vm.reg_email.includes(".com") ||
          gotcom.length > 3
        ) {
          alert('Check your email "@xxxxx.com" before submit ');
        } else if (vm.reg_password !== vm.reg_password_confirm) {
          vm.reg_password = null;
          vm.reg_password_confirm = null;
          alert("Password not Match");
        } else if (vm.reg_password.length < 7) {
          vm.reg_password = null;
          vm.reg_password_confirm = null;
          alert("Password Must be Bigger Than 7 Character");
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
      let vm = this;
      let data = {
        email: vm.email,
        pwd: vm.password
      };
      if (data.email == null || data.pwd == null) {
        alert("Please Complete the form");
      } else if (!vm.email.includes("@") || !vm.email.includes(".com")) {
        alert('Check your email "@xxxxx.com" before submit ');
      } else {
        axios
          .post("checklogin", data)
          .then(res => {
            if (res.data.success == "notfound") {
              console.log(res.data);
              // alert('Email not found');
              // Use sweetalert2
              this.$swal({
                title: "Not Found!",
                text: "Please check your Email & Password!",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                type: "error"
              }).catch(swal.noop);
            } else if (res.data.success == "passwordnotmatch") {
              console.log(res.data);
              this.$swal({
                title: "Password wrong!",
                text: "Please check your Password again!",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                type: "warning"
              }).catch(swal.noop);
            } else {
              console.log(res.data);
              $(".btn-loginder").click();
              this.$swal({
                title: "Good job!",
                text: "You clicked the button!",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                type: "success"
              }).catch(swal.noop);
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
    "free_trial",
    "home",
"forum",
"washcode",
"mine",
  ]
};
</script>
<style scoped>
</style>
