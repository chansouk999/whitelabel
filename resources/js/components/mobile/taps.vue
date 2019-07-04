<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-xl-10 col-sm-12 px-3 color-bg p-2 flex-top">
          <a href="/myaccount">
            <i class="tim-icons icon-minimal-left float-left m-2"></i>
          </a>
            <p v-if="page =='bankinfo'">{{bankinfo}}</p>
            <p v-else-if=" page =='transactionrecord'">{{transactionrecord}}</p>
            <p v-else-if="page =='recommendfriends'">{{recommendfriends}}</p>
            <p v-else-if="page =='accountsettings'">{{accountsettings}}</p>
            <p v-else-if="page =='fastrecharge'">{{fastrecharge}}</p>
            <p v-else-if="page =='applyforwithdrawal'">{{applyforwithdrawal}}</p>
            <p v-else-if="page =='selfservicerolling'">{{selfservicerolling}}</p>

        </div>
        <div class="col-xl-10 col-sm-12 px-2 pt-5 pb-5">
          <div class="u-content" v-if="page =='bankinfo'">
            <bankinfo />
          </div>
          <div class="u-content" v-else-if=" page =='transactionrecord'">
            <transactionrecord />
          </div>
          <div class="u-content" v-else-if="page =='recommendfriends'">
            <recommedndedfriends />
          </div>
          <div class="u-content" v-else-if="page =='accountsettings'"></div>

          <div class="u-content" v-else-if="page =='fastrecharge'">
            <!-- <recommedndedfriends /> -->
            <h1>Error 404 </h1>
            <h1>This site can’t be reached</h1>

          </div>
          <div class="u-content" v-else-if="page =='applyforwithdrawal'">
            <applyforwithdrawal />
          </div>
          <div class="u-content" v-else-if="page =='selfservicerolling'">
          <selfservicewashing/>
          </div>
        </div>
      </div>
    </div>
    <footers :home="home" :forum="forum" :washcode="washcode" :recharge="recharge" :mine="mine" />
  </div>
</template>
<script>

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
    applyforwithdrawal
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
    "mine"
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
