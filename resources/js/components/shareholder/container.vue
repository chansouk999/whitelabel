<template>
  <div>
    <div class="wrapper">
      <div class="navbar-minimize-fixed">
        <button class="minimize-sidebar btn btn-link btn-just-icon">
          <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
          <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
        </button>
      </div>
      <app-aside></app-aside>
      <div class="main-panel">
        <app-navbar></app-navbar>
        <div class="content">
          <div class="container-fluid">
           <h1>HELLO</h1>
          </div>
        </div>
        <app-footer></app-footer>
      </div>
    </div>
    <app-setting></app-setting>
    <app-modal></app-modal>
  </div>
</template>
<script>
import aside from "../admin/asides";
import navbar from "../admin/navbar";
import footer from "../admin/footers";
import setting from "../admin/setting";
import playerinfo from "../admin/playerinfo";
import gamehistory from "../admin/gamehistory";
import gameresult from "../admin/gameresult";
import withdraw from "../admin/withdraw";
import admininfor from "../admin/admininfo";
import timeline from "../admin/timeline";
import playerrecord from "../admin/playerrecord";
import agentinfo from "../admin/agentinfo";
import shinfo from "../admin/shinfo";
import finance from "../admin/finance";
import request from "../admin/request";
import announcement from "../admin/announcement";
import managerecord from "../admin/managerecord";
import levelchange from "../admin/levelchange";
import adminCard from "../admin/adminCard";
import modal from "../admin/modal";

export default {
      components: {
    "app-aside": aside,
    "app-navbar": navbar,
    "app-footer": footer,
    "app-setting": setting,
    "app-playerinfo": playerinfo,
    "app-gamehistory": gamehistory,
    "app-gameresult": gameresult,
    "app-withdraw": withdraw,
    "app-admin-info": admininfor,
    "app-timeline": timeline,
    "app-playerrecord": playerrecord,
    "app-agentinfo": agentinfo,
    "app-shinfo": shinfo,
    "app-finance": finance,
    "app-request": request,
    "app-announcement": announcement,
    "app-managerecord": managerecord,
    "app-levelchange": levelchange,
    "app-adminCard": adminCard,
    "app-modal": modal
  },
};
</script>
<style scoped>
</style>
