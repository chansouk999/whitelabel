<template>
  <div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img
                    class="profile-user-img img-fluid img-circle"
                    src="/assets/img/user.png"
                    alt="User profile picture"
                  >
                </div>

                <h3 class="profile-username text-center">{{ name }}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b>
                    <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b>
                    <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b>
                    <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block">
                  <b>Follow</b>
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
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

                <p class="text-custome font-weight-bolder">¥0.00</p>
                <a href class="btn btn-primary">
                  <i class="tim-icons icon-refresh-02"></i>刷新额度
                </a>
                <hr>
                <strong>
                  <i class="fa fa-pencil mr-1"></i> 总余额
                </strong>
                <p class="text-custome font-weight-bolder">¥0.00</p>
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
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
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
                    <div class="row">
                      <div class="col-lg-12">
                        <p>我的会员星级 (加入尊贵的VIP行列,坐享星级礼遇、超级特权，让您乐在源源不绝的惊喜优惠中)</p>
                        <app-chart></app-chart>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">timeline</div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">settings</div>
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
          console.log(res.data);
          this.id = res.data.id;
          this.user_id = res.data.user_id;
          this.provider_name = res.data.provider_name;
          this.balance = res.data.userBalance;
          this.pro_id = res.data.pro_id;
          this.name = res.data.name;
          this.email = res.data.email;
          this.login_at = res.data.updated_at;
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

