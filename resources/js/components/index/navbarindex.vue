<template>
  <div class="container-wrap main-container u-wrap">
    <div class="u-menu">
      <div class="umenu-wrap">
        <dl>
          <dt>
            <i class="icon-user"></i>My account
          </dt>
          <dd data-sidebar="u_account">
            <a href="#" id="myaccountlink" @click="setNavShowName('myaccount',$event)"
            >My account</a>
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
            <i class="icon-yuan"></i>Financial Center
          </dt>
          <dd data-sidebar="u_pay">
          <a href="#" @click="setNavShowName('instantrecharge',$event)">Instant recharge</a>
          </dd>
          <dd data-sidebar="u_withdraw">
           <a href="#" @click="setNavShowName('applyforwithdrawal',$event)">Apply for withdrawal</a>
          </dd>
          <dd data-sidebar="u_self_rebate">
             <a href="#" @click="setNavShowName('selfservicewashing',$event)">Self-service washing</a>
          </dd>
        </dl>
        <dl id="u-menu-mission">
          <dt>
            <i class="icon-task"></i>About
          </dt>
          <dd class="newcomer-dd" data-sidebar="u_mission_newcomer">
             <a href="#" @click="setNavShowName('novicetask',$event)">Novice task</a>
          </dd>
          <dd class="daily-dd" data-sidebar="u_mission_daily">
            <a href="#" @click="setNavShowName('dailytask',$event)">Daily task</a>
          </dd>
          <dd class="achieve-dd" data-sidebar="u_mission_achieve">
           <a href="#" @click="setNavShowName('achievementtask',$event)">Achievement task</a>
          </dd>
        </dl>
        <dl>
          <dt>
            <i class="icon-records"></i>Customer information
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
            <i class="icon-msg"></i>Customer Care
          </dt>
          <dd data-sidebar="u_sms_subscribeIndex">
           <a href="#" @click="setNavShowName('subscription',$event)">SMS subscription</a>
          </dd>
          <dd data-sidebar="u_station_letter" class="active">
            <a href="#" @click="setNavShowName('message',$event)">
              My message
              <!--<shiro:hasAnyRoles name="customer:type:1">-->
              <em class="badge letter" style>2</em>
              <!--</shiro:hasAnyRoles>-->
            </a>
          </dd>
        </dl>
      </div>
    </div>
    <div class="u-main">
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
      <div class="u-content" v-if="navShowName ==='novicetask'">
        <novicetask></novicetask>
      </div>
        <div class="u-content" v-if="navShowName ==='dailytask'">
        <dailytask></dailytask>
      </div>
        <div class="u-content" v-if="navShowName ==='achievementtask'">
        <achievementtask></achievementtask>
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
  <!-- Sidebar -->
</template>
<script>
import myaccount from "./myaccount.vue";
import recommedndedfriends from "./recommedndedfriends.vue";
import transactionrecord from "./transactionrecord.vue";
import instantrecharge from "./instantrecharge.vue";
import applyforwithdrawal from "./applyforwithdrawal.vue";
import selfservicewashing from "./selfservicewashing.vue";
import novicetask from "./novicetask.vue";
import dailytask from "./dailytask.vue";
import achievementtask from "./achievementtask.vue";
import changepassword from "./changepassword.vue";
import bankinfo from "./bankinfo.vue";
import modifyphone from './modifyphone.vue';
import subscription from './subscription.vue';
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
    novicetask,
    dailytask,
    achievementtask,
    changepassword,
    bankinfo,
    modifyphone,
    subscription,
    message,
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
