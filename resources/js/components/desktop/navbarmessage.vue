<template>
  <div>
    <div class="row px-3">
      <div class="col-md-3 pr-0 bg-navbar">
        <ul>
          <lh class="nav-title">
            <i class="tim-icons icon-notes"></i>
            {{ myaccount_tra }}
          </lh>
        </ul>
        <ul class="list-group-navbar">
          <li class="list-navbar">
            <a
              href="#"
              id="myaccountlink"
              @click.prevent="setNavShowName('myaccount',$event)"
            >{{ myaccount_tra }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              @click.prevent="setNavShowName('recommedndedfriends',$event)"
            >{{ recommend_friends }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              @click.prevent="setNavShowName('transactionrecord',$event)"
            >{{ transaction_record }}</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 px-0 bg-navbar">
        <ul class="p-0">
          <lh class="nav-title">
            <i class="tim-icons icon-paper"></i>
            {{ financial_center }}
          </lh>
        </ul>
        <ul class="list-group-navbar">
          <li class="list-navbar">
            <a
              href="#"
              id="recharge"
              @click.prevent="setNavShowName('instantrecharge',$event)"
            >{{ instant_recharge }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              id="withDrawClick"
              @click.prevent="setNavShowName('applyforwithdrawal',$event)"
            >{{ apply_for_withdrawal }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              @click.prevent="setNavShowName('selfservicewashing',$event)"
            >{{ self_service_rolling }}</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 px-0 bg-navbar">
        <ul class="p-0">
          <lh class="nav-title">
            <i class="tim-icons icon-wallet-43"></i>
            {{ customer_information }}
          </lh>
        </ul>
        <ul class="list-group-navbar">
          <li class="list-navbar">
            <a
              href="#"
              @click.prevent="setNavShowName('changepassword',$event)"
            >{{ change_password }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              id="bankinfoclick"
              @click.prevent="setNavShowName('bankinfo',$event)"
            >{{ bank_info }}</a>
          </li>
          <li class="list-navbar">
            <a href="#" @click.prevent="setNavShowName('modifyphone',$event)">{{ modify_phone }}</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 pl-0 bg-navbar">
        <ul class="p-0">
          <lh class="nav-title">
            <i class="tim-icons icon-bulb-63"></i>
            {{ customer_care }}
          </lh>
        </ul>
        <ul class="list-group-navbar">
          <li class="list-navbar">
            <a href="#" @click.prevent="setNavShowName('subscription',$event)">{{ msmsubscription }}</a>
          </li>
          <li class="list-navbar active">
            <a href="#" @click.prevent="setNavShowName('message',$event)">
              {{ my_message }}
              <!--<shiro:hasAnyRoles name="customer:type:1">-->
              <em class="badge letter" style>2</em>
              <!--</shiro:hasAnyRoles>-->
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="u-wrap">
      <div class="bg-secondary pr-3 py-1">
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">
                <i class="tim-icons icon-chat-33 icon-default"></i>Message
              </a>
            </li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page">{{navShowName}}</li>
          </ol>
        </nav>
        <div class="u-content" v-if="navShowName ==='myaccount'">
          <myaccount></myaccount>
        </div>
        <div class="u-content" v-if="navShowName ==='recommedndedfriends'">
          <recommedndedfriends></recommedndedfriends>
        </div>
        <div class="u-content" v-if="navShowName ==='transactionrecord'">
          <transactionrecord></transactionrecord>
        </div>
        <div class="u-content" v-if="navShowName ==='instantrecharge'">
          <instantrecharge></instantrecharge>
        </div>
        <div class="u-content" v-if="navShowName ==='applyforwithdrawal'">
          <applyforwithdrawal></applyforwithdrawal>
        </div>
        <div class="u-content" v-if="navShowName ==='selfservicewashing'">
          <selfservicewashing></selfservicewashing>
        </div>

        <div class="u-content" v-if="navShowName ==='changepassword'">
          <changepassword></changepassword>
        </div>
        <div class="u-content" v-if="navShowName ==='bankinfo'">
          <bankinfo></bankinfo>
        </div>
        <div class="u-content" v-if="navShowName ==='modifyphone'">
          <modifyphone></modifyphone>
        </div>
        <div class="u-content" v-if="navShowName ==='subscription'">
          <subscription></subscription>
        </div>
        <div class="u-content" v-if="navShowName ==='message'">
          <message></message>
        </div>
      </div>
    </div>
  </div>
  <!-- Sidebar -->
</template>
<script>
import myaccount from "./myaccount.vue";
import recommedndedfriends from "./recommedndedfriends.vue";
import transactionrecord from "./transactionrecord.vue";
import instantrecharge from "./instantrecharge.vue";
import applyforwithdrawal from "./applyforwithdrawal.vue";
import selfservicewashing from "./selfservicewashing.vue";
import changepassword from "./changepassword.vue";
import bankinfo from "./bankinfo.vue";
import modifyphone from "./modifyphone.vue";
import subscription from "./subscription.vue";
import message from "./mymessage.vue";
export default {
  data() {
    return {
      navShowName: "message",
      country: []
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
  mounted() {
    this.getct();
  },
  methods: {
    setNavShowName(value, e) {
      this.navShowName = value;
      $("ul li").removeClass("active");
      $(e.target.parentElement).addClass("active");
    },
    getct() {
      axios
        .get("https://restcountries-v1.p.rapidapi.com/all", {
          headers: {
            "X-RapidAPI-Host": "restcountries-v1.p.rapidapi.com",
            "X-RapidAPI-Key":
              "a824d001c9msh6de5d0e55c5cafep1c4601jsn9b81f345f6e5"
          }
        })
        .then(res => {
          this.country = res.data;
          console.log(res.data);
        });
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
    "transaction_record",
    "instant_recharge",
    "financial_center",
    "apply_for_withdrawal",
    "self_service_rolling",
    "customer_information",
    "bank_info",
    "modify_phone",
    "msmsubscription",
    "my_message",
    "change_password",
    "customer_care"
  ]
};
</script>
<style scoped>
</style>
