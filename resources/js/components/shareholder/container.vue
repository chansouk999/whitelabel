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
                        <H1>gameperfor</H1>

                        <!-- PLAYER INFO -->
                      </div>
                      <div class="tab-pane" id="agentperformant" aria-expanded="false">
                        <H1>agentperformant</H1>
                      </div>
                      <div class="tab-pane" id="gameresult" aria-expanded="false">
                        <H1>gameresult</H1>
                      </div>
                      <div class="tab-pane" id="adminlist" aria-expanded="false">
                        <H1>adminlist</H1>
                      </div>
                      <div class="tab-pane" id="finance" aria-expanded="false">
                        <H1>finance</H1>
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

export default {
  components: {
    "app-aside": aside,
    "app-navbar": navbar,
    "app-footer": footer,
    "app-setting": setting
  }
};
</script>
<style scoped>
</style>
