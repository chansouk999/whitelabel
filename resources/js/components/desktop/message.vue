<template>
  <div>
    <app-navbar></app-navbar>
    <!-- Content Wrapper. Contains page content -->
    <div class="container">
      <div class="row">
        <div class="col-2">
          <app-aside></app-aside>
        </div>
        <div class="col-xl-10 col-sm-12">
          <div class="row content">
            <app-navbarMessage></app-navbarMessage>
          </div>
          <!-- /.row -->
        </div>
      </div>
      <div class="col-12">
        <app-footer></app-footer>
        <app-alertsidebar></app-alertsidebar>
      </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- start your code here! -->
  </div>
</template>
<script>
import navbar from "./navbar";
import aside from "./asides";
import footer from "./footers";
import navbarmessage from "./navbarmessage";
import alertsidebar from '../alertsidebar';
export default {
  components: {
    "app-navbar": navbar,
    "app-aside": aside,
    "app-footer": footer,
    "app-navbarMessage": navbarmessage,
    "app-alertsidebar":alertsidebar
  }
};
</script>
<style scoped>
</style>

