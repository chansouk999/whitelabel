<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-6 text-left">
        <p class="pl-5">Current Page : {{gamehistorypagenum}}</p>
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
            id="gameresult"
            placeholder="userapiID/refernce/gameID"
            v-model="gamehistorysearch"
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
              <th>GameID</th>
              <th>Game Result</th>
              <th>Number Of Bets</th>
              <th>Number of Players</th>
              <th>Total Cash in</th>
              <th>Total Payout</th>
              <th>Result Out Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="(data,index) in customFilter"
              v-if="index >= gamehistorystart && index <= gamehistoryend"
            >
              <td class="text-center">{{ index+1 }}</td>
              <td>{{data.gameID}}</td>
              <td>{{data.gameresult}}</td>
              <td>{{data.totalbet}}</td>
              <td>{{data.totalplayer}}</td>
              <td v-if="data.income == null">0</td>
              <td v-else>{{data.income}}</td>
              <td>{{data.totalpayout}}</td>
              <td>{{data.resulttime}}</td>
              <td class="td-actions">
                <span data-toggle="modal" data-target=".view-Details">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="View Details"
                    class="btn btn-info btn-sm btn-icon"
                    @click="viewuserdata(method='viewgameuser',data.gameID,data.token)"
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
      class="modal fade view-Details"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" v-if="reqmethod =='viewgameuser'">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="exampleModalLongTitle"
              v-for="(data,index) in gotuserhistory"
              v-if="index < 1"
            >GameID: {{ data.gameID }}</h5>
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
                      <th class="text-center">#</th>
                      <th>name</th>
                      <th>betID</th>
                      <th>betAmount</th>
                      <th>payoutAmount</th>
                      <th>rollingAmount</th>
                      <th class="text-right">betStatus/th></th>
                      <th class="text-right">betTime</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(data,index) in gotuserhistory">
                      <td class="text-center">{{index+1}}</td>
                      <td>{{data.token}}</td>
                      <td>{{data.betID}}</td>
                      <td>{{data.betAmount}}</td>
                      <td>{{data.payoutAmount}}</td>
                      <td>{{data.rollingAmount}}</td>
                      <td class="text-right">{{data.betStatus}}/td></td>
                      <td class="text-right">{{data.betTime}}</td>
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
  </div>
</template>
<script>
import { adminmixin } from "./adminmixin.js";

export default {
  mixins: [adminmixin],
  data() {
    return {
      dataserached: null,
      gamehistorystart: 0,
      gamehistoryend: 20,
      gamehistorypagenum: 1,
      gamehistorysearch: null,
      getfiler: []
    };
  },
  watch: {
    dataserached(e) {
      // this.getfiler = this.filterByStock(e)
    }
  },
  methods: {
    filterByStock(id) {
      return this.gamehistory.filter(element => {
        return element.gameID == id;
      });
    },
    gamehistorypage(methods) {
      if (methods == "previous") {
        if (this.gamehistorystart > 0) {
          this.gamehistorystart -= 20;
          this.gamehistoryend -= 20;
          this.gamehistorypagenum -= 1;
        }
      } else {
        if (this.gamehistoryend < this.gameresult.length) {
          this.gamehistorystart += 20;
          this.gamehistoryend += 20;
          this.gamehistorypagenum += 1;
        }
      }
    }
  },
  computed: {
    //  dataserachedfilter(){
    //     return this.gamehistory.filter(post => {
    //         post.gameID=this.gameid
    //     });
    //  },
    customFilter() {
      if (this.gamehistorysearch) {
        return this.gameresult.filter(post => {
          return (
            post.gameresult.includes(this.gamehistorysearch) ||
            post.gameID.includes(this.gamehistorysearch) ||
            post.created_at.includes(this.gamehistorysearch)
          );
        });
      } else {
        return this.gameresult;
      }
    }
  }
};
</script>

<style scoped>
</style>

