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
                            <td colspan="6" style="text-align:right;padding:0">
                              <button class="btn btn-blue-grey" style="right:0">daily detail</button>
                            </td>
                          </tr>
                          <tr>
                          <th>Date</th>
                            <th>Number of bets</th>
                            <th>Number of players</th>
                            <th>Total in</th>
                            <th>Total out</th>
                            <th>Net profit</th>
                          </tr>
                          <tr v-for="a in 15">
                            <td>2019/10/10</td>
                            <td>120</td>
                            <td>50</td>
                            <td>$ 50145</td>
                            <td>$ 3254</td>
                            <td>$ 2563</td>
                          </tr>
                        </table>

                        <!-- PLAYER INFO -->
                      </div>
                      <div class="tab-pane" id="agentperformant" aria-expanded="false">
                        <table>
                          <tr>
                            <td colspan="6" style="text-align:right;padding:0">
                              <button class="btn btn-blue-grey" style="right:0">Commission history</button>
                            </td>
                          </tr>
                          <tr>
                            <th>AgentID</th>
                            <th>Player</th>
                            <th>Sub-agent</th>
                            <th>Total rolling generated</th>
                            <th>Default percentage</th>
                          </tr>
                          <tr v-for="a in 15">
                            <td>AgentID</td>
                            <td>123</td>
                            <td>7</td>
                            <td>$ 123450.23</td>
                            <td>4%</td>
                          </tr>
                        </table>
                      </div>

                      <div class="tab-pane" id="adminlist" aria-expanded="false">
                        <table>
                          <tr>
                            <td colspan="6" style="text-align:right;padding:0">
                              <button class="btn btn-blue-grey" style="right:0">Manage records</button>
                            </td>
                          </tr>
                          <tr>
                            <th>AdminID</th>
                            <th>Created date</th>
                            <th>Type</th>
                            <th>Access permission</th>
                          </tr>
                          <tr v-for="a in 15">
                            <td>AdminID</td>
                            <td>datetime</td>
                            <td>type name</td>
                            <td>access permission</td>
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
  },data(){
    return{
      byDay:"day",
    }
  }
};
</script>
<style scoped>
table {
  border-collapse: collapse;
  width: 100%;
}
th{
  background-color: rgb(0, 0, 0)
}

th,
td {
  text-align: left;
  padding: 18px;
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
  background-color: aquamarine
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
