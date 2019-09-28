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
import livechart from "./chart-list/livechart";

export default {
  components: {
    "app-navbar": navbar,
    "app-aside": aside,
    livechart
  },
  data() {
    return {
      isFirstTime: 0,
      lastGameID: "",
      timeGame: "",
      lastdraw: "",
      stockname: "",
      loop: "",
      country: ""
    };
  },
  mounted() {
    this.sleep(100).then(() => {
      this.getLastDraw();
    });
  },
  created() {
    let urlParams = new URLSearchParams(window.location.search);
    this.stockname = urlParams.get("stockname");
    this.loop = urlParams.get("loop");
    this.country = urlParams.get("country");
    // console.log(this.stockname +"=>"+this.loop +"=>"+this.country)
  },
  methods: {
    sleep(milliseconds) {
      return new Promise(resolve => setTimeout(resolve, milliseconds));
    },
    getLastDraw() {
      // console.log("final......................" + this.stockname);
      // this.$store.state.getstockid = this.stockname;
      // this.firsttime = this.firsttime + 1;

      // let name = this.stockname.replace("/", "");
      // if (name === "BTCUSDT" && this.loop === "1") {
      //   name += this.loop;
      // }
      axios
        .get(`http://159.138.54.214/api/datahistory/BTCUSDT`)
        .then(responses => {
          //do not add new data to table trent chart when first run
          this.isFirstTime = this.isFirstTime + 1;
          // alert(responses.data);
          // let nFloat = responses.data.data[responses.data.data.length - 1].PT
          // let nInt = parseInt(responses.data.data[responses.data.data.length - 1].PT)

          // alert(`${nFloat} - ${nInt}= ${nFloat - nInt}`)
          let result = responses.data[responses.data.length - 1].PT;
          this.lastGameID = responses.data[responses.data.length - 1].gameid;
          this.timeGame = responses.data[responses.data.length - 1].created_at;

          if (this.stockname === "US dollar Index") {
            this.lastdraw = parseFloat(result)
              .toFixed(4)
              .toString();
          } else {
            this.lastdraw = parseFloat(result)
              .toFixed(2)
              .toString();
          }
          console.log(this.lastdraw);
          console.log(this.lastGameID);
          console.log(this.timeGame);
        });
      // this.getOutCome();
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
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6",
    "us_stock",
    "cryptocurrencies",
    "chines_stock",
    "lobby"
  ]
};
</script>
<style scoped>
</style>

