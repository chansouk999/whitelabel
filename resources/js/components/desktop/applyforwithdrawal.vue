<template>
  <div>
    <!-- End Navbar -->
    <blockquote class="blockquote text-center">
      <!-- <p class="mb-0">温馨提示：提现不限次数，金额无上限，无手续费，快速到账且短信通知。.</p> -->
      <p class="mb-0">Reminder: withdraw unlimited number of times, no limit on the amount, no handling fee, fast arrival and SMS notification. .</p>
    </blockquote>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="card">
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
                  <div class="col-md-3 pr-md-1 text-right">
                    <!-- <label>提现银行：</label> -->
                    <label>Cash withdrawal bank：</label>
                  </div>
                  <div class="col-md-9 pr-md-1 col-lg-5">
                    <div class="form-group">
                      <button class="btn btn-dribbble btn-block" @click="bankInfoClick()">
                        <!-- <i class="fab fa-dribbble float-left"></i>新增银行卡 -->
                        <i class="fab fa-dribbble float-left"></i>Add a bank card
                        <i class="tim-icons icon-simple-add float-right"></i>
                      </button>
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
                      <input type="text" class="form-control" v-model="topupbalannceamount" placeholder="Maximum 100">
                      <!-- <input type="text" class="form-control" value placeholder="最低提现金额100元 "> -->
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <!-- <button type="button" class="btn btn-fill btn-primary">提 交</button> -->
              <button type="button" class="btn btn-fill btn-primary" @click.prevent="topupbalance">Confirm</button>
            </div>
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
   data(){
     return{
       topupbalannceamount:0,
     }
   },
   mounted(){
    //  this.getagentinfo()
   },
  methods:{
     topupbalance(code){
        axios.post('topupbalance',{amount:this.topupbalannceamount,detail:'Withdraw'}).then(res=>{
            // console.log(res.data)
            code = res.data.code 
            if(code==200){alert('success')}
            if(code==300){alert('query error')}
            if(code==500){alert('internal error')}
        }).catch(e=>{console.log(e.response)})
    },
    bankInfoClick(){
      $("#bankinfoclick")[0].click()
    }
  }
};
</script>
<style scoped>
</style>

