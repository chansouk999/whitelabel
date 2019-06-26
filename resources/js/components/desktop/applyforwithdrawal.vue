<template>
  <div>
    <div class="row">
      <div class="col-md-12 col-lg-12" v-if="isLoadCardDone">
        <div class="card">
          <!-- End Navbar -->
          <blockquote class="blockquote text-center">
            <!-- <p class="mb-0">温馨提示：提现不限次数，金额无上限，无手续费，快速到账且短信通知。.</p> -->
            <p
              class="mb-0"
            >Reminder: withdraw unlimited number of times, no limit on the amount, no handling fee, fast arrival and SMS notification. .</p>
          </blockquote>
          <div class="card-header">
            <!-- <h5 class="title">修改密码</h5> -->
            <h5 class="title">change Password</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="d-flex justify-content-center">
                <!-- <label class="control-label col-xs-4">账户总余额：</label> -->
                <label class="control-label col-xs-4">Total account balance：</label>
                <p class="plain-text">
                  <span id="balanceAmount" data-amount="0">{{balance}}</span>
                  <a href="javascript:refreshBalance();" class="refreshbtn">
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                  </a>
                </p>
              </div>
              <a
                href="javascript:void(0);"
                data-tongji-attr="_trackEvent,AG8,主站,零钱转一转,零钱转一转"
                class="change hide"
              ></a>
              <div class="row">
                <div class="col-md-3 pr-md-1 text-right"></div>
                <div class="col-md-9 col-lg-5">
                  <div class="col-md-6 pb-3" v-for="data in ShowCard">
                    <div class="cover atvImg">
                      <div class="atvImg-layer">
                        <img src="assets/img/visa-bg.jpg" alt>
                      </div>
                      <div class="atvImg-layer">
                        <img src="assets/img/visa.png" alt>
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
                          <br>
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
                              >
                              {{data.branch}}
                              <span
                                class="form-check-sign"
                              >
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 pr-md-1 text-right">
                  <!-- <label>提现银行：</label> -->
                  <label>Cash withdrawal bank：</label>
                </div>
                <div class="col-md-9 pr-md-1 col-lg-5">
                  <div class="form-group">
                    <a
                      class="btn btn-warning bg-custome btn-block"
                      data-toggle="collapse"
                      href="#addBank"
                      aria-expanded="false"
                      aria-controls="addBank"
                    >
                      <!-- <i class="fab fa-dribbble float-left"></i>新增银行卡 -->
                      <i class="fab fa-dribbble float-left"></i>Add a bank card
                      <i class="tim-icons icon-simple-add float-right"></i>
                    </a>
                    <div class="collapse" id="addBank">
                      <div class="card card-body">
                        <div class="row">
                          <div class="col-md-6 pb-3" v-for="(data,index) in getcCardinfo">
                            <div class="cover atvImg">
                              <div class="atvImg-layer">
                                <img src="assets/img/visa-bg.jpg" alt>
                              </div>
                              <div class="atvImg-layer">
                                <img src="assets/img/visa.png" alt>
                                <div class="d-flex justify-content-between">
                                  <h2>{{data.methodId}}</h2>
                                  <div class="addreess">
                                    <button
                                      class="btn badge badge-warning"
                                      @click="CardDelete(data.id)"
                                    >
                                      <i class="tim-icons icon-trash-simple"></i>
                                    </button>
                                    <p class="text-white">{{data.registerProvince}}</p>
                                    <p class="text-white">{{data.registerCity}}</p>
                                  </div>
                                  <div class="user_id">{{data.user_id}}</div>
                                  <!-- <p>{{data.user_id}}</p> -->
                                  <br>
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
                                      >
                                      {{data.branch}}
                                      <span
                                        class="form-check-sign"
                                      >
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
                                <img src="assets/img/visa-bg.jpg" alt>
                              </div>
                              <div class="card-body p-bank">
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
                                <img src="assets/img/visa-bg.jpg" alt>
                              </div>
                              <div class="card-body p-bank">
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
                                <img src="assets/img/visa-bg.jpg" alt>
                              </div>
                              <div class="card-body p-bank">
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
                                <img src="assets/img/visa-bg.jpg" alt>
                              </div>
                              <img src="assets/img/bitcoin.png" alt="Card image cap">
                              <div class="card-body p-bank">
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
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 pr-md-1 text-right">
                  <!-- <label>提现金额：</label> -->
                  <label>Withdrawal Amount：</label>
                  <!-- <i class="fab fa-dribbble float-left"></i> -->
                  <!-- <label>提现金额：</label> -->
                </div>
                <div class="col-md-9 pr-md-1 col-lg-5">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      v-model="topupbalannceamount"
                      placeholder="Maximum 100"
                    >
                    <!-- <input type="text" class="form-control" value placeholder="最低提现金额100元 "> -->
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <!-- <button type="button" class="btn btn-fill btn-primary">提 交</button> -->
            <button
              type="button"
              class="btn btn-fill btn-warning bg-custome"
              @click.prevent="topupbalance"
            >Confirm</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { msgmixin } from "../msgmixin.js";
export default {
  mixins: [msgmixin],
  data() {
    return {
      getcCardinfo: [],
      bankAccount: "",
      userName: "",
      isLoadCardDone: false,
      ShowCard: [],
      topupbalannceamount: 0
    };
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
  mounted() {
    this.cardinfo();
    this.ShowCardUse();
  },
  methods: {
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
    },
    ShowCardUse() {
      axios.get("/ShowCardUse").then(res => {
        this.ShowCard = res.data.data;
        this.isLoadCardDone = true;
      });
    },
    topupbalance(code) {
      axios
        .post("topupbalance", {
          amount: this.topupbalannceamount,
          detail: "Withdraw"
        })
        .then(res => {
          // console.log(res.data)
          code = res.data.code;
          console.log(code);
          if (code == 200) {
          }
          alert(res.data.msg);
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    bankInfoClick() {
      $("#bankinfoclick")[0].click();
    }
  }
};
</script>
<style scoped>
</style>

