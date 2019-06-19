<template>
  <div>
    <!-- End Navbar -->
    <blockquote class="blockquote text-center">
      <p class="mb-0">温馨提示：提现不限次数，金额无上限，无手续费，快速到账且短信通知.</p>
    </blockquote>
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">修改密码</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="d-flex justify-content-center">
                <label class="control-label col-xs-4">账户总余额：</label>
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
                <div class="col-md-3 pr-md-1 text-right">
                  <label>提现银行：</label>
                </div>
                <div class="col-md-9 pr-md-1 col-lg-5">
                  <div class="form-group">
                    <button class="btn btn-dribbble btn-block" @click="bankInfoClick()">
                      <i class="fab fa-dribbble float-left"></i>新增银行卡
                      <i class="tim-icons icon-simple-add float-right"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 pr-md-1 text-right">
                  <label>提现金额：</label>
                </div>
                <div class="col-md-9 pr-md-1 col-lg-5">
                  <div class="form-group">
                    <input type="text" class="form-control" value placeholder="最低提现金额100元 ">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-fill btn-primary">提 交</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
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
  mounted() {
    this.userdata();
  },
  methods: {
    bankInfoClick() {
      $("#bankinfoclick")[0].click();
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

