 <template>
  <div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <ul class="nav nav-pills nav-pills-primary flex-column text-capitalize">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#bankinfo">Bank card information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#usagerule">Usage Rule Settiing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#AnnounceMentImage">AnnounceMentImage</a>
              </li>
              <!--  <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link6">Options</a>
              </li>-->
            </ul>
          </div>
          <div class="col-md-10">
            <div class="tab-content">
              <div class="tab-pane active" id="bankinfo">
                <div class="row mb-4">
                  <div class="col-12">
                    <ul class="nav nav-pills ml-auto nav-pills-primary">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          href="#"
                          data-toggle="modal"
                          data-target="#addcardadmin"
                          @click.prevent="showdata = false"
                        >Add Card</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row d-flex justify-content-center w-75 ml-5">
                  <div
                    class="col-5 bg-card-admin p-0 mr-5"
                    v-for="(data,index) in loopgetadmincard"
                    :key="index"
                  >
                    <div class="row">
                      <div class="col-md-6 px-0">
                        <div class="card m-0 y-0">
                          <div
                            class="card-body bg-baninfo"
                            style="background-image: url(assets/img/visa-bg.jpg);"
                          >
                            <h2 class="text-white title-branch">{{data.branch}}</h2>
                            <div class="addreess">
                              <p class="text-white">{{JSON.parse(data.address).province}}</p>
                              <p class="text-white">{{JSON.parse(data.address).city}}</p>
                            </div>

                            <div class="user_id text-white">{{data.bankAccount}}</div>
                            <div class="d-flex justify-content-between">
                              <p class="card-userName text-white">{{data.owner}}.</p>
                              <p class="card-bankAccount text-white">{{data.bankname}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="info-area info-horizontal">
                          <div class="icon icon-light mt-0">
                            <i class="tim-icons icon-wifi mt-3"></i>
                          </div>
                          <div class="description">
                            <h3 class="info-title my-0">Details</h3>
                            <p class="description">Added by :: {{data.addedby}}</p>
                            <p class="description">Last Edit ::{{data.updated_at}}</p>
                            <p class="description">Last Edit by ::</p>
                            <p class="description">Usage ::</p>
                          </div>
                        </div>
                        <div class="px-4">
                          <button
                            class="btn btn-primary btn-sm btn-icon edit-pencil"
                            @click.prevent="Editcard(data.id)"
                          >
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                          <button
                            class="btn btn-danger btn-sm btn-icon edit-trash"
                            @click.prevent="DeleteCard(data.id)"
                          >
                            <i class="tim-icons icon-trash-simple"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6"></div>
                </div>
              </div>
              <div class="tab-pane" id="usagerule">
                <div class="row d-flex justify-content-center">
                  <button
                    class="btn font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6 px-4 mx-4"
                  >
                    <div class="font-icon-detail">
                      <i class="tim-icons icon-minimal-up"></i>
                      <p>above $1000</p>
                    </div>
                  </button>
                  <button
                    class="btn font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6 px-4 mx-4"
                  >
                    <div class="font-icon-detail">
                      <i class="tim-icons icon-minimal-down"></i>
                      <p>below $1000</p>
                    </div>
                  </button>
                </div>
                <div class="row">
                  <button class="btn btn-dribbble" @click="addrule()">
                    <i class="tim-icons icon-simple-add"></i>Add Rule
                  </button>
                </div>
              </div>

              <!-- backherer -->
              <div class="tab-pane" id="AnnounceMentImage">
                <div class="row">
                  <Button @click="refresh">Refresh</Button>
                  <!-- v-for="data in carousel" -->
                  <div class="col-md-2" v-for="(data,index) in carousel " :key="index">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail">
                        <img height="230" :src="'careousel/'+data.carousel" alt="..." />
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail"></div>
                      <div>
                        <span class="btn btn-raised btn-round btn-dark btn-file">
                          <span class="fileinput-new">Change image</span>
                          <span class="fileinput-exists">Change</span>
                          <input type="file" name="..." @change="selectimg" />
                        </span>
                        <a
                          href="#pablo"
                          class="btn btn-success btn-round fileinput-exists sttaftersave"
                          @click="saveimg(data.id)"
                        >
                          <i class="fa fa-times"></i> Save
                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-md-2"
                    v-for="(data,index) in imageCar"
                    v-if="index <= imgempty"
                    :key="index"
                  >
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail">
                        <img height="230" :src="data.url" alt="..." />
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail"></div>
                      <div>
                        <span class="btn btn-raised btn-round btn-dark btn-file">
                          <span class="fileinput-new">Change image</span>
                          <span class="fileinput-exists" data-dismiss="fileinput">Remove</span>
                          <input type="file" @change="selectimg" />
                        </span>
                        <a
                          href="#pablo"
                          class="btn btn-success btn-round fileinput-exists sttaftersave"
                          @click="saveimg(id)"
                        >
                          <i class="fa fa-times"></i> Save
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addcard"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-cutome-admin">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Rule</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-2">
                <label class="text-dark">Level</label>
                <select
                  class="selectpicker"
                  data-style="select-with-transition"
                  title="Level"
                  data-size="7"
                >
                  <option value="15">In</option>
                  <option value="16">under</option>
                  <option value="17">above</option>
                  <option value="18">not in</option>
                </select>
              </div>
              <div class="col-2">
                <label class="text-dark"></label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  multiple
                  title="1"
                  data-size="7"
                  tabindex="-98"
                >
                  <option value="15">1</option>
                  <option value="16">2</option>
                  <option value="17">3</option>
                  <option value="18">4</option>
                </select>
              </div>
              <div class="col-2">
                <label class="text-dark">Localted</label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  data-size="7"
                  tabindex="-98"
                  v-model="localted"
                >
                  <option value="in">in</option>
                  <option value="inorin">in or in</option>
                  <option value="inAndNotin">in and not in</option>
                </select>
              </div>
              <div class="col-3">
                <label class="text-dark"></label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  title="Thailand"
                  data-size="7"
                  tabindex="-98"
                >
                  <option value="15">China</option>
                  <option value="16">USA</option>
                  <option value="17">Thailand</option>
                </select>
              </div>
              <div class="col-3" v-show="localted !=='in'">
                <label class="text-dark"></label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  title="China"
                  data-size="7"
                  tabindex="-98"
                >
                  <option value="15">China</option>
                  <option value="16">USA</option>
                  <option value="17">Thailand</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <label class="text-dark">Amoute</label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  multiple
                  title="ranges from to"
                  data-size="7"
                  tabindex="-98"
                >
                  <option value="15">Reach</option>
                  <option value="16">Above</option>
                  <option value="17">Equal to</option>
                  <option value="17">Other than</option>
                  <option value="17">ranges from to</option>
                </select>
              </div>
              <div class="col-2">
                <label class="text-dark"></label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  multiple
                  title="$ 100"
                  data-size="7"
                  tabindex="-98"
                >
                  <option value="15">$ 100</option>
                  <option value="15">$ 200</option>
                  <option value="15">$ 300</option>
                </select>
              </div>
              <div class="col-2">
                <label class="text-dark"></label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  multiple
                  title="$ 100"
                  data-size="7"
                  tabindex="-98"
                >
                  <option value="15">$ 100</option>
                  <option value="15">$ 200</option>
                  <option value="15">$ 300</option>
                </select>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-3">
                <label class="text-dark">Create rule name</label>
              </div>
              <div class="col-md-7">
                <div class="form-group">
                  <input
                    class="form-control"
                    id="rulename"
                    v-model="rulename"
                    type="text"
                    placeholder="Rule name"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button
              type="submit"
              class="btn btn-primary addcard"
              @click.prevent="confrim_addrule()"
            >Confirm</button>
          </div>
        </div>
      </div>
    </div>
    <!-- msg -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="addcardadmin"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form class="form-horizontal" method="post" action="addcard">
            <div class="modal-header">
              <h5 class="modal-title" v-if="showdata == false">Add a new bank card</h5>
              <h5 class="modal-title" v-else>Card AdminID :{{showid}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <label class="col-md-3 col-form-label">Name on Card</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="bankname"
                            type="text"
                            name="namecard"
                            class="form-control"
                            placeholder="Name on Card..."
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Bank Account</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="bankAccount"
                            type="text"
                            name="cardNumber"
                            class="form-control"
                            placeholder="Card Number..."
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Owner</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="owner"
                            type="text"
                            name="owner"
                            class="form-control"
                            placeholder="Owner Card..."
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Registered Province</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="province"
                            type="text"
                            name="registerProvince"
                            class="form-control"
                            placeholder="Registered Province..."
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Registered City</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="city"
                            type="text"
                            name="registedCity"
                            class="form-control"
                            placeholder="Registered City..."
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Branch</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="branch"
                            type="text"
                            name="branch"
                            class="form-control"
                            placeholder="Branch..."
                            required
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- {{name}}
            {{cardnumber}}
            {{province}}
            {{city}}
            {{branch}}-->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button
                type="submit"
                class="btn btn-primary addcard"
                @click.prevent="addcardadmin()"
              >Add Card</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
 <script>
export default {
  data() {
    return {
      showdata: false,
      showid: "",
      getEdit: [],
      localted: "inorin",
      rulename: "",
      loopgetadmincard: [],
      transferimganme: null,
      postioned: null,
      transimg: [],
      imgempty: 0,
      carousel: [],
      bankname: "",
      bankAccount: "",
      owner: "",
      province: "",
      city: "",
      branch: "",
      imageCar: [
        { url: "assets/img/emptyimg.png" },
        { url: "assets/img/emptyimg.png" },
        { url: "assets/img/emptyimg.png" },
        { url: "assets/img/emptyimg.png" },
        { url: "assets/img/emptyimg.png" }
      ]
    };
  },
  mounted() {
    this.Carousel();
    this.getadmincarddata();
  },
  watch: {},
  methods: {
    Editcard(id) {
      this.showdata = true;
      $("#addcardadmin").modal("show");
      axios
        .get("sendeditcard/" + id)
        .then(res => {
          this.getEdit = res.data;
          this.showid = this.getEdit[0].id;
          this.bankname = this.getEdit[0].bankname;
          this.bankAccount = this.getEdit[0].bankAccount;
          this.owner = this.getEdit[0].owner;
          this.province = JSON.parse(this.getEdit[0].address).province;
          this.city = JSON.parse(this.getEdit[0].address).city;
          this.branch = this.getEdit[0].branch;
          console.log(res.data);
        })
        .catch(e => {
          console.log9(e.response);
        });
    },
    DeleteCard(id) {
      this.$swal({
        title: "Delete ?",
        text: "Do you want to Delete",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, Delete!",
        cancelButtonText: "No, keep it",
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false,
        allowOutsideClick: false
      }).then(res => {
        console.log(res);
        if (res.dismiss === "cancel") {
          swal({
            title: "Cancelled",
            text: "Your keep going to play :)",
            type: "error",
            confirmButtonClass: "btn btn-primary ",
            buttonsStyling: false
          }).catch(swal.noop);
        } else {
          axios
            .post("deletecard/" + id)
            .then(res => {
              this.getadmincarddata();
              console.log(res);
            })
            .catch(e => {
              console.log(e.response);
            });
          // window.location.href = "deletecard/" + id;
          swal({
            title: "Success!",
            text: "Delete the card is successfully",
            type: "success",
            confirmButtonClass: "btn btn-success",
            buttonsStyling: false,
            timer: 2000
          });
        }
      });
    },
    getadmincarddata() {
      axios
        .get("/getadmincard")
        .then(res => {
          this.loopgetadmincard = res.data;
          console.log("!!!!!!!!!!!!!!!!!!!!!!!");
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    addrule() {
      $("#addcard").modal("show");
    },
    addcardadmin() {
      this.showdata = false;
      let vm = this;
      let data = {
        bankname: vm.bankname,
        bankAccount: vm.bankAccount,
        owner: vm.owner,
        province: vm.province,
        city: vm.city,
        branch: vm.branch
      };
      if (
        data.bankname == "" ||
        data.bankAccount == "" ||
        data.owner == "" ||
        data.province == "" ||
        data.city == "" ||
        data.branch == ""
      ) {
        this.$swal({
          type: "warning",
          title: "Please Fill in it",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success",
          html: "Please check the box that you fill in"
        });
      } else {
        // alert("Your are right");
        axios
          .post("/addcardmin", data)
          .then(res => {
            console.log(res.data);
            if (res.data.code == 200) {
              this.getadmincarddata();
              // HIDE
              $("#addcardadmin").modal("hide");
              this.$swal({
                type: "success",
                title: res.data.msg,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                html: "Please check the box that you fill in",
                timer: 1000
              });
            }
            if (res.data.code == 100) {
              this.$swal({
                type: "warning",
                title: res.data.msg,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                html: "Please check the box that you fill in",
                timer: 1000
              });
            }
          })
          .catch(er => {
            console.log(er.res);
          });
      }
    },
    saveimg(id) {
      alert(localStorage.getItem("name"));
      let send = "";

      if (id == "undefined") {
        send = axios.post;
      } else {
        send = axios.put;
      }
      console.log(id);
      send("Carousel/" + id, { img: this.transimg })
        .then(res => {
          console.log(res.data);
          let code = res.data.code;
          if (code == 200) {
            this.Carousel();
            $(".sttaftersave").attr("data-dismiss", "fileinput");
          }
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    selectimg(e, index) {
      let vm = this;
      vm.transimg = [];
      const files = e.target.files[0];
      const img = new Image(),
        reader = new FileReader();
      reader.onload = e => vm.transimg.push(e.target.result);
      reader.readAsDataURL(files);
      vm.transferimganme = files.name;
    },
    refresh() {
      this.Carousel();
    },
    Carousel() {
      axios
        .get("Carousel")
        .then(res => {
          let data = res.data;
          this.postioned = data.length + 1;
          this.imgempty = 4 - data.length;
          this.carousel = res.data;
          if (isLocalStorage()) {
            localStorage.setItem("name", "Souksavanh");
          }
        })
        .catch(er => {
          console.log(er.response);
        });
    }
  }
};
</script>

 <style scoped>
</style>
