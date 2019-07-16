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
                          <li class="nav-item w-8">
                            <a
                              class="nav-link active"
                              href="#playerinfo"
                              data-toggle="tab"
                            >Player info</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#gamehistory" data-toggle="tab">Game History</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#gameresult" data-toggle="tab">Game Result</a>
                          </li>
                          <li class="nav-item w-8">
                            <a
                              class="nav-link"
                              href="#withdrawtopup"
                              data-toggle="tab"
                            >Withdraw - top-up</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#admininfo" data-toggle="tab">Admin info</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#timeline" data-toggle="tab">TimeLine</a>
                          </li>
                          <li class="nav-item w-8">
                            <a
                              class="nav-link"
                              href="#adminplayerrecord"
                              data-toggle="tab"
                            >Player record</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#agentinfo" data-toggle="tab">Agent Info</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#shhinfo" data-toggle="tab">SH Info</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#finance" data-toggle="tab">Agent Transactions</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#request" data-toggle="tab">Request</a>
                          </li>
                          <li class="nav-item w-8" v-if="userdetailpg.next_page_url == null">
                            <!-- <li class="page-item" v-if="userdetailpg.next_page_url !== null"> -->
                            <a class="nav-link" href="#announcement" data-toggle="tab">Announcement</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#managerecord" data-toggle="tab">Manage Record</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#levelchange" data-toggle="tab">Level Change</a>
                          </li>
                          <li class="nav-item w-8">
                            <a class="nav-link" href="#adminCard" data-toggle="tab">Admin Card</a>
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
                                  <td>{{data.currency}}</td>
                                  <td>{{ Math.floor(data.totalOnlineHour / 3600)}}</td>
                                  <td>{{data.lang}}</td>
                                  <td>{{data.TotalRolling}}</td>
                                  <td>{{data.AvailableRolling}}</td>
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
                                        @click="viewuserdata(method='game',data.user_id,data.name)"
                                      >
                                        <i class="tim-icons icon-trophy"></i>
                                      </button>
                                    </span>
                                    <span data-toggle="modal" data-target=".top-up-history">
                                      <button
                                        @click="viewuserdata(method='topup',data.user_id,data.name)"
                                        type="button"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title="Top-up-history"
                                        class="btn btn-success btn-sm btn-icon"
                                      >
                                        <i class="tim-icons icon-video-66"></i>
                                      </button>
                                    </span>
                                    <span data-toggle="modal" data-target=".top-up-history">
                                      <button
                                        @click="viewuserdata(method='withdraw',data.user_id,data.name)"
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
                                        @click="trackusers(data.user_id)"
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
                                        @click="GetPlayerRecore(data.user_id)"
                                        type="button"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title="action record"
                                        class="btn btn-primary  btn-sm btn-icon"
                                      >
                                        <i class="tim-icons icon-coins"></i>
                                      </button>
                                    </span>

                                    <!-- <button type="button" rel="tooltip" class="btn btn-primary" @click="viewuserdata(method='game',data.user_id,data.name)">Game History</button>
              <button type="button" rel="tooltip" class="btn btn-primary"  @click="viewuserdata(method='topup',data.user_id,data.name)">Top-up History</button>
              <button type="button" rel="tooltip" class="btn btn-primary"  @click="viewuserdata(method='withdraw',data.user_id,data.name)">Withdraw History</button>
              <button type="button" rel="tooltip" class="btn btn-primary"  @click="viewuserdata(method='access',data.user_id,data.name)">Access Record</button>
                                    <button type="button" rel="tooltip" class="btn btn-primary"  @click="viewuserdata(method='action',data.user_id,data.name)">Action Record</button>-->
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- < -->
                        </div>

                        <div
                          class="modal fade gamble-history"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="myLargeModalLabel"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-hidden="true"
                                >
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="card card-nav-tabs">
                                  <div class="card-header card-header-success">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th class="text-center">#</th>
                                          <th>Game</th>
                                          <th>Reference</th>
                                          <th>Amout</th>
                                          <th>Payout</th>
                                          <th>Rolling</th>
                                          <th class="text-right">Payout status</th>
                                          <th class="text-right">Bet Place time</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr
                                          v-for="(data ,index ) in gotuserhistory"
                                          v-if="popup==true && index >= A && index <= B "
                                        >
                                          <td class="text-center">{{index+1}}</td>
                                          <td>{{data.gameID}}</td>
                                          <td>{{data.betID}}</td>
                                          <td>{{data.betAmount}}</td>
                                          <td>{{data.payoutAmount}}</td>
                                          <td>{{data.rollingAmount}}</td>
                                          <td class="text-right">{{data.betStatus}}</td>
                                          <td class="text-right">{{data.betTime}}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button
                                  class="btn btn-secondary"
                                  @click="paginate(method='previous')"
                                >Previous</button>
                                <button
                                  class="btn btn-secondary"
                                  href="#"
                                  @click="paginate(method='next')"
                                >Next</button>
                                <button
                                  type="button"
                                  class="btn btn-secondary"
                                  data-dismiss="modal"
                                >Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="modal fade top-up-history"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="myLargeModalLabel"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-hidden="true"
                                >
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="card card-nav-tabs">
                                  <div class="card-header card-header-success">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th class="text-center">#</th>
                                          <th>Time</th>
                                          <th>Reference</th>
                                          <th>Amout<mm::/th></th>
                                          <th class="text-right">Method</th>
                                        </tr>
                                      </thead>
                                      <tbody v-if="reqmethod=='topup' || reqmethod =='withdraw'">
                                        <tr
                                          v-for="(data ,index ) in gotuserhistory"
                                          v-if="popup==true && index >= A && index <= B"
                                        >
                                          <td class="text-center">{{index+1}}</td>
                                          <td>{{data.Time}}</td>
                                          <td>{{data.reference}}</td>
                                          <td>{{data.amount}}</td>
                                          <td
                                            class="text-right"
                                            v-if="data.detail !== ''"
                                          >{{JSON.parse(data.deatil)['method'] }}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button
                                  type="button"
                                  class="btn btn-secondary"
                                  data-dismiss="modal"
                                >Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- PLAYER INFO -->
                        <nav aria-label="...">
                          <ul class="pagination">
                            <li class="page-item">
                              <select
                                class="browser-default custom-select"
                                v-model="userdetailselectpage"
                                @change=" (userdetailselectpage,method='listpage')"
                              >
                                <option v-for="page in userdetailpg.last_page" :value="page">
                                  <span>{{ page }}</span>
                                </option>
                              </select>
                            </li>
                            <li class="page-item" v-if="userdetailpg.prev_page_url !== null">
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
                            <li class="page-item" v-if="userdetailpg.next_page_url !== null">
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
                      <div class="tab-pane" id="levelchange" aria-expanded="false">
                        <app-levelchange></app-levelchange>
                      </div>
                      <div class="tab-pane" id="adminCard" aria-expanded="false">
                        <app-adminCard></app-adminCard>
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

    <!--modal access record -->
    <div
      class="modal fade access-record"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="card-header card-header-success">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Time</th>
                      <th>Passwor Entered</th>
                      <th>Login status</th>
                      <th class="text-right">login IP</th>
                      <th class="text-right">Online period</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="data in trackuser">
                      <td>{{data.time}}</td>
                      <td>{{ data.password | pwddehashed }}</td>
                      <td>{{data.login_status}}</td>
                      <td>{{data.login_IP}}</td>

                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!--/modal access record -->
    <!--modal action record -->
    <div
      class="modal fade action-record"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="content">
                <div class="header text-center">
                  <h3 class="title">My Timeline</h3>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-timeline card-plain">
                      <div class="card-body">
                        <ul class="timeline">
                          <li
                            class="timeline-inverted"
                            v-for="(data,index) in playerRecord"
                            v-if="index % 2 == 0 "
                          >
                            <div class="timeline-badge danger">
                              <i class="tim-icons icon-planet"></i>
                            </div>
                            <div class="timeline-panel">
                              <div class="timeline-heading">
                                <span class="badge badge-pill badge-danger">Some Title</span>
                              </div>
                              <div class="timeline-body">
                                <p>{{ JSON.parse(data.detail).event }}</p>
                              </div>
                              <h6 class="text-dark">
                                <i class="ti-time"></i>
                                {{data.created_at}}
                              </h6>
                            </div>
                          </li>
                          <li v-for="(data,index) in playerRecord" v-if="index % 2 !== 0 ">
                            <div class="timeline-badge danger">
                              <i class="tim-icons icon-planet"></i>
                            </div>
                            <div class="timeline-panel">
                              <div class="timeline-heading">
                                <span class="badge badge-pill badge-danger">Some Title</span>
                              </div>
                              <div class="timeline-body">
                                <p>{{ JSON.parse(data.detail).event }}</p>
                              </div>
                              <h6>
                                <i class="ti-time"></i>
                                {{data.created_at}}
                              </h6>
                            </div>
                          </li>
                          <li v-if="playerRecord.length == 0 ">
                            <div class="timeline-badge danger">
                              <i class="tim-icons icon-planet"></i>
                            </div>
                            <div class="timeline-panel">
                              <div class="timeline-heading">
                                <span class="badge badge-pill badge-danger">Some Title</span>
                              </div>
                              <div class="timeline-body">
                                <p>NO DATA HERER</p>
                              </div>
                              <h6>
                                <i class="ti-time"></i>
                                NO DATA HERER
                              </h6>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!--/modal action record -->
  </div>
</template>
<script>
import { adminmixin } from "./adminmixin.js";
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
import levelchange from "./levelchange";
import adminCard from "./adminCard";
import modal from "./modal";

export default {
  mixins: [adminmixin],
  data() {
    return {
      trackuser: [],
      playerRecord: [],
      A: 0,
      B: 9
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
    "app-levelchange": levelchange,
    "app-adminCard": adminCard,
    "app-modal": modal
  },
  filters: {
    pwddehashed(e) {
      let sp = e.split("-");
      let pn = [];
      sp.forEach(value => {
        pn.push(value[value.length - 1]);
      });
      return pn.join().replace(/,/g, "");
    }
    // BOZJridb-Y6aHKqdb-5iBXF6cb-DFXsfZ1n-CvIhXQ0n-WGpikK4n-yUxcLIln-YtqnpC4n-kI0SoYRg-UMIjqhXg-ErzlfKCg-FszRVaXg
  },
  watch: {
    popup(e) {
      // alert(e);
      if (e == true) {
        this.A = 0;
        this.B = 9;
        console.log(this.A);
        console.log(this.B);
      }
    }
  },
  mounted() {},  
  methods: {
    GetPlayerRecore(id) {
      axios
        .get("/ActionRecord/" + id)
        .then(res => {
          console.log(res.data);
          this.playerRecord = res.data;
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    trackusers(id) {
      axios
        .get("/trackuserLogin/" + id)
        .then(res => {
          this.trackuser = res.data;
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    paginate(method) {
      let vm = this;
      console.log(vm.A);
      console.log(vm.B);
      if (method == "previous") {
        if (vm.A > 0) {
          vm.A -= 10;
          vm.B -= 10;
        }
      } else {
        if (vm.B < vm.gotuserhistory.length) {
          vm.A += 10;
          vm.B += 10;
        }
      }
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
