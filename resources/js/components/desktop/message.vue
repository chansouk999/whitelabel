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
    <!-- Content Wrapper. Contains page content -->
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
          ></app-aside>
        </div>
        <div class="col-xl-10 col-sm-12">
          <div class="row content">
            <app-navbarMessage
              :recommend_friends="recommend_friends"
              :message="message"
              :myaccount_tra="myaccount_tra"
              :myprivilege="myprivilege"
              :gamelobby="gamelobby"
              :recharge="recharge"
              :withdraw="withdraw"
              :currentlang="currentlang"
              :transaction_record="transaction_record"
              :instant_recharge="instant_recharge"
              :financial_center="financial_center"
              :apply_for_withdrawal="apply_for_withdrawal"
              :self_service_rolling="self_service_rolling"
              :customer_information="customer_information"
              :bank_info="bank_info"
              :modify_phone="modify_phone"
              :msmsubscription="msmsubscription"
              :my_message="my_message"
              :change_password="change_password"
              :customer_care="customer_care"
            ></app-navbarMessage>
          </div>
          <!-- /.row -->
          <div class="row mt-5">
            <app-footer></app-footer>
              <app-alertsidebar></app-alertsidebar>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import navbar from "./navbar";
import aside from "./asides";
import footer from "./footers";
import navbarmessage from "./navbarmessage";
import alertsidebar from "../alertsidebar";
export default {
  mounted() {
    let urlParams = new URLSearchParams(window.location.search);
    let myParam = urlParams.get("page");
    if (myParam == "myaccount") {
      $("#myaccountlink")[0].click();
    }
    if (myParam == "withDrawClick") {
      $("#withDrawClick")[0].click();
    }
    if (myParam == "recharge") {
      $("#recharge")[0].click();
    }
  },
  components: {
    "app-navbar": navbar,
    "app-aside": aside,
    "app-footer": footer,
    "app-navbarMessage": navbarmessage,
    "app-alertsidebar": alertsidebar
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
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6"
  ]
};
</script>
<style scoped>
</style>

