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
              <div class="card-header bg-primary">
                <h3 class="card-title text-white">Profile</h3>
              </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img
                    class="profile-user-img img-fluid img-circle"
                    src="/assets/img/emilyz.jpg"
                    alt="User profile picture"
                  >
                </div>

                <h3 class="profile-username text-center">{{ email }}</h3>

                <p class="text-muted text-center">{{name}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item d-flex justify-content-between">
                    <b>总余额</b>
                    <a class="float-right">${{balance}}</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <b>Following</b>
                    <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <b>Friends</b>
                    <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block">
                  <b>刷新额度</b>
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header bg-primary">
                <h3 class="card-title text-white">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong>
                  <i class="fa fa-clock mr-1"></i>最近登录时间:
                </strong>

                <p class="text-muted">{{ login_at }}</p>

                <hr>

                <strong>
                  <i class="fa fa-map-marker mr-1"></i> 您的周有效投注额 已超过用户
                </strong>

                <p class="text-custome font-weight-bolder">0%</p>

                <hr>

                <strong>
                  <i class="fa fa-pencil mr-1"></i> 总余额
                </strong>

                <p class="text-custome font-weight-bolder">${{balance}}</p>
                <a href class="btn btn-primary btn-block">
                  <i class="tim-icons icon-refresh-02"></i>刷新额度
                </a>
                <hr>id
                <!-- user_id
provider_name
balance
pro_id
name
email
                login_at-->
                <strong>
                  <i class="fa fa-pencil mr-1"></i> 总余额
                </strong>
                <p class="text-custome font-weight-bolder">${{balance}}</p>
                <a href class="btn btn-primary">
                  <i class="tim-icons icon-badge"></i>立即充值
                  <span>Deposit Now</span>
                </a>
                <a href class="btn btn-primary">
                  <i class="tim-icons icon-credit-card"></i>申请提现
                  <span>Withdraw Now</span>
                </a>
              </div>
              <!-- /.card-body -->
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
                              <li class="timeline-inverted">
                                <div class="timeline-badge danger">
                                  <i class="tim-icons icon-planet"></i>
                                </div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <span class="badge badge-pill badge-danger">Some Title</span>
                                  </div>
                                  <div class="timeline-body">
                                    <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                                  </div>
                                  <h6>
                                    <i class="ti-time"></i> 11 hours ago via Twitter
                                  </h6>
                                </div>
                              </li>
                              <li>
                                <div class="timeline-badge success">
                                  <i class="tim-icons icon-user-run"></i>
                                </div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <span class="badge badge-pill badge-success">Another One</span>
                                  </div>
                                  <div class="timeline-body">
                                    <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                                  </div>
                                </div>
                              </li>
                              <li class="timeline-inverted">
                                <div class="timeline-badge info">
                                  <i class="tim-icons icon-notes"></i>
                                </div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <span class="badge badge-pill badge-info">Another Title</span>
                                  </div>
                                  <div class="timeline-body">
                                    <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                                    <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                                    <hr>
                                  </div>
                                  <div class="timeline-footer">
                                    <div class="dropdown">
                                      <button
                                        type="button"
                                        class="btn btn-round btn-info dropdown-toggle"
                                        data-toggle="dropdown"
                                      >
                                        <i class="tim-icons icon-settings-gear-63"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="timeline-badge warning">
                                  <i class="tim-icons icon-gift-2"></i>
                                </div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <span class="badge badge-pill badge-warning">Another One</span>
                                  </div>
                                  <div class="timeline-body">
                                    <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                                  </div>
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
                                    >
                                  </div>
                                </div>
                                <div class="col-md-3 px-md-1">
                                  <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="michael23">
                                  </div>
                                </div>
                                <div class="col-md-4 pl-md-1">
                                  <div class="form-group">
                                    <label>Email address</label>
                                    <input
                                      type="email"
                                      class="form-control"
                                      placeholder="mike@email.com"
                                    >
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 pr-md-1">
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="Mike">
                                  </div>
                                </div>
                                <div class="col-md-6 pl-md-1">
                                  <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="Andrew">
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
                                    >
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4 pr-md-1">
                                  <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" value="Mike">
                                  </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                  <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" value="Andrew">
                                  </div>
                                </div>
                                <div class="col-md-4 pl-md-1">
                                  <div class="form-group">
                                    <label>Postal Code</label>
                                    <input
                                      type="number"
                                      class="form-control"
                                      placeholder="ZIP Code"
                                    >
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
                                <img class="avatar" src="/assets/img/emilyz.jpg" alt="...">
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
    </div>
  </div>
</template>
<script>
import chartJS from "./chartjs";
export default {
  data() {
    return {
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
  },
  methods: {
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
    }
  }
};
</script>
<style scoped>
</style>

