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
            <div class="row">
              <div class="col-12">
                <div class="card card-nav-tabs">
                  <div class="card-header card-header-danger">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <ul class="nav nav-pills nav-pills-primary" role="tablist" data-tabs="tabs">
                          <li class="nav-item w-25">
                            <a
                              class="nav-link active"
                              href="#gameperfor"
                              data-toggle="tab"
                            >Game Perforamance</a>
                          </li>
                          <li class="nav-item w-25">
                            <a
                              class="nav-link"
                              href="#agentperformant"
                              data-toggle="tab"
                            >Agent Performance</a>
                          </li>
                          <li class="nav-item w-25">
                            <a class="nav-link" href="#adminlist" data-toggle="tab">Admin List</a>
                          </li>
                          <li class="nav-item w-25">
                            <a class="nav-link" href="#finance" data-toggle="tab">Finance</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="tab-content text-center">
                      <div class="tab-pane active" id="gameperfor" aria-expanded="true">
                        <!-- <app-playerinfo></app-playerinfo> -->
                        <div class="row">
                          <div class="col-md-6 text-left">
                            <p class="pl-5">Current Page : Page</p>
                          </div>
                          <div class="col-md-6 text-right">
                            <button
                              class="btn btn-link"
                              id="search-button"
                              data-toggle="modal"
                              data-target="#spearchilayerinfo"
                            >
                              <i class="tim-icons icon-zoom-split"></i>
                              <span class="d-lg-none d-md-block">Search</span>
                            </button>
                            <div
                              class="modal modal-search fade"
                              id="spearchilayerinfo"
                              tabindex="-1"
                              role="dialog"
                              aria-labelledby="spearchilayerinfo"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <input type="text" class="form-control" placeholder="SEARCH" />
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br />
                        <!-- PLAYER INFO -->
                      </div>
                      <div class="tab-pane" id="agentperformant" aria-expanded="false">
                        <app-agentperformant></app-agentperformant>
                      </div>
                      <div class="tab-pane" id="gameresult" aria-expanded="false">
                        <app-adminlist></app-adminlist>
                      </div>
                      <div class="tab-pane" id="adminlist" aria-expanded="false">
                        <app-finance></app-finance>
                      </div>
                      <div class="tab-pane" id="finance" aria-expanded="false">
                        <app-finance></app-finance>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
