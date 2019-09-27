<template>
    <div>
    
        <div class="d-block d-xl-none">
    
            <!-- user Login -->
    
            <span v-if="checkuser == 'true'">
    
            <nav class="mobile-bottom-nav">
    
              <div class="mobile-bottom-nav__item">
    
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
    
                  <a href="/messagemb">
    
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
    
    
    
              <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
    
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
                if (!vm.reg_email.includes("@") ||
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
        "mine"
    ]
};
</script>
<style scoped>

</style>
