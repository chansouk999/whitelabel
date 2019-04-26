<template>
  <div>
    <div class="wrapper container-whitelabel">
      <asides></asides>
      <div class="main-panel">
        <navbars></navbars>
        <div class="content">
          <hr>
          <div class="row">
            <div class="col-12 p-0 home-wrap">
           <navbarindex></navbarindex>
              <hr>
            </div>
          </div>
        </div>
       <alertsidebar></alertsidebar>
        <footers></footers>
      </div>
    </div>
  </div>
</template>
<script>
import navbars from "./welcome/navbar";
import asides from "./welcome/asides";
import footers from "./welcome/footers";
import navbarindex from './navbarindex';
import alertsidebar from './alertsidebar';
export default {
  components: {
    navbars,
    asides,
    footers,
    navbarindex,
    alertsidebar
  },
  mounted() {}
};
</script>
<style scoped>
</style>
