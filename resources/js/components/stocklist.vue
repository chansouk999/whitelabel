<template>
  <div>
    <app-navbar
      :recommend_friends="recommend_friends"
      :message="message"
      :myaccount_tra="myaccount_tra"
      :myprivilege="myprivilege"
      :gamelobby="gamelobby"
      :recharge="recharge"
      :withdraw="withdraw"
      :currentlang="currentlang"

    ></app-navbar>
    <div class="container">
      <div class="row">
        <div class="col-2">
          <app-aside
            :stock1="stock1"
            :stock2="stock2"
            :stock3="stock3"
            :stock4="stock4"
            :stock5="stock5"
            :stock6="stock6"
            :us_stock="us_stock"
            :cryptocurrencies="cryptocurrencies"
            :chines_stock="chines_stock"
            :lobby="lobby"
            :stockname="stockname"
            :loop="loop"
            :country="country"
          ></app-aside>
        </div>

        <div class="col-xl-10 col-sm-12">
              <div class="content">
            <h1>Stockname: {{stockname}} => Loop: {{loop}} => Country: {{country}}</h1>
            <livechart :stockname="stockname" :loop="loop" :country="country"/>
          </div>
          </div>
        </div>
        <!-- Sidebar -->

        <div class="row">
          <!-- <app-footer></app-footer> -->
          <!-- <app-alertsidebar></app-alertsidebar> -->
        </div>
        <!-- /.row -->
      </div>
    </div>
</template>
<script>
import navbar from "./desktop/navbar";
import aside from "./desktop/asides";
// import alertsidebar from "./alertsidebar";
// import footers from "./desktop/footers";
import livechart from "./chart-list/livechart";

export default {
  components: {
    "app-navbar": navbar,
    "app-aside": aside,
    // "app-footer": footers,
    // "app-alertsidebar": alertsidebar,
    livechart

  },
  data() {
    return {
        stockname:"",
        loop:"",
        country:"",

    };
  },
  created() {
    let urlParams = new URLSearchParams(window.location.search);
    this.stockname = urlParams.get("stockname");
    this.loop = urlParams.get("loop");
    this.country = urlParams.get("country");
    // console.log(this.stockname +"=>"+this.loop +"=>"+this.country)
  },
  methods: {

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
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6",
    "us_stock",
    "cryptocurrencies",
    "chines_stock",
    "lobby",
  ]
};
</script>
<style scoped>
</style>

