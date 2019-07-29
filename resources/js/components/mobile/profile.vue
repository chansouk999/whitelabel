<template>
  <div>
    <navbars :home="home" :forum="forum" :washcode="washcode" :recharge="recharge" :mine="mine"></navbars>
    <div class="container">
      <div class="row">
        <div class="col-2">
          <asides
            :stock1="stock1"
            :stock2="stock2"
            :stock3="stock3"
            :stock4="stock4"
            :stock5="stock5"
            :stock6="stock6"
          ></asides>
        </div>
        <div class="col-xl-10 col-sm-12 px-1">
          <div class="main-panel">
            <!-- <navbars></navbars> -->
            <!-- End Navbar -->
            <div class="content">
              <div class="row">
                <div class="col-md-4 bg-light px-1 m-0">
                  <div class="card card-user my-1">
                    <div class="card-body">
                      <p class="card-text"></p>
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="javascript:void(0)">
                          <img class="avatar" src="assets/img/emilyz.jpg" alt="..." />
                          <h5 class="title">{{user_id}}</h5>
                        </a>
                        <p class="description">{{name}}</p>
                      </div>

                      <div class="card-description p-0 m-0">
                        <div class="card color-bg py-0 my-0">
                          <div class="card-body h-0">
                            <h4 class="card-title">{{totalbalance}}({{yuan}})</h4>
                            <span class="bala-num">
                              <span id="tBalance">{{formatToPrice(balance)}}</span>
                            </span>
                            <div class="card-footer">
                              <a href="#" class="card-link">
                                {{gamebalance}}
                                <br />
                                <!-- <span class="bala-num-below"> -->
                                <span id="gBalance">{{formatToPrice(0)}}</span>
                                <!-- </span> -->
                              </a>
                              <a href="#" class="card-link">
                                {{localbalance}}
                                <br />
                                <!-- <span class="bala-num-below"> -->
                                <span id="lBalance">{{formatToPrice(0)}}</span>
                                <!-- </span> -->
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 px-1">
                      <div class="card card-stats">
                        <div class="card-footer">
                          <div class="row">
                            <div class="w-33">
                              <a href="/profile?page=fastrecharge">
                                <div class="info-icon text-center icon-warning shadow-warning">
                                  <i class="tim-icons icon-credit-card"></i>
                                  <p>{{fastrecharge}}</p>
                                </div>
                              </a>
                            </div>
                            <div class="w-33">
                              <a href="/profile?page=applyforwithdrawal">
                                <div class="info-icon text-center icon-danger shadow-danger">
                                  <i class="tim-icons icon-coins icon-default"></i>
                                  <p>{{applyforwithdrawal}}</p>
                                </div>
                              </a>
                            </div>
                            <div class="w-33">
                              <a href="/profile?page=selfservicerolling">
                                <div class="info-icon text-center icon-success shadow-success">
                                  <i class="tim-icons icon-single-02"></i>
                                  <p>{{selfservicerolling}}</p>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 mb-5 bg-light px-1">
                  <!-- <div class="card py-0 my-2">
                    <div class="card-header mb-2">
                      <h5 class="title">{{myaccount_tra}}</h5>
                      <i class="tim-icons icon-align-left-2"></i>
                    </div>
                    <div class="card-body px-4 py-0">
                      <div class="row d-flex justify-content-between py-3">
                        <div class="d-flex">
                          <i class="tim-icons icon-notes"></i>

                          <span class="game_rBox">
                            <p>{{phoneverification}}</p>
                          </span>
                        </div>
                        <p class="mycolor-icon">
                          {{unverified}}
                          <i class="tim-icons icon-minimal-right"></i>
                        </p>
                      </div>
                    </div>
                  </div>-->
                  <div class="card py-0 my-2">
                    <div class="card-body px-4 py-0">
                      <!-- <div class="row d-flex justify-content-between py-3">
                        <div class="d-flex">
                          <i class="tim-icons icon-badge"></i>
                          <span class="game_rBox">
                            <p>
                              {{mytask}}
                              <span class="badge badge-warning">8</span>
                            </p>
                          </span>
                        </div>
                        <p class="mycolor-icon">
                          <i class="tim-icons icon-minimal-right"></i>
                        </p>
                      </div>-->
                      <hr class="hr-mobile" />
                      <a href="/profile?page=recommendfriends">
                        <div class="row d-flex justify-content-between py-3">
                          <div class="d-flex">
                            <i class="tim-icons icon-single-02"></i>
                            <span class="game_rBox">
                              <p>{{recommendfriends}}</p>
                            </span>
                          </div>
                          <p class="mycolor-icon">
                            <i class="tim-icons icon-minimal-right"></i>
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="card py-0 my-2">
                    <div class="card-body px-4 py-0">
                      <a href="/profile?page=bankinfo">
                        <div class="row d-flex justify-content-between py-3">
                          <div class="d-flex">
                            <i class="tim-icons icon-credit-card"></i>
                            <span class="game_rBox">
                              <p>{{bankinfo}}</p>
                            </span>
                          </div>
                          <p class="mycolor-icon">
                            <i class="tim-icons icon-minimal-right"></i>
                          </p>
                        </div>
                      </a>
                      <hr class="hr-mobile" />
                      <a href="/profile?page=transactionrecord">
                        <div class="row d-flex justify-content-between py-3">
                          <div class="d-flex">
                            <i class="tim-icons icon-coins"></i>
                            <span class="game_rBox">
                              <p>{{transactionrecord}}</p>
                            </span>
                          </div>
                          <p class="mycolor-icon">
                            <i class="tim-icons icon-minimal-right"></i>
                          </p>
                        </div>
                      </a>
                      <hr class="hr-mobile" />
                      <div
                        id="accordion"
                        role="tablist"
                        aria-multiselectable="true"
                        class="card-collapse"
                      >
                        <div class="card card-plain">
                          <div role="tab" id="headingOne">
                            <a
                              data-toggle="collapse"
                              data-parent="#accordion"
                              href="#collapseOne"
                              aria-expanded="false"
                              aria-controls="collapseOne"
                            >
                              <div class="row d-flex justify-content-between py-3">
                                <div class="d-flex">
                                  <i class="tim-icons icon-settings-gear-63"></i>
                                  <span class="game_rBox">
                                    <p>{{accountsettings}}</p>
                                  </span>
                                </div>
                                <p class="mycolor-icon">
                                  <i class="tim-icons icon-minimal-down"></i>
                                </p>
                              </div>
                            </a>
                          </div>

                          <div
                            id="collapseOne"
                            class="collapse"
                            role="tabpanel"
                            aria-labelledby="headingOne"
                          >
                            <div class="card-body px-0">
                              <hr class="hr-mobile" />
                              <a href="/profile?page=changepassword">
                                <div class="row d-flex justify-content-between py-2">
                                  <div class="d-flex">
                                    <span class="game_rBox">
                                      <p>{{changepassword}}</p>
                                    </span>
                                  </div>
                                  <p class="mycolor-icon">
                                    <i class="tim-icons icon-minimal-right"></i>
                                  </p>
                                </div>
                              </a>
                              <hr class="hr-mobile" />
                              <a href="/profile?page=modifyphone">
                                <div class="row d-flex justify-content-between py-2">
                                  <div class="d-flex">
                                    <span class="game_rBox">
                                      <p>{{modifyphone}}</p>
                                    </span>
                                  </div>
                                  <p class="mycolor-icon">
                                    <span class="text-smaller">186*******2</span>
                                    <i class="tim-icons icon-minimal-right"></i>
                                  </p>
                                </div>
                              </a>
                              <hr class="hr-mobile" />
                              <a href="/profile?page=smssubscription">
                                <div class="row d-flex justify-content-between py-2">
                                  <div class="d-flex">
                                    <span class="game_rBox">
                                      <p>{{smssubscription}}</p>
                                    </span>
                                  </div>
                                  <p class="mycolor-icon">
                                    <span class="text-smaller">{{nonactivated}}</span>
                                    <i class="tim-icons icon-minimal-right"></i>
                                  </p>
                                </div>
                              </a>
                              <hr class="hr-mobile" />
                              <a href="/profile?page=loginsettings">
                                <div class="row d-flex justify-content-between py-2 ok">
                                  <div class="d-flex">
                                    <span class="game_rBox">
                                      <p>{{loginsettings}}</p>
                                    </span>
                                  </div>
                                  <p class="mycolor-icon">
                                    <span class="text-smaller">{{nonactivated}}</span>
                                    <i class="tim-icons icon-minimal-right"></i>
                                  </p>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <setting />
  </div>
</template>
<script>
import setting from "./settig_mobile";
import Flickity from "vue-flickity";
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
import chartjs from "../desktop/chartjs";
export default {
  components: {
    setting,
    navbars,
    asides,
    footers,
    chartjs,
    Flickity
  },
  data() {
    return {
      flickityOptions: {
        initialIndex: 3,
        prevNextButtons: false,
        pageDots: false,
        wrapAround: true

        // any options from Flickity can be used
      },
      user_id: "",
      name: "",
      id: "",
      balance: "",
      ismenu: false,
      messages: "./index",
      promote: "./promote",
      welcome: "/",
      //   lobby: "./lobby",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
    };
  },
  computed: {
    swiper() {
      return this.$refs.mySwiper.swiper;
    }
  },
  mounted() {
    this.userdata();
  },
  methods: {
    formatToPrice(value) {
      return `$ ${Number(value)
        .toFixed(2)
        .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")}`;
    },
    userdata() {
      axios
        .get("/userdetaildata")
        .then(res => {
          //   console.log(res.data[0]);
          this.id = res.data[0].id;
          this.user_id = res.data[0].user_id;
          this.provider_name = res.data[0].provider_name;
          this.balance = res.data[0].userBalance;
          this.pro_id = res.data[0].pro_id;
          this.name = res.data[0].name;
          this.email = res.data[0].email;
          this.login_at = res.data[0].created_at;
          $(".id").val(this.id);
          $(".provider_name").val(this.provider_name);
          $(".balance").val(this.balance);
          $(".pro_id").val(this.pro_id);
          $(".name").val(this.name);
          $(".email").val(this.email);
        })
        .catch(er => {
          console.log(er.res);
        });
    },
    next() {
      this.$refs.flickity.next();
    },

    previous() {
      this.$refs.flickity.previous();
    },
    myaccount() {
      $("#myaccountlink")[0].click();
    },
    withDrawClick() {
      $("#withdraw")[0].click();
    },
    rechargeClick() {
      $("#recharge")[0].click();
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
    "us_stock",
    "cryptocurrencies",
    "chines_stock",
    // "lobby",
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6",
    "phoneverification",
    "mytask",
    "recommendfriends",
    "bankinfo",
    "transactionrecord",
    "accountsettings",
    "unverified",
    "totalbalance",
    "yuan",
    "gamebalance",
    "localbalance",
    "fastrecharge",
    "applyforwithdrawal",
    "selfservicerolling",
    "home",
    "forum",
    "washcode",
    "mine",
    "changepassword",
    "modifyphone",
    "smssubscription",
    "loginsettings",
    "nonactivated"
  ]
};

$(function() {
  $(".scroll-down").click(function() {
    $("html, body").animate(
      { scrollTop: $("section.ok").offset().top },
      "slow"
    );
    return false;
  });
});
</script>
<style scoped>
.text-smaller {
  color: darkgray;
  font-size: smaller;
}
</style>