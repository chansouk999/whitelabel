<template>
  <div>
    <navbars></navbars>
  </div>
</template>
<script>
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
export default {
  components: {
    navbars,
    asides,
    footers,
  },
  data() {
    return {
      ismenu: false,
      messages: "./index",
      promote: "./promote",
      welcome: "/",
      lobby: "./lobby",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
  },
  mounted() {},

  methods: {
    myaccount() {
      $("#myaccountlink")[0].click();
    },
    withDrawClick() {
      $("#withdraw")[0].click();
    },
    rechargeClick() {
      $("#recharge")[0].click();
    }
  }
};
</script>
<style scoped>
</style>
