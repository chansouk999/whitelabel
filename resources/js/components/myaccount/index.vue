<template>
  <div>
    <div class="d-none d-xl-block">
      <div class="wrapper container-whitelabel">
        <div class="row">
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
    </div>
  </div>
</template>
<script>
import navbarindex from "../myaccount/navbarindex";
import alertsidebar from "../alertsidebar";
export default {
  data() {
    return {
      isShowonlyIndex: true
    };
  },
  components: {
    navbarindex,
    alertsidebar,

  },
  mounted() {}
};
</script>
<style scoped>
</style>
