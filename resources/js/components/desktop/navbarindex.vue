<template>
  <div class="container-wrap main-container u-wrap">
    <div class="d-none d-xl-block u-menu">
      <div class="umenu-wrap color-bg">
        <dl>
          <dt>
            <i class="tim-icons icon-notes"></i>My account
          </dt>
          <dd data-sidebar="u_account">
            <a href="#" id="myaccountlink" @click="setNavShowName('myaccount',$event)">My account</a>
          </dd>
          <dd data-sidebar="u_friend">
            <a href="#" @click="setNavShowName('recommedndedfriends',$event)">Recommended Friends</a>
          </dd>
          <dd data-sidebar="u_transaction">
            <a href="#" @click="setNavShowName('transactionrecord',$event)">Transaction Record</a>
          </dd>
        </dl>
        <dl>
          <dt>
            <i class="tim-icons icon-paper"></i>Financial Center
          </dt>
          <dd data-sidebar="u_pay">
            <a
              href="#"
              id="recharge"
              @click="setNavShowName('instantrecharge',$event)"
            >Instant recharge</a>
          </dd>
          <dd data-sidebar="u_withdraw">
            <a href="#" @click="setNavShowName('applyforwithdrawal',$event)">Apply for withdrawal</a>
          </dd>
          <dd data-sidebar="u_self_rebate">
            <a href="#" @click="setNavShowName('selfservicewashing',$event)">Self-service washing</a>
          </dd>
        </dl>
        <dl>
          <dt>
            <i class="tim-icons icon-wallet-43"></i>Customer information
          </dt>
          <dd data-sidebar="u_person_pwdIndex">
            <a href="#" @click="setNavShowName('changepassword',$event)">change Password</a>
          </dd>
          <dd data-sidebar="u_bank">
            <a href="#" @click="setNavShowName('bankinfo',$event)">Bank info</a>
          </dd>
          <dd data-sidebar="u_person_phoneIndex">
            <a href="#" @click="setNavShowName('modifyphone',$event)">Modify phone</a>
          </dd>
        </dl>
        <dl class="border-0">
          <dt class="active">
            <i class="tim-icons icon-bulb-63"></i>Customer Care
          </dt>
          <dd data-sidebar="u_sms_subscribeIndex">
            <a href="#" @click="setNavShowName('subscription',$event)">SMS subscription</a>
          </dd>
          <dd data-sidebar="u_station_letter" class="active">
            <a href="#" @click="setNavShowName('message',$event)">
              My message
              <!--<shiro:hasAnyRoles name="customer:type:1">-->
              <span class="badge badge-default">4</span>
              <!--</shiro:hasAnyRoles>-->
            </a>
          </dd>
        </dl>
      </div>
    </div>
    <!-- mobile Min hide 1199px -->
    <div class="d-none d-xl-block">
      <div class="bg-secondary pr-4">
        <div class="u-title">{{navShowName}}</div>
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
        <div class="u-content" v-if="navShowName ==='bankinfo'">
          <bankinfo></bankinfo>
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
import message from "./message.vue";
export default {
  data() {
    return {
      navShowName: "message"
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
  methods: {
    setNavShowName(value, e) {
      this.navShowName = value;
      $("dd").removeClass("active");
      $(e.target.parentElement).addClass("active");
      console.log(e);
    }
  }
};
</script>
<style scoped>
</style>
