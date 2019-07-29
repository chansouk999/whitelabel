<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-xl-10 col-sm-12 pt-2 color-bg fixed-top">
          <a href="/myaccount">
            <i class="tim-icons icon-minimal-left text-dark float-left m-2"></i>
          </a>
          <p class="text-capitalize" v-if="page =='bankinfo'">{{bankinfo}}</p>
          <p class="text-capitalize" v-else-if=" page =='transactionrecord'">{{transactionrecord}}</p>
          <p class="text-capitalize" v-else-if="page =='recommendfriends'">{{recommendfriends}}</p>
          <!-- <p class="text-capitalize" v-else-if="page =='accountsettings'">{{accountsettings}}</p> -->
          <p class="text-capitalize" v-else-if="page =='fastrecharge'">{{fastrecharge}}</p>
          <p class="text-capitalize" v-else-if="page =='applyforwithdrawal'">{{applyforwithdrawal}}</p>
          <p class="text-capitalize" v-else-if="page =='selfservicerolling'">{{selfservicerolling}}</p>
          <p class="text-capitalize" v-else-if="page =='changepassword'">{{changepassword}}</p>
          <p class="text-capitalize" v-else-if="page =='modifyphone'">{{modifyphone}}</p>
          <p class="text-capitalize" v-else-if="page =='smssubscription'">{{smssubscription}}</p>
          <p class="text-capitalize" v-else-if="page =='loginsettings'">{{loginsettings}}</p>
        </div>
        <div class="col-xl-10 col-sm-12">
          <div class="u-content" v-if="page =='bankinfo'">
            <bankinfo />
          </div>
          <div class="u-content" v-else-if=" page =='transactionrecord'">
            <transactionrecord />
          </div>
          <div class="u-content" v-else-if="page =='recommendfriends'">
            <recommedndedfriends />
          </div>
          <!-- <div class="u-content" v-else-if="page =='accountsettings'"></div> -->

          <div class="u-content" v-else-if="page =='fastrecharge'">
            <!-- <recommedndedfriends /> -->
            <h1>Error 404</h1>
            <h1>This site can’t be reached</h1>
          </div>
          <div class="u-content" v-else-if="page =='applyforwithdrawal'">
            <applyforwithdrawal />
          </div>
          <div class="u-content" v-else-if="page =='selfservicerolling'">
            <selfservicewashing
              :availablerolling="availablerolling"
              :totalbets="totalbets"
              :totalrolling="totalrolling"
            />
          </div>
          <div class="u-content" v-else-if="page =='changepassword'">
            <changepassword />
          </div>
          <div class="u-content" v-else-if="page =='smssubscription'">
            <subscription />
          </div>
          <div class="u-content" v-else-if="page =='modifyphone'">
            <modifyphone />
          </div>
          <div class="u-content" v-else-if="page =='loginsettings'">
            <!-- <modifyphone /> -->
            <h1>Error 404</h1>
            <h1>This site can’t be reached</h1>
          </div>
        </div>
      </div>
    </div>
    <footers :home="home" :forum="forum" :washcode="washcode" :recharge="recharge" :mine="mine" />
  </div>
</template>
<script>
import changepassword from "./changepassword";
import subscription from "./subscription";
import modifyphone from "./modifyphone";
import applyforwithdrawal from "./applyforwithdrawal";
import selfservicewashing from "./selfservicewashing";
import recommedndedfriends from "./recommedndedfriends";
import transactionrecord from "./transactionrecord";
import bankinfo from "./bankinfo";
import Flickity from "vue-flickity";
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
import chartjs from "../desktop/chartjs";
export default {
  components: {
    navbars,
    asides,
    footers,
    chartjs,
    Flickity,
    bankinfo,
    transactionrecord,
    recommedndedfriends,
    selfservicewashing,
    applyforwithdrawal,
    changepassword,
    subscription,
    modifyphone
  },
  data() {
    return {
      page: ""
    };
  },
  computed: {},
  mounted() {
    let urlParams = new URLSearchParams(window.location.search);
    this.page = urlParams.get("page");
  },
  methods: {},
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
    "lobby",
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
    "nonactivated",
    "availablerolling",
    "totalbets",
    "totalrolling"
  ]
};
</script>
<style scoped>
.float-left {
  float: left;
}
.flex-top {
  position: fixed;
  z-index: 100;
}
</style>
