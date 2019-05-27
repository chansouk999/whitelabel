<template>
  <div>
    <span class="d-none d-xl-block">
      <navbarDekstop></navbarDekstop>
    </span>
    <navbarMoile></navbarMoile>
    <span class="d-block d-xl-none">
      <asides></asides>
      <footers></footers>
    </span>
    <div class="d-none d-xl-block">
      <div class="wrapper container-whitelabel">
        <div class="row">
          <div class="col-2">
            <asides></asides>
          </div>
          <div class="col-xl-10 col-sm-12">
            <div class="main-panel">
              <div class="content">
                <div class="row">
                  <div class="col-12 p-0 home-wrap">
                    <navbarindex></navbarindex>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <alertsidebar></alertsidebar>
      <footers></footers>
    </div>
  </div>
</template>
<script>
import navbarMoile from "../welcome/navbarMobile";
import navbarDekstop from "../welcome/navbarDekstop";
import asides from "../welcome/asides";
import footers from "../welcome/footers";
import navbarindex from "../index/navbarindex";
import alertsidebar from "../alertsidebar";
export default {
  data() {
    return {
      isShowonlyIndex: true
    };
  },
  components: {
    navbarDekstop,
    asides,
    footers,
    navbarindex,
    alertsidebar,
    navbarMoile
  },
  mounted() {}
};
</script>
<style scoped>
</style>
