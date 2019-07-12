<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-4 text-left">
        <p class="pl-5">Current Page : Page</p>
      </div>
      <div class="col-md-4">
        <button
          class="btn btn-primary  btn-round"
          data-toggle="modal"
          data-target="#MakenewAgent"
        >Make new Agent</button>
      </div>
      <div class="col-md-4 text-right">
        <button class="btn btn-link" id="agent-info" data-toggle="modal" data-target=".agent-info">
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade agent-info"
          tabindex="-1"
          role="dialog"
          aria-labelledby="agent-info"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  id="agent-info"
                  placeholder="userapiID/refernce/gameID"
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
              <th>AgentID</th>
              <th>Type</th>
              <th>Join in time</th>
              <th>Number of player below</th>
              <th>sub-agent</th>
              <th>Balance</th>
              <th>Precentage</th>
              <th>total income</th>
              <th>Bank Account</th>
              <th>Name</th>
              <th>Province</th>
              <th>City</th>
              <th>Branch</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(data,index) in agentinfo" v-if="index >= A && index <= B">
              <td class="text-center">{{ index+1 }}</td>
              <td>{{data.agentId}}</td>
              <td>{{data.typeId}}</td>
              <td>{{data.joinTime}}</td>
              <td>{{data.numberPlayer}}</td>
              <td>{{data.subAgent}}</td>
              <td>{{data.balance}}</td>
              <td>{{data.percentage}}</td>
              <td>{{data.totalIncome}}</td>
              <td>{{data.bankAccount}}</td>
              <td>{{data.name}}</td>
              <td>{{data.province}}</td>
              <td>{{data.city}}</td>
              <td>{{data.branch}}</td>
              <td class="td-actions">
                <span data-toggle="modal" data-target=".sub-agent">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Sub Agent"
                    class="btn btn-info btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-trophy"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target=".player">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Player"
                    class="btn btn-danger btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-video-66"></i>
                  </button>
                </span>

                <span data-toggle="modal" data-target="#income">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Income "
                    class="btn btn-info btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-trophy"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target="#commission">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Commission"
                    class="btn btn-success btn-sm btn-icon"
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
          <span class="page-link" @click="paginate(method='previous')">Previous</span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
          <span class="page-link">
            2
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" @click="paginate(method='next')">Next</a>
        </li>
      </ul>
    </nav>

    <!-- Modal view player-->
    <div
      class="modal fade sub-agent"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Player userID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="card-header">User name:</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Language :
                  <span class="text-warning">Chinese</span>
                </li>
                <li class="list-group-item">
                  Balance :
                  <span class="text-warning">$496.33</span>
                </li>
                <li class="list-group-item">
                  Total rolling :
                  <span class="text-warning">$1565.84</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal view game result-->
    <div
      class="modal fade player"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">GamID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="card-header">User name:</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Game ResultT :
                  <span class="text-warning">e.g 33</span>
                </li>
                <li class="list-group-item">
                  Total bets :
                  <span class="text-warning">e.g 777</span>
                </li>
                <li class="list-group-item">
                  Total number of player :
                  <span class="text-warning">e.g 588</span>
                </li>
                <li class="list-group-item">
                  Incom detai9300.78ls :
                  <span class="text-warning">e.g $</span>
                </li>
                <li class="list-group-item">
                  Result time :
                  <span class="text-warning">e.g 20/02/2019 19:29:43</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Maek new agent -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="MakenewAgent"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form class="form-horizontal" method="post" action>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Make new agent</h5>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <label class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="text"
                            name="name"
                            class="form-control"
                            v-model="agentname"
                            placeholder="Name..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Bank Account</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="agentbankacc"
                            type="email"
                            name="bankaccount"
                            class="form-control"
                            placeholder="Bank Account..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Provice</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="agentprovince"
                            type="email"
                            name="Provice"
                            class="form-control"
                            placeholder="Provice..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">City</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="agentcity"
                            type="email"
                            name="city"
                            class="form-control"
                            placeholder="City..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Branch</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="agentbranch"
                            type="email"
                            name="branch"
                            class="form-control"
                            placeholder="Branch..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Percentage</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="percentage"
                            type="email"
                            name="branch"
                            class="form-control"
                            placeholder="Percentage..."
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button
                type="submit"
                class="btn btn-primary"
                @click.prevent="saveagent"
              >Save & Continue</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--  -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="income"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLongTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">AgentID</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Player</th>
                  <th>Bet amount</th>
                  <th>Bet time</th>
                  <th>Rolling</th>
                  <th>%</th>
                  <th>Commission</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PlayerID</td>
                  <td>e.g $30</td>
                  <td>DATATIME</td>
                  <td>e.g $30</td>
                  <td>e.g 5%</td>
                  <td>$ 1.5</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="commission"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLongTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">AgentID</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Time</th>
                  <th>WithDrawID</th>
                  <th>Commssion Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>DATATIME</td>
                  <td>WithDrawID</td>
                  <td>e.g $45687</td>
                </tr>
              </tbody>
            </table>
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
      agentname: null,
      agentbankacc: null,
      agentprovince: null,
      agentcity: null,
      agentbranch: null,
      percentage: null,

      A: 0,
      B: 19
    };
  },
  mounted() {
    this.getagentinfo();
  },
  methods: {
    paginate(method) {
      let vm = this;
      if (method == "previous") {
        if (vm.A > 0) {
          vm.A -= 20;
          vm.B -= 20;
        }
      } else {
        if (vm.B < vm.agentinfo.length) {
          vm.A += 20;
          vm.B += 20;
        }
      }
    },
    saveagent(data) {
      // asdasdasdasd`
      let vm = this;
      data = {
        agentname: vm.agentname,
        agentbankacc: vm.agentbankacc,
        agentprovince: vm.agentprovince,
        agentcity: vm.agentcity,
        agentbranch: vm.agentbranch,
        percentage: vm.percentage
      };
      axios
        .post("/saveagent", data)
        .then(res => {
          // console.log(res.data);
          let code = res.data.code;
          let msg = res.data.msg;
          let data = res.data.data;
          if (code == 200) {
            this.getagentinfo();
          }
        //   alert(msg);
        })
        .catch(e => {
          console.log(e.response);
        });
    }
  }
};
</script>

<style scoped>
</style>

