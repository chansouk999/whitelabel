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
            <input class="form-check-input" type="checkbox" value>
            Player
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value>
            Agent
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
      </div>
      <div class="col-md-5 text-right">
        <button class="btn btn-link" id="request" data-toggle="modal" data-target=".request">
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade request"
          tabindex="-1"
          role="dialog"
          aria-labelledby="request"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  id="withdraw"
                  placeholder="WebID/currency/adminID/transferID"
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
            <tr v-for="(data,index) in requestdata" v-if="index >= A && index <= B">
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
                  <button @click="actionmethod(method='approve',data.id,data.userId)"
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
                  <button @click="actionmethod(method='deny',data.id,data.userId)"
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Deny"
                    class="btn btn-success btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-video-66"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target=".view-user">
                  <button @click="actionmethod(method='viewuser',data.id,data.userId)"
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
                  <button @click="actionmethod(method='muser',data.id,data.userId)"
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
                      <input type="text" class="form-control" placeholder="Transfer Amount">
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
                      <input type="text" class="form-control" placeholder="Type here...">
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
                      <input type="text" class="form-control" placeholder="Type here...">
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
                <hr>
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
              <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
              <div class="card-img-overlay">
                <h4 class="card-title">Card title</h4>
                <p
                  class="card-text"
                >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
              </div>
            </div>
            <hr>
            <div class="card bg-dark text-white">
              <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
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
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
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
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
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
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
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
                    <img src="assetsadmin/img/img-opacity.png" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="...">
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
  </div>
</template>
<script>
import { adminmixin } from "./adminmixin.js";
export default {
  mixins: [adminmixin],
  data() {
    return {
      A: 0,
      B: 19,
      requestdata: []
    };
  },
  computed: {
    filterrequest() {
      // if (this.gamehistorysearch) {
      //   return this.gamehistory.filter(post => {
      //     return (
      //       post.token.includes(this.gamehistorysearch) ||
      //       post.betStatus.includes(this.gamehistorysearch) ||
      //       post.betdetail.includes(this.gamehistorysearch)
      //     );
      //   });
      // } else {
      //   return this.gamehistory;
      // }
    }
  },
  mounted() {
    this.getrequestdata();
  },
  methods: {
    actionmethod(method,id,userid){
      let code = 0;
      if(method=='approve'){
         code=200 // success
      }
      if(method=='deny'){
        code=303 // no access
      }
      if(method=='viewuser'){
        code=202 // no access
      }
      if(method=='muser'){
        code=777 // no access
      }
      let data = {
          method:method,
          code:code,
          id:id,
          userid:userid,
      }
      axios.post('/actionprocess',data).then(res=>{
        let code = res.data.code
        let msg = res.data.msg
        let data = res.data.data
        console.log(res.data)
        if(code==200){
          this.getevnthistory()
          this.getrequestdata();
          alert(msg)
        }
        if(code==100){
          alert(msg)
        }
        if(code==300){
          alert(msg)
        }
        if(code==500){
          alert(msg)
        }
      })

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
        console.log(res.data.data);
        vm.requestdata = res.data.data.data;
        // let decode = JSON.parse(vm.requestdata).branch
        // console.log(decode)
      });
    }
  }
};
</script>
<style scoped>
</style>

