<template>
  <div>
    <div class="container Openbankinfo" ref="Openbankinfo">
      <div class="row mt-5">
        <div class="col-lg-3 col-md-6" v-for="(data,index) in getcCardinfo" :key="index">
          <div class="card card-stats">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h2>{{data.methodId}}</h2>
                <div class="addreess">
                  <p>{{data.registerProvince}}</p>
                  <p>{{data.registerCity}}</p>
                </div>
              </div>
              <p class="d-flex justify-content-center">{{data.user_id}}</p>
              <div class="d-flex justify-content-between">
                <p class="card-userName">{{ data.userName | userName}}.</p>
                <p class="card-bankAccount">{{ data.bankAccount | bankAccount}}</p>
              </div>
            </div>
            <div class="card-footer">
              <hr />
              <button class="btn btn-icon btn-dribbble float-left" @click="CardDelete(data.id)">
                <i class="tim-icons icon-trash-simple"></i>
              </button>
              <div class="form-check form-use float-right bg-check">
                <label class="form-check-label text-white">
                  <input
                    class="form-check-input checkuse"
                    type="checkbox"
                    :name="'usecard'+data.id"
                    @click="useCard(data.id)"
                    :disabled="data.status=='use'"
                    :checked="data.status=='use'"
                  />
                  {{data.branch}}
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" v-if="getcCardinfo.length <= 0">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="info-icon text-center icon-warning">
                    <i class="tim-icons icon-credit-card"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <hr />
              <div class="stats">
                <button class="btn btn-warning" data-toggle="modal" data-target="#addnewcard">
                  <i class="tim-icons icon-simple-add"></i> Add Card
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" v-if="getcCardinfo.length <= 1">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="info-icon text-center icon-warning">
                    <i class="tim-icons icon-credit-card"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <hr />
              <div class="stats">
                <button class="btn btn-warning" data-toggle="modal" data-target="#addnewcard">
                  <i class="tim-icons icon-simple-add"></i> Add Card
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" v-if="getcCardinfo.length <= 2">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="info-icon text-center icon-warning">
                    <i class="tim-icons icon-credit-card"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <hr />
              <div class="stats">
                <button class="btn btn-warning" data-toggle="modal" data-target="#addnewcard">
                  <i class="tim-icons icon-simple-add"></i> Add Card
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-sm-5" v-if="getcCardinfo.length <= 3">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="info-icon text-center icon-warning">
                    <i class="tim-icons icon-credit-card"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <hr />
              <div class="stats">
                <button class="btn btn-warning" data-toggle="modal" data-target="#addnewcard">
                  <i class="tim-icons icon-simple-add"></i> Add Card
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addnewcard"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form class="form-horizontal" method="post" action="addcard">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add a new bank card</h5>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-body p-0">
              <div class="col-md-12 p-0">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="row">
                      <label class="col-md-3 col-form-label">Name on Card</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="name"
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
                      <label class="col-md-3 col-form-label">Card Number</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            v-model="cardnumber"
                            type="email"
                            name="cardNumber"
                            class="form-control"
                            placeholder="Card Number..."
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Bank</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select
                            class="selectpicker"
                            data-style="select-with-transition"
                            title="Bank Account"
                            data-size="7"
                            v-model="bankAccount"
                          >
                            <option value="AL">ALipay</option>
                            <option value="BC">BCELOne</option>
                          </select>
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
              <button class="btn btn-danger" data-dismiss="modal">
                <i class="tim-icons icon-simple-remove"></i> Cancel
              </button>
              <button class="btn btn-success" @click.prevent="addcard()">
                <i class="tim-icons icon-check-2"></i> Save
              </button>
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
      checked: true,
      name: "",
      cardnumber: "",
      province: "",
      city: "",
      bankAccount: "",
      userName: "",
      branch: "",
      gotcardinfo: [],
      getcCardinfo: []
    };
  },
  props: ["bankinfo"],
  mounted() {
    this.getcardinfo();
    this.cardinfo();
  },
  filters: {
    bankAccount(value) {
      let val = value.toString();
      let valLength = val.length;
      let a1 = val[valLength - 2];
      let a2 = val[valLength - 1];
      let dot = "";
      for (let i = 0; i < valLength - 2; i++) {
        dot = dot + "*";
      }
      let result = dot + "" + a1 + "" + a2;
      return result;
    },

    userName(value) {
      let val = value.toString();
      let valLength = val.length;
      let a1 = val[0];
      let a2 = val[valLength - 1];
      let dot = "";
      for (let i = 0; i < valLength - 1; i++) {
        dot = dot + "*";
      }
      let result = a1 + dot;
      return result;
    }
  },
  methods: {
    Offbankinfo() {
      this.$refs.Openbankinfo.style.width = "0%";
    },
    useCard(data) {
      let name = $(".checkuse").attr("name");
      // alert(name);
      axios
        .post("/useCard", { id: data })
        .then(res => {
          console.log(res);
          if (res.data.code == 200) {
            this.cardinfo();
          }
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    CardDelete(id) {
      this.$swal({
        title: "Deleted?",
        text: "Are you sure need to delete this card",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false,
        allowOutsideClick: false
      })
        .then(res => {
          console.log(res);
          // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
          if (res.dismiss === "cancel") {
            swal({
              title: "Cancelled",
              text: "Your card cancelled to delete)",
              type: "error",
              confirmButtonClass: "btn btn-warning",
              timer: 1000,
              buttonsStyling: false
            }).catch(swal.noop);
          } else {
            axios
              .post("/CardDelete/" + id)
              .then(res => {
                console.log(res);
              })
              .catch(e => {
                console.log(e.response);
              });
            // window.location.href = "/logout"; //Will logout
            swal({
              title: "Success!",
              text: "We hope to see you as soon.",
              type: "success",
              confirmButtonClass: "btn btn-success",
              timer: 1000,
              buttonsStyling: false
            }).catch(swal.noop);
            this.cardinfo();
          }
        })
        .catch(swal.noop);
      // alert(id, index);
    },
    getcardinfo() {
      axios.get("/getcardinfo").then(res => {
        console.log("PPPPPPPPP");
        console.log(res.data);
        console.log("PPPPPPPPP");
        this.gotcardinfo = res.data.data;
      });
    },
    addcard() {
      let vm = this;
      let data = {
        name: vm.name,
        cardnumber: vm.cardnumber,
        province: vm.province,
        city: vm.city,
        branch: vm.branch,
        bankAccount: vm.bankAccount
      };
      // console.log(data);
      if (
        data.name == "" ||
        data.bankAccount == "" ||
        data.cardnumber == "" ||
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
          .post("/addcard", data)
          .then(res => {
            console.log(res.data);
            if (res.data.code == 200) {
              this.cardinfo();
              // HIDE
              $("#addnewcard").modal("hide");
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
    cardinfo() {
      axios
        .get("/getcardinfo")
        .then(res => {
          this.getcCardinfo = res.data.data;
        })
        .catch(e => {
          console.log(e.response);
        });
    }
  }
};
</script>
<style scoped>
.dropdown-menu:before {
  border-bottom: none;
  border-right: none;
  border-left: none;
}
.form-control {
  border-left: 0;
  border-right: 0;
  border-top: 0;
  border-radius: 0;
}
.white-content .input-group-focus .input-group-prepend .input-group-text,
.white-content .input-group-focus .input-group-append .input-group-text,
.white-content .input-group-focus .form-control {
  border-color: #f44336;
}
</style>

