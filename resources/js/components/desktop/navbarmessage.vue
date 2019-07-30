<template>
  <div>
    <div class="row px-3">
      <div class="col-md-3 pr-0 bg-navbar border-msg">
        <ul>
          <li class="nav-title">
            <i class="tim-icons icon-notes"></i>
            {{ myaccount_tra }}
          </li>
        </ul>
        <ul class="list-group-navbar">
          <li class="list-navbar">
            <a
              href="#"
              id="myaccountlink"
              :data-names="myaccount_tra"
              :data-name="myaccount_tra"
              @click.prevent="setNavShowName('myaccount',$event)"
            >{{ myaccount_tra }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              :data-names="myaccount_tra"
              :data-name="recommend_friends"
              @click.prevent="setNavShowName('recommedndedfriends',$event)"
            >{{ recommend_friends }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              :data-names="myaccount_tra"
              :data-name="transaction_record"
              @click.prevent="setNavShowName('transactionrecord',$event)"
            >{{ transaction_record }}</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 px-0 bg-navbar border-msg">
        <ul class="p-0">
          <li class="nav-title">
            <i class="tim-icons icon-paper"></i>
            {{ financial_center }}
          </li>
        </ul>
        <ul class="list-group-navbar">
          <li class="list-navbar">
            <a
              href="#"
              id="recharge"
              :data-names="financial_center"
              :data-name="instant_recharge"
              @click.prevent="setNavShowName('instantrecharge',$event)"
            >{{ instant_recharge }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              id="withDrawClick"
              :data-names="financial_center"
              :data-name="apply_for_withdrawal"
              @click.prevent="setNavShowName('applyforwithdrawal',$event)"
            >{{ apply_for_withdrawal }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              :data-names="financial_center"
              :data-name="self_service_rolling"
              @click.prevent="setNavShowName('selfservicewashing',$event)"
            >{{ self_service_rolling }}</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 px-0 bg-navbar border-msg">
        <ul class="p-0">
          <li class="nav-title">
            <i class="tim-icons icon-wallet-43"></i>
            {{ customer_information }}
          </li>
        </ul>
        <ul class="list-group-navbar">
          <li class="list-navbar">
            <a
              href="#"
              :data-names="customer_information"
              :data-name="change_password"
              @click.prevent="setNavShowName('changepassword',$event)"
            >{{ change_password }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              id="bankinfoclick"
              :data-names="customer_information"
              :data-name="bank_info"
              @click.prevent="setNavShowName('bankinfo',$event)"
            >{{ bank_info }}</a>
          </li>
          <li class="list-navbar">
            <a
              href="#"
              :data-names="customer_information"
              :data-name="modify_phone"
              @click.prevent="setNavShowName('modifyphone',$event)"
            >{{ modify_phone }}</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 pl-0 bg-navbar">
        <ul class="p-0">
          <li class="nav-title">
            <i class="tim-icons icon-bulb-63"></i>
            {{ customer_care }}
          </li>
        </ul>
        <ul class="list-group-navbar">
          <li class="list-navbar">
            <a
              href="#"
              :data-names="customer_care"
              :data-name="msmsubscription"
              @click.prevent="setNavShowName('subscription',$event)"
            >{{ msmsubscription }}</a>
          </li>
          <li class="list-navbar active">
            <a
              href="#"
              :data-names="customer_care"
              :data-name="my_message"
              @click.prevent="setNavShowName('message',$event)"
            >
              {{ my_message }}
              <!--<shiro:hasAnyRoles name="customer:type:1">-->
              <em
                class="badge letter"
                :data-names="customer_care"
                :data-name="my_message"
                @click.prevent="setNavShowName('message',$event)"
              >
                <span class="badge badge-default">4</span>
              </em>
              <!--</shiro:hasAnyRoles>-->
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="u-wrap">
      <div class="bg-secondary py-1">
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>-->
            <!-- <li class="breadcrumb-item" v-if="page!= null ">
              <a href="#">{{page}}</a>
            </li>-->
            <li class="breadcrumb-item">
              <a href="#">{{navNames}}</a>
            </li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page">{{navName}}</li>
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
          <selfservicewashing
            :availablerolling="availablerolling"
            :totalbets="totalbets"
            :totalrolling="totalrolling"
          ></selfservicewashing>
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
      navNames: "",
      navName: "",
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
    let urlParams = new URLSearchParams(window.location.search);
    this.page = urlParams.get("page");

    this.navNames = this.customer_care;
    this.navName = this.my_message;

    this.getct();
  },
  methods: {
    setNavShowName(value, e) {
      this.navNames = e.target.dataset.names;
      this.navName = e.target.dataset.name;
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
    "customer_care",
    "availablerolling",
    "totalbets",
    "totalrolling"
  ]
};
</script>
<style scoped>
.border-msg {
  border-right: 2px solid #362d2d;
}
</style>
