<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-6 text-left">
        <p class="pl-5">Current Page : Page</p>
      </div>
      <div class="col-md-6 text-right">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="tim-icons icon-zoom-split"></i>
            </div>
          </div>
          <input
            type="text"
            class="form-control"
            placeholder="userapiID/refernce/gameID"
            v-model="gamehistorysearch"
            @keyup.enter="customFilter"
          />
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Reference</th>
              <th>PlayerID</th>
              <th>gameID</th>
              <th>Bet Amount</th>
              <th>Payout</th>
              <th>Rolling</th>
              <th>Payout Status</th>
              <th>Bet Place Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- id": 15,
            "userApiID": "00016",
            "betTime": "2019-06-06 11:03:54",
            "betID": "00101012019060610050203",
            "betAmount": 10000,
            "payoutAmount": 1.92,
            "rollingAmount": -10000,
            "gameID": "010120190606100502",
            "betStatus": "clear",
            "betdetail": "Stock : SH000001,Loop : 5minutes, biglast @ 1.92 (010120190606100502)",
            "result": "LOSE",
            "token": "0001_pyuTjv9ZSz",
            "rule": "biglast",
            "stock": "SH000001",
            "stock_ch": "SH000001",
            "loops": "5",
            "created_at": "2019-06-06 11:04:04",
            "updated_at":-->
            <tr
              v-for="(data,index) in customFilter"
              v-if="index >= gamehistorystart && index <= gamehistoryend"
            >
              <td class="text-center">{{ index+1 }}</td>
              <td>{{data.betID}}</td>
              <td>{{data.token}}</td>
              <td>{{data.gameID}}</td>
              <td>{{data.betAmount}}</td>
              <td>{{data.payoutAmount}}</td>
              <td>{{data.rollingAmount}}</td>
              <td>{{data.betStatus}}</td>
              <td>{{data.betTime}}</td>
              <td class="td-actions">
                <span data-toggle="modal" data-target=".view-player">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="View Player"
                    class="btn btn-info btn-sm btn-icon"
                    @click="viewuserdata(method='viewuser',data.token,data.token)"
                  >
                    <i class="tim-icons icon-trophy"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target=".view-game-result">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="View Game Result"
                    class="btn btn-success btn-sm btn-icon"
                    @click="viewuserdata(method='viewgameresult',data.token,data.gameID)"
                  >
                    <i class="tim-icons icon-video-66"></i>
                  </button>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- PLAYER INFO -->
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item">
          <select class="browser-default custom-select">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
          </select>
        </li>
        <li class="page-item">
          <span class="page-link" @click="gamehistorypage(methods='previous')">Previous</span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">{{ gamehistorypagenum-1 }}</a>
        </li>
        <li class="page-item active">
          <span class="page-link">
            {{gamehistorypagenum}}
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">{{ gamehistorypagenum+1 }}</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" @click="gamehistorypage(methods='next')">Next</a>
        </li>
      </ul>
    </nav>

    <!-- Modal view player-->
    <div
      class="modal fade view-player"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm" v-if="reqmethod=='viewuser'">
        <div class="modal-content" v-for="data in gotuserhistory ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Player userID: {{data.user_id}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="card-header">User name:{{data.name}}</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Language :
                  <span class="text-warning">{{data.lang}}</span>
                </li>
                <li class="list-group-item">
                  Balance :
                  <span class="text-warning">${{data.userBalance}}</span>
                </li>
                <li class="list-group-item">
                  Total rolling :
                  <span class="text-warning">${{data.TotalRolling}}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal view game result-->
    <div
      class="modal fade view-game-result"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm" v-if="reqmethod=='viewgameresult'">
        <div class="modal-content" v-for="(data,index) in gotuserhistory" v-if="index < 1">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">GamID : {{data.gameID}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Game ResultT :
                  <span class="text-warning">{{data.gameresult}}</span>
                </li>
                <li class="list-group-item">
                  Total bets :
                  <span class="text-warning">{{data.totalbet}}</span>
                </li>
                <li class="list-group-item">
                  Total number of player :
                  <span class="text-warning">{{data.totalplayer}}</span>
                </li>
                <li class="list-group-item">
                  Incom detail:
                  <span class="text-warning">{{data.income}}</span>
                </li>
                <li class="list-group-item">
                  Result time :
                  <span class="text-warning">{{data.resulttime}}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { adminmixin } from "./adminmixin.js";
export default {
  mixins: [adminmixin],
  data() {
    return {
      gamehistorystart: 0,
      gamehistoryend: 20,
      gamehistorypagenum: 1,
      gamehistorysearch: null
    };
  },
  methods: {
    gamehistorypage(methods) {
      if (methods == "previous") {
        if (this.gamehistorystart > 0) {
          this.gamehistorystart -= 20;
          this.gamehistoryend -= 20;
          this.gamehistorypagenum -= 1;
        }
      } else {
        if (this.gamehistoryend < this.gamehistory.length) {
          this.gamehistorystart += 20;
          this.gamehistoryend += 20;
          this.gamehistorypagenum += 1;
        }
      }
    }
  },
  computed: {
    customFilter() {
      // return this.gamehistory.filter((item)=>{
      //     return item.betAmount.includes(this.gamehistorysearch)
      // })
      if (this.gamehistorysearch) {
        return this.gamehistory.filter(post => {
          return (
            post.token.includes(this.gamehistorysearch) ||
            post.betStatus.includes(this.gamehistorysearch) ||
            post.betdetail.includes(this.gamehistorysearch)
          );
        });
      } else {
        return this.gamehistory;
      }
    }
  }
};
</script>

<style scoped>
</style>

