<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-6 text-left">
        <p class="pl-5">Current Page : Page</p>
      </div>
      <div class="col-md-6 text-right">
        <button class="btn btn-link" id="gameresult" data-toggle="modal" data-target=".gameresult">
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade gameresult"
          tabindex="-1"
          role="dialog"
          aria-labelledby="gameresult"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  id="gameresult"
                  placeholder="userapiID/refernce/gameID"
                  v-model="gamehistorysearch"
                >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
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
            <tr v-for="(data,index) in customFilter"
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
                    @click="getuserbet(data.gameID)"
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
          <span
            class="page-link"
            @click="gamehistorypage(methods='previous')"
          >Previous</span>
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
      <div class="modal-dialog modal-lg"  >
        <div class="modal-content" v-for="(data,index) in getfiler">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">GameID: {{ data.gameID }}</h5>
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
                      <th class="text-center">{{index+1}}</th>
                      <th>{{data.token}}</th>
                      <th>{{data.betID}}</th>
                      <th>{{data.betAmount}}</th>
                      <th>{{data.payoutAmount}}</th>
                      <th>{{data.rollingAmount}}</th>
                      <th class="text-right">{{data.betStatus}}/th>
                      <th class="text-right">{{data.betTime}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>UserID</td>
                      <td>BetID</td>
                      <td>BetAmount</td>
                      <td>PayoutAmount</td>
                      <td>Rolling Amount</td>
                      <td>Clear/pending</td>
                      <td class="text-right">04/09/208 19:38:57</td>
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
 data(){
   return{
     dataserached:null,
     gamehistorystart:0,
     gamehistoryend:20,
     gamehistorypagenum:1,
     gamehistorysearch:null,
     getfiler:[]

   }
 },
 watch:{
    dataserached(e){
      alert(e)
    }
 },
methods:{
   getuserbet(gameid){
       return this.gamehistory.filter(post => {
          return post.gameID==this.dataserached;
      });
   },
  gamehistorypage(methods){
        if(methods=='previous'){
          if(this.gamehistorystart > 0){
              this.gamehistorystart -= 20
              this.gamehistoryend -= 20
              this.gamehistorypagenum -= 1
          }
        }else{
           if(this.gamehistoryend < this.gameresult.length){
              this.gamehistorystart += 20
              this.gamehistoryend += 20
              this.gamehistorypagenum += 1
          }
         
        }
    }
  },
  computed:{
  //  dataserachedfilter(){
  //     return this.gamehistory.filter(post => {
  //         post.gameID=this.gameid
  //     });
  //  },
    customFilter(){
      if(this.gamehistorysearch){
        return this.gameresult.filter(post => {
          return post.gameresult.includes(this.gamehistorysearch) || post.gameID.includes(this.gamehistorysearch) || post.created_at.includes(this.gamehistorysearch);
        });
      }else{
        return this.gameresult
      }
    },
  }

 
};

</script>

<style scoped>
</style>

