<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-5 text-left">
        <p class="pl-5">Current Page : Page</p>
      </div>
      <div class="col-md-2 text-center d-flex">
        <button
          type="button"
          class="btn btn-primary "
          data-toggle="modal"
          data-target=".balance-transfer"
        >Make a Balance Transfer</button>
      </div>
      <div class="col-md-5 text-right">
        <button class="btn btn-link" id="finace" data-toggle="modal" data-target=".finace">
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade finace"
          tabindex="-1"
          role="dialog"
          aria-labelledby="finace"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  
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
              <th>Time</th>
              <th>User</th>
              <th>Amount</th>
              <th>currency</th>
              <th>Method</th>
              <th>Aaist Admin</th>
              <th>Reference</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(data,index) in agenttranss" v-if="index >= A && index <= B">
              <td class="text-center">{{index+1}}</td>
              <td>{{data.Time}}</td>
              <td>{{data.agentId}}</td>
              <td>{{data.amount}}</td>
              <td>{{data.currency}}</td>
              <td>{{data.methodId}}</td>
              <td>{{data.assitid}}</td>
              <td>{{data.reference}}</td>
              <td class="td-actions">
                <span data-toggle="modal" data-target=".view-evidence">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="View Evidence "
                    class="btn btn-info btn-sm btn-icon"
                    @click="viewevidenece(data.agentId,data.reference)"
                  >
                    <i class="tim-icons icon-trophy"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target=".edit-evidence">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Edit Evidence"
                    class="btn btn-success btn-sm btn-icon"
                    @click="viewevidenece(data.agentId,data.reference)"
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
        <li class="page-item ">
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
          <a class="page-link" href="#"  @click="paginate(method='next')">Next</a>
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
                      <input
                        type="text"
                        v-model="amounttransfer"
                        class="form-control"
                        placeholder="Transfer Amount"
                      >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p class="text-white text-right">AgentID</p>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input
                        v-model="gotagentid"
                        type="text"
                        class="form-control"
                        placeholder="Type here..."
                      >
                    </div>
                  </div>
                  <div class="col-md-2">
                    <p class="text-white text-right">Search for list</p>
                  </div>
                  <div class="col-md-4">
                    <!-- <select
                      class="selectpicker"
                      data-style="btn btn-primary"
                      title="Single Select"
                    >
                    <option v-for="data in agentinfo">{{data.agentId}}</option>
                    </select>-->
                    <select
                      name
                      id
                      class="form-control"
                      data-style="btn btn-primary"
                      title="Single Select"
                      v-model="gotagentid"
                    >
                      <option v-for="data in agentinfo">{{data.agentId}}</option>
                    </select>
                  </div>



                  <div class="col-md-2">
                    <p class="text-white text-right">Currency id</p>
                  </div>
                  <div class="col-md-4">
                    <!-- <select
                      class="selectpicker"
                      data-style="btn btn-primary"
                      title="Single Select"
                    >
                    <option v-for="data in agentinfo">{{data.agentId}}</option>
                    </select>-->
                    <select
                      name
                      id
                      class="form-control"
                      data-style="btn btn-primary"
                      title="Single Select"
                      v-model="getcurrency"
                    >
                      <option value="USD">USD</option>
                      <option value="RMB">RMB</option>
                      <option value="CHB">CHB</option>
                      <option value="BTC">BTC</option>
                      <option value="THB">THB</option>
                      <option value="LAK">LAK</option>
                    </select>
                  </div>
            







                <div class="col-md-2">
                    <p class="text-white text-right">Method</p>
                  </div>
                  <div class="col-md-4">
                    <!-- <select
                      class="selectpicker"
                      data-style="btn btn-primary"
                      title="Single Select"
                    >
                    <option v-for="data in agentinfo">{{data.agentId}}</option>
                    </select>-->
                    <select
                      name
                      id
                      class="form-control"
                      data-style="btn btn-primary"
                      title="Single Select"
                      v-model="methodid"
                    >
                      <option value="AL">Alipay</option>
                      <option value="BC">BankChina</option>
                      <option value="BC">BCEL One</option>
                      <option value="PP">PAYPAL</option>
                    </select>
                  </div>
                      </div>











                <!-- <div class="row">
                   <div class="col-md-3">
                    <p class="text-white text-right">AgentID</p>
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
                </div>-->
                <hr>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" @click.prevent="savetransfer">Confirm</button>
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
            <h5 class="modal-title" id="exampleModalLongTitle">Transfer {{ transfer_id }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card bg-dark text-white" v-for="data in gottransimg">
              <img class="card-img" :src="'evidence/'+data.imgname" alt="Card image">
              <div class="card-img-overlay">
                <!-- <h4 class="card-title">Card title</h4> -->
                <p
                  class="card-text"
                >{{data.imgdesc}}</p>
                <p class="card-text">{{data.created_at}}</p>
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
              <div class="col-md-6" v-for="data in gottransimg">
                <div class="card bg-dark text-white">
                  <img class="card-img" :src="'evidence/'+data.imgname" alt="Card image">
                </div>
                <div class="card-footer">
                  <button
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Edit Evidence"
                    type="button"
                     @click="imgtranfunc(data.id)"
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
                    @click="imgtranfunc(data.id)"
                    title="Delete Evidence"
                  >
                    <i class="tim-icons icon-trash-simple"  @click="delete_img(data.id,data.agent_id)"></i>
                  </button>
                </div>
              </div>
               <div class="col-md-6">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new" >Add Image</span>
                      <input type="file" name="..." @change="addimg">
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
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="saveevivend()">Save changes</button>
          </div>
            
            </div>
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
      amounttransfer: null,
      gotagentid: null,
      agenttranss: [],
      methodid:null,
      getcurrency:null,
      A:0,
      transferimganme:null,
      B:19,
      transimg:[],
      gottransimg:[],
      transfer_id:null,
      agent_ids:null,
    };
  },
  methods: {
    delete_img(id){
      axios.get('/delete_img/'+id).then(res=>{
        console.log(res.data)
          this.viewevidenece(this.agent_ids,this.transfer_id)
      })
    },
    imgtranfunc(id){

    },
    addimg(e){
       let vm = this
       vm.transimg =[]
      const files = e.target.files[0]
      const img = new Image(),
            reader = new FileReader();
            reader.onload = (e) => vm.transimg.push(e.target.result);
            reader.readAsDataURL(files);
            vm.transferimganme = files.name
    },
    saveevivend(){
      axios.post('uploadsave',{name:this.transferimganme,img:this.transimg,agentid:this.agent_ids,refer:this.transfer_id}).then(res=>{
          console.log(res.data)
           this.$swal("", "Complete!", "success", {
              button: false,
              showConfirmButton: false,
              timer: 1500
            });
          this.viewevidenece(this.agent_ids,this.transfer_id)
          this.transimg =[]
      }).catch(er => {
          console.log(er.response);
        });
    },
    viewevidenece(id,refe){
      this.transfer_id = refe
      this.agent_ids = id
      alert(id)
        axios.get('/getimgtrans/'+refe).then(res=>{
        this.gottransimg = res.data.data.data
        console.log(this.gottransimg)
        
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
        if (vm.B < vm.agenttranss.length) {
          vm.A += 20;
          vm.B += 20;
        }
      }
    },
    agenttransaction() {
      axios.get("/agenttransaction").then(res => {
        console.log(res.data)
        this.agenttranss = res.data.data.data;
      });
    },
    savetransfer(data) {
      data = {
        amount: this.amounttransfer,
        agentid: this.gotagentid,
        methodid:this.methodid,
        currency:this.getcurrency,
      };
      axios
        .post("/savetransfer", data)
        .then(res => {
          // console.log(res.data)
          let code = res.data.code;
          let msg = res.data.msg;
          let data = res.data.data;
          if (code == 200) {
            this.agenttransaction();
          }
          alert(msg);
        })
        .catch(e => {
          console.log(e.response);
        });
    }
  },
  mounted() {
    this.agenttransaction()
  }
};
</script>

<style scoped>
</style>

