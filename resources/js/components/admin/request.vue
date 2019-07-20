<template>
  <div>
    <!-- PLAYER INFO -->

    <div class="row">
      <div class="col-md-3 text-left">
        <p class="pl-5">Current Page : 1</p>
      </div>
      <div class="col-md-2 text-center d-flex">
        <div class="form-check mr-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value />
            Player
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value />
            Agent
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
      </div>
      <div class="col-md-5 text-right">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="tim-icons icon-zoom-split"></i>
            </div>
          </div>
          <input
            type="text"
            class="form-control"
            v-model="search"
            placeholder="WebID/currency/adminID/transferID"
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
              <th>PlayerID</th>
              <th>Request detail</th>
              <th>Amount</th>
              <th>method</th>
              <th>detailes</th>
              <th>request time</th>
              <th>IP</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(data,index) in filtered" v-if="index >= A && index <= B">
              <td class="text-center">{{index+1}}</td>
              <td>{{ data.userId }}</td>
              <td>{{ data.requestDetail }}</td>
              <td>{{ data.amount }}</td>
              <td>{{ data.method }}</td>
              <td>CardNo : {{ JSON.parse(data.detail).cardno }} ,registerCity : {{ JSON.parse(data.detail).regcity }} ,RegisterProvince : {{ JSON.parse(data.detail).regprovince }} ,Branch : {{ JSON.parse(data.detail).branch }}</td>

              <td>{{ data.requestTime }}</td>
              <td>{{ data.ip }}</td>
              <td class="td-actions">
                <span data-toggle="modal" data-target=".approv">
                  <button
                    @click="actionmethod(method='approve',data.id,data.userId)"
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Approv"
                    class="btn btn-info btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-trophy"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target=".deny">
                  <button
                    @click="actionmethod(method='deny',data.id,data.userId)"
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Deny"
                    class="btn btn-success btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-video-66"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target="#view-player">
                  <button
                    @click="actionmethod(method='viewuser',data.id,data.userId)"
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="View User "
                    class="btn btn-info btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-trophy"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target=".message-user">
                  <button
                    @click="actionmethod(method='muser',data.id,data.userId)"
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Message User"
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
    <!-- Modal Balance Transfer -->

    <div
      class="modal fade balance-transfer"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">transfer Balance</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <p class="text-white text-right">Transfer Amount</p>
                  </div>
                  <div class="col-md-7">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Transfer Amount" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p class="text-white text-right">UserID</p>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Type here..." />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <p class="text-white text-right">Search for list</p>
                  </div>
                  <div class="col-md-4">
                    <select
                      class="selectpicker"
                      data-size="7"
                      data-style="btn btn-primary"
                      title="Single Select"
                    >
                      <option disabled selected>Single Option</option>
                      <option value="2">Foobar</option>
                      <option value="3">Is great</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p class="text-white text-right">UserID</p>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Type here..." />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <p class="text-white text-right">Search for list</p>
                  </div>
                  <div class="col-md-4">
                    <select
                      class="selectpicker"
                      data-size="7"
                      data-style="btn btn-primary"
                      title="Single Select"
                    >
                      <option disabled selected>Single Option</option>
                      <option value="2">Foobar</option>
                      <option value="3">Is great</option>
                    </select>
                  </div>
                </div>
                <hr />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Confirm</button>
          </div>
        </div>
      </div>
    </div>

    <!--/ Modal Balance Transfer -->

    <!--modal action record -->
    <div
      class="modal fade view-evidence"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">TransferID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card bg-dark text-white">
              <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
              <div class="card-img-overlay">
                <h4 class="card-title">Card title</h4>
                <p
                  class="card-text"
                >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
              </div>
            </div>
            <hr />
            <div class="card bg-dark text-white">
              <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
              <div class="card-img-overlay">
                <h4 class="card-title">Card title</h4>
                <p
                  class="card-text"
                >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
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
    <!--/modal View evidence -->

    <!--modal edit evidence-->
    <div
      class="modal fade edit-evidence"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">TransferID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="card bg-dark text-white">
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
                </div>
                <div class="card-footer">
                  <button
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Edit Evidence"
                    type="button"
                    class="btn btn-secondary btn-sm btn-icon"
                    data-dismiss="modal"
                  >
                    <i class="tim-icons icon-pencil"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-sm btn-icon"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Delete Evidence"
                  >
                    <i class="tim-icons icon-trash-simple"></i>
                  </button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card bg-dark text-white">
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
                </div>
                <div class="card-footer">
                  <button
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Edit Evidence"
                    type="button"
                    class="btn btn-secondary btn-sm btn-icon"
                    data-dismiss="modal"
                  >
                    <i class="tim-icons icon-pencil"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-sm btn-icon"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Delete Evidence"
                  >
                    <i class="tim-icons icon-trash-simple"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card bg-dark text-white">
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
                </div>
                <div class="card-footer">
                  <button
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Edit Evidence"
                    type="button"
                    class="btn btn-secondary btn-sm btn-icon"
                    data-dismiss="modal"
                  >
                    <i class="tim-icons icon-pencil"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-sm btn-icon"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Delete Evidence"
                  >
                    <i class="tim-icons icon-trash-simple"></i>
                  </button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="assetsadmin/img/img-opacity.png" alt="..." />
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="..." />
                    </span>
                    <a
                      href="#pablo"
                      class="btn btn-danger btn-round fileinput-exists"
                      data-dismiss="fileinput"
                    >
                      <i class="fa fa-times"></i> Remove
                    </a>
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
    <!--/modal edit evidence -->
    <div
      class="modal fade view-player"
      tabindex="-1"
      id="view-player"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm">
        <div class="modal-content" v-for="data in playerdata ">
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

    <div class="popup-alert" v-if="alertwarning==true">
      <div class="center-alter animt">
        <h3 class="txt-alert">New Request</h3>
        <button class="btn-close" @click="closewaning">close</button>
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
      search: "",
      audioplay: new Audio("sound/alrmwaining.mp3"),
      alertwarning: false,
      A: 0,
      B: 19,
      length: null,
      requestdata: [],
      playerdata: []
    };
  },
  computed: {
    filtered() {
      if (this.search) {
        return this.requestdata.filter(item => {
          return (
            item.userId.toLowerCase().includes(this.search.toLowerCase()) ||
            item.requestDetail
              .toLowerCase()
              .includes(this.search.toLowerCase()) ||
            item.amount.toString().includes(this.search) ||
            item.method.toLowerCase().includes(this.search.toLowerCase())
          );
        });
      } else {
        return this.requestdata;
      }
    }
  },

  mounted() {
    let n = 0;
    setInterval(() => {
      n++;
      if (n % 2 == 0) {
        $(".center-alter").removeClass("animt");
      } else {
        $(".center-alter").addClass("animt");
      }
      if (n == 5) {
        return (n = 0);
      }
    }, 1000);
    this.getrequestdata();
    setInterval(() => {
      this.getrequestdata();
    }, 5000);

    // alert(this.length);
  },
  //   watch:{
  //       alertwarning(e){
  //           if(e==true){
  //               let n =0
  //               setInterval(()=>{
  //                   n++
  //                   if(n==5){
  //                       this.audioplay.play();
  //                       return n = 0
  //                   }
  //               },1000)
  //           }
  //       }
  //   },
  methods: {
    closewaning() {
      this.audioplay.pause();
      this.alertwarning = false;
    },
    actionmethod(method, id, userid) {
      let code = 0;
      if (method == "approve") {
        code = 200; // success
      }
      if (method == "deny") {
        code = 303; // no access
      }
      if (method == "viewuser") {
        code = 202; // no access
      }
      if (method == "muser") {
        code = 777; // no access
      }
      let data = {
        method: method,
        code: code,
        id: id,
        userid: userid
      };
      axios
        .post("/actionprocess", data)
        .then(res => {
          let code = res.data.code;
          let msg = res.data.msg;
          let data = res.data.data;
          this.playerdata = res.data.data;
          console.log(res.data);
          if (code == 200) {
            this.getevnthistory();
            this.getrequestdata();
            alert(msg);
          }
          if (code == 100) {
            alert(msg);
          }
          if (code == 300) {
            alert(msg);
          }
          if (code == 500) {
            alert(msg);
          }
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    paginate(method) {
      let vm = this;
      if (method == "previous") {
        if (vm.A > 0) {
          vm.A -= 20;
          vm.B -= 20;
        }
      } else {
        if (vm.B < vm.requestdata.length) {
          vm.A += 20;
          vm.B += 20;
        }
      }
    },
    getrequestdata(page, data, code) {
      let vm = this;
      axios.get("/getreuest").then(res => {
        vm.requestdata = res.data.data.data;
        let l = res.data.data.data.length;
        if (l > this.length) {
          if (this.length !== null) {
            this.audioplay.play();
            this.alertwarning = true;
          }
        }
        this.length = l;
      });
    }
  }
};
</script>
<style scoped>
.popup-alert {
  position: fixed;
  top: 0;
  width: 100%;
  height: 100%;
  left: 0;
}
.center-alter {
  width: 300px;
  height: 200px;
  color: #000;
  position: relative;
  top: 38%;
  box-shadow: 0px 0px 8px #000;
  border-radius: 5px;
  background: white;
  margin: 0 auto;
}
.btn-close {
  background: #222;
  position: absolute;
  border-radius: 5px;
  color: #fff;
  bottom: 16px;
  left: 129px;
}
.animt {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}
.txt-alert {
  color: #000;
  /* margin-top: 9px; */
  padding-top: 69px;
}

@keyframes shake {
  0% {
    transform: translate(1px, 1px) rotate(0deg);
  }
  10% {
    transform: translate(-1px, -2px) rotate(-1deg);
  }
  20% {
    transform: translate(-3px, 0px) rotate(1deg);
  }
  30% {
    transform: translate(3px, 2px) rotate(0deg);
  }
  40% {
    transform: translate(1px, -1px) rotate(1deg);
  }
  50% {
    transform: translate(-1px, 2px) rotate(-1deg);
  }
  60% {
    transform: translate(-3px, 1px) rotate(0deg);
  }
  70% {
    transform: translate(3px, 1px) rotate(-1deg);
  }
  80% {
    transform: translate(-1px, -1px) rotate(1deg);
  }
  90% {
    transform: translate(1px, 2px) rotate(0deg);
  }
  100% {
    transform: translate(1px, -2px) rotate(-1deg);
  }
}
</style>

