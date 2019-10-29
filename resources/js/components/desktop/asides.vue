<template>
  <div>
    <div class="navbar-minimize-fixed">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">TNK</a>
          <a href="javascript:void(0)" class="simple-text logo-normal">Stock List</a>
        </div>
        <span v-if="checkuser == 'false'">
          <ul class="nav">
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/us_flag.png" alt />
                <p class="text-aside">{{us_stock}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/bitcoin.png" alt />
                <p class="text-aside">{{cryptocurrencies}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/china_flag.png" alt />
                <p class="text-aside">{{chines_stock}}</p>
              </a>
            </li>
            <li class="nav-aside">
              <a href="#">
                <img src="assets/img/Aragon-icon.png" alt />
                <p class="text-aside">{{lobby_tra}}</p>
              </a>
            </li>
          </ul>
        </span>
        <!-- 'client_id' => '9', //client replace with -> 9
                'client_secret' => '7gs34oR30I7BbC67W5srBT8ke9lwT5Bkv67QFFP9', //client replace with -> client secret -> 7gs34oR30I7BbC67W5srBT8ke9lwT5Bkv67QFFP9
                'name' => Auth::user()->name, //client replace with -> UserName
                'redirect_uri'=>\Request::root(), // your callback url ->http://yourapp/callback,
                'userId'=>Auth::user()->user_id, // UserID
        'webId'=>'0001'-->
        <span v-if="checkuser == 'true'">
          <ul class="nav">
            <!-- <li class="nav-aside" id="SH0000015">
              <popper trigger="hover" :options="myPopper">
                <div class="popper">
                  <livechart :key="0" stockname="SH000001" loop="5" country="china" :isMenu="true"></livechart>
                </div>
                <a
                  href="fullscreengame?stockname=SH000001&loop=5&country=china"
                  slot="reference"
                  target="_blank"
                >
                  <img src="assets/img/Aeternity-icon.png" alt />
                  <p class="text-aside" id="trigger">{{stock1}}</p>
                </a>
              </popper>
            </li>
            <li class="nav-aside" id="SZ3990015">
              <popper trigger="hover" :options="myPopper">
                <div class="popper">
                  <livechart :key="1" stockname="SZ3990015" loop="5" country="china" :isMenu="true"></livechart>
                </div><a
                  href="fullscreengame?stockname=SZ399001&loop=5&country=china"
                  slot="reference"
                  target="_blank"
                >
                  <img src="assets/img/Canada-eCoin-icon.png" alt />
                  <p class="text-aside" id="trigger2">{{stock2}}</p>
                </a>
              </popper>
            </li>
            <li class="nav-aside" id="SH003005">
              <popper trigger="hover" :options="myPopper">
                <div class="popper">
                  <livechart :key="2" stockname="SH00300" loop="5" country="china" :isMenu="true"></livechart>
                </div>
                <a
                  href="fullscreengame?stockname=SH00300&loop=5&country=china"
                  slot="reference"
                  target="_blank"
                > <img src="assets/img/china_flag.png" alt />
                  <p class="text-aside">{{stock3}}</p>
                </a>
              </popper>
            </li>
            <li class="nav-aside" id="SZ3994155">
              <popper trigger="hover" :options="myPopper">
                <div class="popper">
                  <livechart :key="3" stockname="SZ399415" loop="5" country="china" :isMenu="true"></livechart>
                </div>
                <a
                  href="fullscreengame?stockname=SZ399415&loop=5&country=china"
                  slot="reference"
                  target="_blank"
                ><img src="assets/img/china_flag.png" alt />
                  <p class="text-aside">{{stock4}}</p>
                </a>
              </popper>
            </li>-->
            <li class="nav-aside" id="USdollarIndex5">
              <popper trigger="hover" :options="myPopper">
                <div class="popper">
                  <livechart
                    :key="4"
                    stockname="USdollarIndex"
                    loop="5"
                    country="usa"
                    :isMenu="true"
                  ></livechart>
                </div>
                <a
                  href="fullscreengame?stockname=US dollar Index&loop=5&country=usa"
                  slot="reference"
                  target="_blank"
                >
                  <!-- <a href="/stocklist?stockname=USdollarIndex&loop=5&country=usa" slot="reference" target="_blank"> -->
                  <img src="assets/img/us_flag.png" alt />
                  <p class="text-aside">{{stock5}}</p>
                </a>
              </popper>
            </li>
            <li class="img-btc nav-aside">
              <a data-toggle="collapse" @mouseover="hover()" href="#pagesExamples">
                <img src="assets/img/bitcoin.png" alt />
                <p>
                  {{stock6}}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse" id="pagesExamples">
                <ul class="nav-aside active">
                  <li class="nav-aside" id="BTCUSDT1">
                    <popper trigger="hover" :options="myPopper">
                      <div class="popper">
                        <livechart
                          :key="5"
                          stockname="BTCUSDT"
                          loop="1"
                          country="cypto"
                          :isMenu="true"
                        ></livechart>
                      </div>
                      <a
                        href="fullscreengame?stockname=BTC/USDT&loop=1&country=cypto"
                        slot="reference"
                        target="_blank"
                      >
                        <!-- <a href="/stocklist?stockname=BTCUSDT&loop=1&country=cypto" slot="reference" target="_blank"> -->
                        <!-- <span class="sidebar-mini-icon">1</span> -->
                        <span class="sidebar-normal">1 Minutes</span>
                      </a>
                    </popper>
                  </li>
                  <li class="nav-aside" id="BTCUSDT5">
                    <popper trigger="hover" :options="myPopper">
                      <div class="popper">
                        <livechart
                          :key="6"
                          stockname="BTCUSDT"
                          loop="5"
                          country="cypto"
                          :isMenu="true"
                        ></livechart>
                      </div>
                      <a
                        href="fullscreengame?stockname=BTC/USDT&loop=5&country=cypto"
                        slot="reference"
                        target="_blank"
                      >
                        <!-- <a href="/stocklist?stockname=BTCUSDT&loop=5&country=cypto" slot="reference" target="_blank"> -->
                        <!-- <span class="sidebar-mini-icon">5</span> -->
                        <span class="sidebar-normal">5 Minutes</span>
                      </a>
                    </popper>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </span>
      </div>
    </div>
  </div>
</template>
<script>
import Popper from "vue-popperjs";
import "vue-popperjs/dist/vue-popper.css";
import Vue from "vue";
import Popover from "vue-js-popover";
Vue.use(Popover);

import livechart from "../chart-list/livechart";
import { all } from "q";

export default {
  components: {
    livechart,
    popper: Popper
  },
  data() {
    return {
      myPopper: {
        placement: "right",
        modifiers: { offset: { offset: "0,10px" } }
      },
      stocklist: null,
      gamemode: null,
      reqstock: null,
      reqloop: null,
      val: "",
      stocknameder: "",
      loopstock: "",
      countrystock: "",
      id: null,
      provider_name: null,
      balance: null,
      user_id: null,
      pro_id: null,
      name: null,
      firstname: null,
      email: null,
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
  },
  props: [
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6",
    "us_stock",
    "cryptocurrencies",
    "chines_stock",
    "lobby_tra",
    "stockname",
    "loop",
    "country"
  ],
  mounted() {
    let idactive = this.stockname + "" + this.loop;
    $("#" + idactive + "").addClass("nav-aside active");
    this.userdata();
  },
  methods: {
    hover() {
      // alert("TEST");
      $("a.collapsed").on("mouseover", function() {
        console.log("test");
        $(this).trigger("click");
      });
    },
    getstock(stocknameder, loppstock, countrystock) {
      let filename = window.location.href;
      // this.gamelink = `http://lec68.com/redirect?&name=${this.email}&urlback=http://${filename.split('/')[2]}`
      this.stocklist = `http://159.138.45.25/redirect?&name=${
        this.email
      }&urlback=http://${
        filename.split("/")[2]
      }&stockname=${stocknameder}&loop=${loppstock}&country=${countrystock}`;
      // alert(stocknameder + loppstock + countrystock);
      window.open(this.stocklist, "_blank");
    },
    userdata() {
      axios
        .get("/userdetaildata")
        .then(res => {
          console.log(res.data);
          this.id = res.data[0].id;
          this.user_id = res.data[0].user_id;
          this.provider_name = res.data[0].provider_name;
          this.balance = res.data[0].userBalance;
          this.pro_id = res.data[0].pro_id;
          this.name = res.data[0].name;
          this.email = res.data[0].email;
          this.firstname = res.data[0].id;
          let filename = window.location.href;
          // this.gamelink = `http://159/redirect?&name=${this.email}&urlback=http://${filename.split('/')[2]}`
          this.stocklist = `http://159.138.45.25/redirect?&name=${
            this.email
          }&urlback=http://${filename.split("/")[2]}&stockname=${
            this.stocknameder
          }&loop=${this.loopstock}&country=${this.countrystock}`;
        })
        .catch(er => {
          console.log(er.res);
        });
    }
  }
};
</script>
<style scoped>
.popper {
  width: 600px;
  background-color: #fafafa;
  color: #212121;
  text-align: center;
  padding: 2px;
  display: inline-block;
  border-radius: 3px;
  position: absolute;
  font-size: 14px;
  font-weight: normal;
  border: 1px #ebebeb solid;
  z-index: 200000;
  box-shadow: rgb(58, 58, 58) 0 0 6px 0;
}
div.pop-up {
  display: none;
  position: fixed;
  width: 280px;
  padding: 10px;
  background: #eeeeee;
  color: #000000;
  border: 1px solid #1a1a1a;
  font-size: 90%;
  text-align: center;
}
.sidebar .sidebar-wrapper,
.off-canvas-sidebar .sidebar-wrapper {
  overflow: unset !important;
}
.active {
  background-color: #ffffff;
  color: #000;
  box-shadow: none;
}
</style>
