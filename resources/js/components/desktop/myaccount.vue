<template>
  <div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 px-0">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-header bg-custome">
                <h3 class="card-title text-white">Profile</h3>
              </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img
                    class="profile-user-img img-fluid img-circle"
                    src="/assets/img/emilyz.jpg"
                    alt="User profile picture"
                  />
                </div>

                <h3 class="profile-username text-center">{{ user_id }}</h3>

                <p class="text-muted text-center">{{name}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item d-flex justify-content-between">
                    <b>总余额</b>
                    <a class="float-right">{{formatToPrice(balance)}}</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <b>最近登录时间</b>
                    <a class="float-right">{{ login_at }}</a>
                  </li>
                  <a href="#">
                    <li class="list-group-item d-flex justify-content-between">
                      <b>立即充值</b>
                      <a class="float-right">15: 05 : 0111</a>
                    </li>
                  </a>
                  <a href="#">
                    <li class="list-group-item d-flex justify-content-between">
                      <b>申请提现</b>
                      <a class="float-right">15: 05 : 0111</a>
                    </li>
                  </a>
                </ul>

                <a
                  href="#"
                  class="btn btn-primary bg-custome btn-block"
                  data-toggle="modal"
                  data-target="#changepwdmodal"
                >
                  <b>Change Password</b>
                </a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9 pr-0">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      href="#activity"
                      data-toggle="tab"
                    >My Level Performance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="col-lg-12">
                      <p>我的会员星级 (加入尊贵的VIP行列,坐享星级礼遇、超级特权，让您乐在源源不绝的惊喜优惠中)</p>
                      <app-chart
                        typechart="bar"
                        backgroundcolor="transparent"
                        bordercolor="#ff6c00"
                      ></app-chart>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <div class="header text-center">
                      <h3 class="title">Timeline</h3>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-timeline card-plain">
                          <div class="card-body">
                            <ul class="timeline">
                              <li
                                class="timeline-inverted"
                                v-for="(data,index) in playerRecord"
                                v-if="index % 2 == 0 "
                                :key="index"
                              >
                                <div class="timeline-badge danger">
                                  <i class="tim-icons icon-planet"></i>
                                </div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <span class="badge badge-pill badge-danger">Some Title</span>
                                  </div>
                                  <div class="timeline-body">
                                    <p>{{ JSON.parse(data.detail).event }}</p>
                                  </div>
                                  <h6 class="text-dark">
                                    <i class="ti-time"></i>
                                    {{data.created_at}}
                                  </h6>
                                </div>
                              </li>
                              <li v-else>
                                <div class="timeline-badge danger">
                                  <i class="tim-icons icon-planet"></i>
                                </div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <span class="badge badge-pill badge-danger">Some Title</span>
                                  </div>
                                  <div class="timeline-body">
                                    <p>{{ JSON.parse(data.detail).event }}</p>
                                  </div>
                                  <h6>
                                    <i class="ti-time"></i>
                                    {{data.created_at}}
                                  </h6>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <div class="header text-center">
                      <h3 class="title">Settings</h3>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="title">Edit Profile</h5>
                          </div>
                          <div class="card-body">
                            <form>
                              <div class="row">
                                <div class="col-md-5 pr-md-1">
                                  <div class="form-group">
                                    <label>Company (disabled)</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      disabled
                                      value="Creative Code Inc."
                                    />
                                  </div>
                                </div>
                                <div class="col-md-3 px-md-1">
                                  <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="michael23" />
                                  </div>
                                </div>
                                <div class="col-md-4 pl-md-1">
                                  <div class="form-group">
                                    <label>Email address</label>
                                    <input
                                      type="email"
                                      class="form-control"
                                      placeholder="mike@email.com"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 pr-md-1">
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="Mike" />
                                  </div>
                                </div>
                                <div class="col-md-6 pl-md-1">
                                  <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="Andrew" />
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Address</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Home Address"
                                      value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4 pr-md-1">
                                  <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" value="Mike" />
                                  </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                  <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" value="Andrew" />
                                  </div>
                                </div>
                                <div class="col-md-4 pl-md-1">
                                  <div class="form-group">
                                    <label>Postal Code</label>
                                    <input
                                      type="number"
                                      class="form-control"
                                      placeholder="ZIP Code"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label>About Me</label>
                                    <textarea rows="4" cols="80" class="form-control">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card card-user">
                          <div class="card-body">
                            <p class="card-text"></p>
                            <div class="author">
                              <div class="block block-one"></div>
                              <div class="block block-two"></div>
                              <div class="block block-three"></div>
                              <div class="block block-four"></div>
                              <a href="javascript:void(0)">
                                <img class="avatar" src="/assets/img/emilyz.jpg" alt="..." />
                                <h5 class="title">Mike Andrew</h5>
                              </a>
                              <p class="description">Ceo/Co-Founder</p>
                            </div>
                            <div
                              class="card-description"
                            >Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...</div>
                          </div>
                          <div class="card-footer">
                            <div class="button-container">
                              <button
                                href="javascript:void(0)"
                                class="btn btn-icon btn-round btn-facebook"
                              >
                                <i class="fab fa-facebook"></i>
                              </button>
                              <button
                                href="javascript:void(0)"
                                class="btn btn-icon btn-round btn-twitter"
                              >
                                <i class="fab fa-twitter"></i>
                              </button>
                              <button
                                href="javascript:void(0)"
                                class="btn btn-icon btn-round btn-google"
                              >
                                <i class="fab fa-google-plus"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      <!-- model -->
      <!-- Classic Modal -->
      <div
        class="modal fade"
        id="changepwdmodal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
              <h6 class="title title-up">Change Password</h6>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <form action="#" v-if="currentpwdcode==300">
                  <label>Enter Your Old Password</label>
                  <div class="form-group">
                    <input
                      type="password"
                      id="autofocus"
                      class="form-control chnagepwd"
                      placeholder="old password"
                      v-model="currentpassword"
                      required
                      autofocus
                    />
                  </div>
                </form>
                <form action="#" v-if="currentpwdcode==200">
                  <label>New Password</label>
                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control chnagepwd"
                      placeholder="Password"
                      v-model="newpassword"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control chnagepwd"
                      placeholder="Confirm password"
                      v-model="cfnewpassword"
                    />
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-primary bg-custome"
                @click="changepwd"
                v-if="oldpwd200==false"
              >Next Step</button>
              <button
                type="button"
                class="btn btn-primary bg-custome"
                @click="savenewpwd"
                v-if="oldpwd200==true"
              >Save</button>
              <button
                type="button"
                class="btn btn-primary bg-custome"
                @click="showpassword(method='show')"
                v-if="showpwd==false"
              >Show password</button>
              <button
                type="button"
                class="btn btn-primary bg-custome"
                @click="showpassword(method='hide')"
                v-if="showpwd==true"
              >hide password</button>
              <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
            </div>
          </div>
        </div>
      </div>
      <!--  End Modal -->
    </div>
  </div>
</template>
<script>
import chartJS from "./chart-bar";
export default {
  data() {
    return {
      playerRecord: [],
      oldpwd200: false,
      showpwd: false,
      newpassword: null,
      cfnewpassword: null,
      currentpassword: null,
      currentpwdcode: 300,
      rescode: null,
      resmsg: null,
      resdata: null,
      methodid: null,
      bankccount: null,
      cardnumber: null,
      branch: null,
      province: null,
      city: null,
      id: null,
      user_id: null,
      provider_name: null,
      balance: null,
      pro_id: null,
      login_at: null,
      name: null,
      email: null
    };
  },
  components: {
    "app-chart": chartJS
  },
  mounted() {
    this.userdata();
    this.GetPlayerRecore();
  },
  methods: {
    formatToPrice(value) {
      return `$ ${Number(value)
        .toFixed(2)
        .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")}`;
    },
    showNotification(from, align) {
      let color = Math.floor(Math.random() * 4 + 1);
      $.notify(
        {
          icon: "tim-icons icon-bell-55",
          message: "Please try old password first"
        },
        {
          type: type[color],
          timer: 1000,
          placement: {
            from: from,
            align: align
          }
        }
      );
    },
    showpassword(method) {
      if (method == "show") {
        this.showpwd = true;
        $(".chnagepwd").attr("type", "email");
      } else {
        this.showpwd = false;
        $(".chnagepwd").attr("type", "password");
      }
    },
    savenewpwd() {
      let data = {
        newpassword: this.newpassword,
        cfnewpassword: this.cfnewpassword,
        code: 200
      };
      if (data.newpassword !== data.cfnewpassword) {
        alert("Password not match");
      } else {
        axios
          .post("reqchangepwd", data)
          .then(res => {
            console.log(res.data);
            this.rescode = res.data.code;
            this.resmsg = res.data.msg;
            this.resdata = res.data.data;
            alert(this.resmsg);
            if (this.rescode == 200) {
              alert("You need to login again");
              location.href = "/login";
            }
          })
          .catch(e => {
            console.log(e.response);
          });
      }
    },
    changepwd() {
      axios
        .post("reqchangepwd", { pwd: this.currentpassword, code: 202 })
        .then(res => {
          console.log(res.data);
          if (this.currentpassword == null) {
            this.showNotification("top", "right");
            element.required = true;
            if (!("autofocus" in document.createElement("input"))) {
              document.getElementById("autofocus").focus();
            }
          } else {
            this.rescode = res.data.code;
            this.resmsg = res.data.msg;
            this.resdata = res.data.data;
          }
          alert(this.resmsg);
          if (this.rescode == 200) {
            this.oldpwd200 = true;
            this.currentpwdcode = 200;
          }
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    savecarddetail(data, code = 200) {
      let vm = this;
      data = {
        bankccount: vm.bankccount,
        cardnumber: vm.cardnumber,
        branch: vm.branch,
        province: vm.province,
        city: vm.city,
        method: vm.methodid,
        desc: "no data",
        code: code
      };
      axios
        .post("savecarddetail", data)
        .then(res => {
          let code = res.data.code;
          console.log(res.data);
          if (code == 200) {
            alert("success");
          }
          if (code == 300) {
            alert("Query Error");
          }
          if (code == 100) {
            if (confirm(res.data.msg + "Do You wanna edit?")) {
              data.code = 202;
              this.savecarddetail(data, (code = 202));
              console.log(data);
            }
          }
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    refresh() {
      this.userdata();
    },
    userdata() {
      axios
        .get("/userdetaildata")
        .then(res => {
          console.log(res.data[0]);
          this.id = res.data[0].id;
          this.user_id = res.data[0].user_id;
          this.provider_name = res.data[0].provider_name;
          this.balance = res.data[0].userBalance;
          this.pro_id = res.data[0].pro_id;
          this.name = res.data[0].name;
          this.email = res.data[0].email;
          this.login_at = res.data[0].created_at;
          $(".id").val(this.id);
          $(".provider_name").val(this.provider_name);
          $(".balance").val(this.balance);
          $(".pro_id").val(this.pro_id);
          $(".name").val(this.name);
          $(".email").val(this.email);
        })
        .catch(er => {
          console.log(er.res);
        });
    },
    GetPlayerRecore() {
      axios.get("/getPlayerRecord").then(res => {
        console.log(res.data);
        this.playerRecord = res.data;
      });
    }
  }
};
</script>
<style scoped>
</style>

