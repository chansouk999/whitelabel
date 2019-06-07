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
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              href="#playerinfo"
                              data-toggle="tab"
                            >Player info</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#gamehistory" data-toggle="tab">Game History</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#gameresult" data-toggle="tab">Game Result</a>
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link"
                              href="#withdrawtopup"
                              data-toggle="tab"
                            >Withdraw top-up</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#admininfo" data-toggle="tab">Admin info</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#timeline" data-toggle="tab">TimeLine</a>
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link"
                              href="#adminplayerrecord"
                              data-toggle="tab"
                            >Player record</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#agentinfo" data-toggle="tab">Agent Info</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#shhinfo" data-toggle="tab">SH Info</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#finance" data-toggle="tab">Finance</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#request" data-toggle="tab">Request</a>
                          </li>
                          <li class="page-item" v-if="userdetailpg.next_page_url !== null">
                            <a class="nav-link" href="#announcement" data-toggle="tab">Announcement</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#managerecord" data-toggle="tab">Manage Record</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="tab-content text-center">
                      <div class="tab-pane active" id="playerinfo" aria-expanded="true">
                        <!-- <app-playerinfo></app-playerinfo> -->
                        <div class="row">
                          <div class="col-md-6 text-left">
                            <p class="pl-5">Current Page : Page {{ userdetailpg.currentpage }}</p>
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
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="inlineFormInputGroup"
                                      placeholder="SEARCH"
                                    >
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
                        <br>
                        <!-- PLAYER INFO -->
                        <div class="row">
                          <div class="col-md-12 col-lg-12">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>PlayerID</th>
                                  <th>Name</th>
                                  <th>Balance</th>
                                  <th>Currency</th>
                                  <th>online hour</th>
                                  <th>Language</th>
                                  <th>Total rolling</th>
                                  <th>Available Rolling</th>
                                  <th>Online Status</th>
                                  <th>Register Time</th>
                                  <th>Register IP</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="tr-loader" v-if="loading == true">
                                  <td colspan="13">
                                    <div class="cover-load">
                                      <div class="lds-ring">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr class="tr-loader" v-if="loading_text == true">
                                  <td colspan="13">
                                    <div class="cover-load">NO DATA IN THIS PAGE</div>
                                  </td>
                                </tr>
                                <tr
                                  v-for="(data,index) in userdetail"
                                  class="userdeteail"
                                  v-if="loading == false"
                                >
                                  <td class="text-center">{{ index+1 }}</td>
                                  <td>{{data.user_id}}</td>
                                  <td>{{data.name}}</td>
                                  <td>{{data.userBalance}}</td>
                                  <td>{{data.totalOnlineHour}}</td>
                                  <td>{{data.id}}</td>
                                  <td>{{data.userBalance}}</td>
                                  <td>{{data.userBalance}}</td>
                                  <td>{{data.userBalance}}</td>
                                  <td>{{data.userStatus}}</td>
                                  <td>{{data.created_at}}</td>
                                  <td>{{data.accessIP}}</td>
                                  <td class="td-actions text-right">
                                    <span data-toggle="modal" data-target=".gamble-history">
                                      <button
                                        type="button"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title="Game History"
                                        class="btn btn-info btn-sm btn-icon"
                                      >
                                        <i class="tim-icons icon-trophy"></i>
                                      </button>
                                    </span>
                                    <span data-toggle="modal" data-target=".top-up-history">
                                      <button
                                        type="button"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title="Top-up-history"
                                        class="btn btn-success btn-sm btn-icon"
                                      >
                                        <i class="tim-icons icon-video-66"></i>
                                      </button>
                                    </span>
                                    <span data-toggle="modal" data-target=".withdraw-history">
                                      <button
                                        type="button"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title="withdraw history"
                                        class="btn btn-danger btn-sm btn-icon"
                                      >
                                        <i class="tim-icons icon-wallet-43"></i>
                                      </button>
                                    </span>
                                    <span data-toggle="modal" data-target=".access-record">
                                      <button
                                        type="button"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title="access record"
                                        class="btn btn-primary btn-sm btn-icon"
                                      >
                                        <i class="tim-icons icon-paper"></i>
                                      </button>
                                    </span>
                                    <span data-toggle="modal" data-target=".action-record">
                                      <button
                                        type="button"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title="action record"
                                        class="btn btn-warning btn-sm btn-icon"
                                      >
                                        <i class="tim-icons icon-coins"></i>
                                      </button>
                                    </span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- < -->
                        </div>
                        <!-- PLAYER INFO -->
                        <nav aria-label="...">
                          <ul class="pagination">
                            <li class="page-item">
                              <select
                                class="browser-default custom-select"
                                v-model="userdetailselectpage"
                                @change="userdata(userdetailselectpage,method='listpage')"
                              >
                                <option
                                  selected
                                  v-for="page in userdetailpg.last_page"
                                  :value="page"
                                >{{ page }}</option>
                              </select>
                            </li>
                            <li class="page-item">
                              <span
                                class="page-link"
                                @click="userdata(userdetailpg.prev_page_url,method='previous')"
                              >Previous</span>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">{{ userdetailpg.currentpage - 1 }}</a>
                            </li>
                            <li class="page-item active">
                              <span class="page-link">
                                {{userdetailpg.currentpage}}
                                <span
                                  class="sr-only"
                                >{{userdetailpg.currentpage}}</span>
                              </span>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">{{ userdetailpg.currentpage + 1 }}</a>
                            </li>
                            <li class="page-item">
                              <a
                                class="page-link"
                                href="#"
                                @click="userdata(userdetailpg.next_page_url,method='next')"
                              >Next</a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                      <div class="tab-pane" id="gamehistory" aria-expanded="false">
                        <app-gamehistory></app-gamehistory>
                      </div>
                      <div class="tab-pane" id="gameresult" aria-expanded="false">
                        <app-gameresult></app-gameresult>
                      </div>
                      <div class="tab-pane" id="withdrawtopup" aria-expanded="false">
                        <app-withdraw></app-withdraw>
                      </div>
                      <div class="tab-pane" id="admininfo" aria-expanded="false">
                        <app-admin-info></app-admin-info>
                      </div>
                      <div class="tab-pane" id="timeline" aria-expanded="false">
                        <app-timeline></app-timeline>
                      </div>
                      <div class="tab-pane" id="adminplayerrecord" aria-expanded="false">
                        <app-playerrecord></app-playerrecord>
                      </div>
                      <div class="tab-pane" id="agentinfo" aria-expanded="false">
                        <app-agentinfo></app-agentinfo>
                      </div>
                      <div class="tab-pane" id="shhinfo" aria-expanded="false">
                        <app-shinfo></app-shinfo>
                      </div>
                      <div class="tab-pane" id="finance" aria-expanded="false">
                        <app-finance></app-finance>
                      </div>
                      <div class="tab-pane" id="request" aria-expanded="false">
                        <app-request></app-request>
                      </div>
                      <div class="tab-pane" id="announcement" aria-expanded="false">
                        <app-announcement></app-announcement>
                      </div>
                      <div class="tab-pane" id="managerecord" aria-expanded="false">
                        <app-managerecord></app-managerecord>
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
import aside from "./asides";
import navbar from "./navbar";
import footer from "./footers";
import setting from "./setting";
import playerinfo from "./playerinfo";
import gamehistory from "./gamehistory";
import gameresult from "./gameresult";
import withdraw from "./withdraw";
import admininfor from "./admininfo";
import timeline from "./timeline";
import playerrecord from "./playerrecord";
import agentinfo from "./agentinfo";
import shinfo from "./shinfo";
import finance from "./finance";
import request from "./request";
import announcement from "./announcement";
import managerecord from "./managerecord";
import modal from "./modal";

export default {
  data() {
    return {
      loading_text: false,
      loading: null,
      userdetail: [],
      userdetailpg: [],
      userdetailselectpage: null,
      searchuserdetail: null
    };
  },
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
    "app-modal": modal
  },
  mounted() {
    this.userdata();
  },
  methods: {
    userdata(pagenum, method) {
      this.loading = true;
      this.loading_text = false;
      let url = "";
      if (this.searchuserdetail == null) {
        if (method == "listpage") {
          url = "/getdata?page=" + pagenum;
        } else if (method == "previous" || method == "next") {
          url = pagenum;
        } else {
          url = "/getdata";
        }
      } else {
        if (method == "listpage") {
          url = "/getdata?page=" + pagenum + "&search=" + this.searchuserdetail;
        } else {
          url = pagenum;
        }
      }
      axios
        .get(url)
        .then(res => {
          console.log(res.data.userdata);
          if (res.data.userdata == "") {
            alert("ok");
          }
          this.userdetail = res.data.userdata.data;
          this.userdetailpg = {
            currentpage: res.data.userdata.current_page,
            next_page_url: res.data.userdata.next_page_url,
            path: res.data.userdata.path,
            last_page_url: res.data.userdata.last_page_url,
            per_page: res.data.userdata.per_page,
            last_page: res.data.userdata.last_page,
            prev_page_url: res.data.userdata.prev_page_url,
            per_page: res.data.userdata.per_page
          };
        })
        .catch(er => {
          console.log(er.res);
        });
    },

    gamehistory(pagenum, method) {
      this.loading = true;
      this.loading_text = false;
      let url = "";
      if (this.searchuserdetail == null) {
        if (method == "listpage") {
          url = "/getdata?page=" + pagenum;
        } else if (method == "previous" || method == "next") {
          url = pagenum;
        } else {
          url = "/getdata";
        }
      } else {
        if (method == "listpage") {
          url = "/getdata?page=" + pagenum + "&search=" + this.searchuserdetail;
        } else {
          url = pagenum;
        }
      }
      axios
        .get(url)
        .then(res => {
          console.log(res.data.userdata);
          if (res.data.userdata == "") {
            alert("ok");
          }
          this.userdetail = res.data.userdata.data;
          this.userdetailpg = {
            currentpage: res.data.userdata.current_page,
            next_page_url: res.data.userdata.next_page_url,
            path: res.data.userdata.path,
            last_page_url: res.data.userdata.last_page_url,
            per_page: res.data.userdata.per_page,
            last_page: res.data.userdata.last_page,
            prev_page_url: res.data.userdata.prev_page_url,
            per_page: res.data.userdata.per_page
          };
        })
        .catch(er => {
          console.log(er.res);
        });
    }
  },
  watch: {
    userdetail(e) {
      this.loading = false;
      // console.log(e)
    }
  }
};
</script>
<style scoped>
.tr-loader {
}
.tr-loader td {
}
.cover-load {
  margin-top: 40px;
}
.lds-ring {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 51px;
  height: 51px;
  margin: 6px;
  border: 6px solid #343a40;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #343a40 transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
