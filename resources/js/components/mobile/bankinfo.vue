<template>
  <div>
    <div class="container" v-if="isLoadCardDone">
      <div class="row">
        <div class="col-md-10"></div>
        <div class="row ml-10">
          <div class="col-md-6 pb-3" v-for="(data,index) in getcCardinfo">
            <div class="cover atvImg">
              <div class="atvImg-layer">
                <img src="assets/img/visa-bg.jpg" alt />
              </div>
              <div class="atvImg-layer">
                <img src="assets/img/visa.png" alt />
                <div class="d-flex justify-content-between">
                  <h2>{{data.methodId}}</h2>
                  <div class="addreess">
                    <button class="btn badge badge-warning" @click="CardDelete(data.id)">
                      <i class="tim-icons icon-trash-simple"></i>
                    </button>
                    <p class="text-white">{{data.registerProvince}}</p>
                    <p class="text-white">{{data.registerCity}}</p>
                  </div>
                  <div class="user_id">{{data.user_id}}</div>
                  <!-- <p>{{data.user_id}}</p> -->
                  <br />
                  <div class="d-flex justify-content-between">
                    <p class="card-userName">{{ data.userName | userName}}.</p>
                    <p class="card-bankAccount">{{ data.bankAccount | bankAccount}}</p>
                  </div>
                  <div class="form-check form-use">
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
          </div>
          <div class="col-md-6 pb-3 pr-3" v-if="getcCardinfo.length <= 0">
            <div class="card border-bankinfo">
              <div class="atvImg-layer">
                <img src="assets/img/visa-bg.jpg" alt />
              </div>
              <div class="card-body m-ss p-bank">
                <a
                  href="#"
                  class="btn btn-primary bg-custome"
                  data-toggle="modal"
                  data-target="#addnewcard"
                >
                  <i class="tim-icons icon-simple-add"></i> 添加银行卡
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-3 pl-3" v-if="getcCardinfo.length <= 1">
            <div class="card border-bankinfo">
              <div class="atvImg-layer">
                <img src="assets/img/visa-bg.jpg" alt />
              </div>
              <div class="card-body m-ss p-bank">
                <a
                  href="#"
                  class="btn btn-primary bg-custome"
                  data-toggle="modal"
                  data-target="#addnewcard"
                >
                  <i class="tim-icons icon-simple-add"></i> 添加银行卡
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-3 pr-3" v-if="getcCardinfo.length <= 2">
            <div class="card border-bankinfo">
              <div class="atvImg-layer">
                <img src="assets/img/visa-bg.jpg" alt />
              </div>
              <div class="card-body m-ss p-bank">
                <a
                  href="#"
                  class="btn btn-primary bg-custome"
                  data-toggle="modal"
                  data-target="#addnewcard"
                >
                  <i class="tim-icons icon-simple-add"></i> 添加银行卡
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-3 pl-3" v-if="getcCardinfo.length <= 3">
            <div class="card border-bankinfo">
              <div class="atvImg-layer">
                <img src="assets/img/visa-bg.jpg" alt />
              </div>
              <img src="assets/img/bitcoin.png" alt="Card image cap" />
              <div class="card-body m-ss p-bank">
                <a
                  href="#"
                  class="btn btn-primary bg-custome"
                  data-toggle="modal"
                  data-target="#addnewcard"
                >
                  <i class="tim-icons icon-simple-add"></i> 添加银行卡
                </a>
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
            <div class="modal-body">
              <div class="col-md-10">
                <div class="card">
                  <div class="card-body">
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
                            id="inputState"
                            v-model="bankAccount"
                            name="bankAccount"
                            class="form-control"
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
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button
                type="submit"
                class="btn btn-primary addcard"
                @click.prevent="addcard()"
              >Save & Continue</button>
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
      isLoadCardDone: false,
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
          this.isLoadCardDone = true;
        })
        .catch(e => {
          console.log(e.response);
        });
    }
  }
};
</script>
<style scoped>
/* img {
  max-width: 77% !important ;
  border-radius: 0.2857rem;
}
.m-ss {
  margin-top: -31%;
  padding: 24px;
} */
.atvImg-layer {
    position: absolute;
    top: 0;
}
.u-wrap .bg-secondary .u-content .container .p-bank {
    text-align: center;
    justify-content: center;
    top: 32%;
    padding: 20%;
}
.u-content .container .card .atvImg-layer img, .u-content .collapse .card .atvImg-layer img {
    width: 100%;
    background-repeat: no-repeat;
    background-size: 100%;
    content: "";
    height: 100%;
    position: relative;
    border-radius: 10px;
    box-shadow: 0px 4px 11px 0px #000;
}
.container .card.border-bankinfo img {
    width: 10%;
    border-top-left-radius: calc(0.2857rem - 0.0625rem);
    border-top-right-radius: calc(0.2857rem - 0.0625rem);
    left: 0;
    position: absolute;
}
img {
    vertical-align: middle;
    border-style: none;
}
.ml-25 {
    width: 44%;
    margin-left: 25% !important;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.pb-3, .py-3 {
    padding-bottom: 9rem !important;
    padding-top: 14px;
}
.m-ss{
  margin: 78px 0px -79px 0px;
}
</style>

