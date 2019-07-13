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
                        <table>
                          <tr>
                          <th>Date</th>
                            <th>Number of bets</th>
                            <th>Number of players</th>
                            <th>Total in</th>
                            <th>Total out</th>
                            <th>Net profit</th>
                            <th></th>
                          </tr>
                          <tr v-for="data in dataGamePerformance">
                            <td>{{data.date}}</td>
                            <td>{{data.NumberOfBet}}</td>
                            <td>{{data.NumberOfPlayer}}</td>
                            <td>$ {{data.TotalIn}}</td>
                            <td>$ {{data.TotalOut}}</td>
                            <td>$ {{data.NetProfit}}</td>
                             <td>
                              <button
                                class="btn btn-blue-grey "
                                style="right:0"
                                data-toggle="modal"
                                data-target=".daily-detail-record"
                                @click="getGamePerformanceDetail(data.date)"
                              >daily detail</button>
                            </td>
                          </tr>
                        </table>

                        <!-- PLAYER INFO -->
                      </div>
                      <div class="tab-pane" id="agentperformant" aria-expanded="false">
                        <table>
                          <tr>
                            <td colspan="6" style="text-align:right;padding:0">
                              <button
                                class="btn btn-blue-grey"
                                style="right:0"
                                data-toggle="modal"
                                data-target=".commission-history-record"
                              >Commission history</button>
                            </td>
                          </tr>
                          <tr>
                            <th>AgentID</th>
                            <th>Player</th>
                            <th>Sub-agent</th>
                            <th>Total rolling generated</th>
                            <th>Default percentage</th>
                            <th></th>
                          </tr>
                          <tr v-for="data in dataAgentPerformanceDetail">
                            <td>{{data.agentId}}</td>
                            <td>{{data.numberPlayer}}</td>
                            <td>{{data.subAgent}}</td>
                            <td>{{data.totalIncome}}</td>
                            <td>4%</td>
                            <td>
                              <button
                                class="btn btn-blue-grey"
                                style="right:0"
                                data-toggle="modal"
                                data-target=".commission-history-record"
                              >Commission history</button>
                            </td>
                          </tr>
                        </table>
                      </div>

                      <div class="tab-pane" id="adminlist" aria-expanded="false">
                        <table>
                          <tr>
                            <td colspan="6" style="text-align:right;padding:0">
                              <button
                                class="btn btn-blue-grey"
                                style="right:0"
                                data-toggle="modal"
                                data-target=".manage-record"
                              >Manage records</button>
                            </td>
                          </tr>
                          <tr>
                            <th>AdminID</th>
                            <th>Created date</th>
                            <th>Type</th>
                            <th>Access permission</th>
                          </tr>
                          <tr v-for="data in adminList">
                            <td>{{data.id}}</td>
                            <td>{{data.created_at}}</td>
                            <td>{{data.typeName}}</td>
                            <td>{{data.AdminType}}</td>
                          </tr>
                        </table>
                      </div>
                      <div class="tab-pane" id="finance" aria-expanded="false">
                        <table>
                          <tr>
                            <td colspan="6" style="text-align:left;padding:0">
                              <select id="soflow" v-model="byDay">
                                <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                <option value="day">By day</option>
                                <option value="week">By week</option>
                                <option value="month">By month</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <th>time</th>
                            <th>Event</th>
                            <th>Amount in</th>
                            <th>Amount out</th>
                            <th>Total</th>
                          </tr>
                          <tr v-for="a in 15">
                            <td>datetime</td>
                            <td>player bet/player top-up/agent commission</td>
                            <td>type 300</td>
                            <td>$0</td>
                            <td>+ $300</td>
                          </tr>
                        </table>
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
    <!-- modal daiy-detail action -->
    <div
      class="modal fade daily-detail-record"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Date</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <table>
                <tr>
                  <th>PlayerID</th>
                  <th>Bet amount</th>
                  <th>Payout amount</th>
                  <th>Net profit</th>
                  <th>Time</th>
                </tr>
               <tr v-for="data in dataGamePerformanceDetail" >
                  <td>{{data.PlayerID}}</td>
                  <td>{{data.BetAmount}}</td>
                  <td>{{data.PayoutAmount}}</td>
                  <td>{{data.NetProfit}}</td>
                  <td>{{data.created_at}}</td>
                </tr>
                <tr v-if="dataGamePerformanceDetail.length <= 0">
                  <td style="text-align: center" colspan="5">loading..</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal commission-history action -->
    <div
      class="modal fade commission-history-record"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Date</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <table>
                <tr>
                  <th>Time</th>
                  <th>Commission</th>
                </tr>
                <tr v-for="a in 35">
                  <td>playerID</td>
                  <td>120</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal manage action -->
    <div
      class="modal fade manage-record"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Date</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <table>
                <tr>
                  <th>PlayerID</th>
                  <th>Bet amount</th>
                  <th>Payout amount</th>
                  <th>Net profit</th>
                  <th>Time</th>
                </tr>
                <tr v-for="data in dataGamePerformanceDetail">
                  <td>{{data.PlayerID}}</td>
                  <td>{{data.Amount}}</td>
                  <td>{{data.PayOutAmount}}</td>
                  <td>{{data.NetProfit}}</td>
                  <td>{{data.create_at}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
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
  },
  data() {
    return {
      dataGamePerformance:[],
      dataGamePerformanceDetail:[],
      dataAgentPerformanceDetail:[],
      adminList:[],
      byDay: "day"
    };
  },
  mounted(){
    this.getGamePerformance()
    this.getAdminList()
    this.getAgentPerformance()
  },
  methods:{
     getAgentPerformance(){
      axios.get('api/getAgent').then(res=>{
       this.dataAgentPerformanceDetail = res.data
       console.log(res.data)
      }).catch(err=>{
        alert("error getAgentPerformancet "+ err)
      })
    },
  getAdminList(){
      this.dataGamePerformanceDetail =[]
      axios.get('adminList').then(res=>{
       this.adminList = res.data.data
       console.log(res.data.data)
      }).catch(err=>{
        alert("error get admin list "+ err)
      })
    },
    getGamePerformanceDetail(date){
      this.dataGamePerformanceDetail =[]
      axios.get(`api/getbetHisoty/${date}`).then(res=>{
       this.dataGamePerformanceDetail = res.data[0].data
       console.log(res.data[0].data)
      }).catch(err=>{
        alert("error get GamePerformance "+ err)
      })
    },
    getGamePerformance(){
      axios.get("api/getbetHisoty/display").then(res=>{
        console.log(res.data[0].data)
       this.dataGamePerformance = res.data[0].data
      }).catch(err=>{
        alert("error get GamePerformance "+ err)
      })
    }
  }
};
</script>
<style scoped>
table {
  border-collapse: collapse;
  width: 100%;
}
th {
  background-color: rgb(0, 0, 0);
}

th,
td {
  text-align: left;
  padding: 18px;
  color: white;
}

tr:nth-child(even) {
  background-color: rgb(66, 64, 64);
}
.styled-select select {
  background: transparent;
  border: none;
  font-size: 14px;
  height: 29px;
  padding: 5px; /* If you add too much padding here, the options won't show in IE */
  width: 268px;
  background-color: aquamarine;
}

select#soflow {
  -webkit-appearance: button;
  -webkit-border-radius: 2px;
  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  -webkit-padding-end: 20px;
  -webkit-padding-start: 2px;
  -webkit-user-select: none;
  background-image: url(http://i62.tinypic.com/15xvbd5.png),
    -webkit-linear-gradient(#fafafa, #f4f4f4 40%, #e5e5e5);
  background-position: 97% center;
  background-repeat: no-repeat;
  border: 1px solid #aaa;
  color: #555;
  font-size: inherit;
  margin: 20px;
  overflow: hidden;
  padding: 5px 10px;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 300px;
}
</style>
