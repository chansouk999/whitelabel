<template>
  <div>
    <!-- End Navbar -->
    <blockquote class="blockquote text-center">
      <p class="mb-0">温馨提示：玩家可绑定3张银行卡和1个虚拟币钱包，若您需要修改资料信息，请先删除该资料并重新添加即可。.</p>
      <footer class="blockquote-footer">
        Someone famous in
        <cite title="Source Title">Source Title</cite>
      </footer>
    </blockquote>
    <div class="container my-5">
      <div class="row">
        

        <!-- <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Bank Account (Number)</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Bank Account with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
        

        

<form action="/charge" method="post" id="payment-form">
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>


        
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="addbankcard"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLongTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">新增银行卡</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-center text-warning">
              为确保是您本人操作，系统需发送短信验证码至您绑定的手机号码。
              <br>请在以下输入框完善信息后点击发送验证码
            </p>
            <form action>
              <div class="form-row d-flex justify-content-center">
                <label class="p-2">原手机号码：</label>
                <span class="phone-prefixes p-2">186</span>
                <div class="form-group col-lg-1">
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-lg-1">
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-lg-1">
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-lg-1">
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-lg-1">
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-lg-1">
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-lg-1">
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <span class="phone-suffix p-2">2</span>
              </div>
            </form>

            <form action>
              <div class="form-row d-flex justify-content-center">
                <label class="py-3">手机验证码：</label>
                <div class="form-group col-lg-4">
                  <input
                    type="text"
                    class="form-control mt-2"
                    id="inputZip"
                    placeholder="请输入6位数验证码"
                  >
                </div>
                <button type="submit" class="btn btn-custome">发送验证码</button>
              </div>
              <button class="btn btn-custome">下一步</button>
              <p class="text-center">
                遇到问题了吗？联系
                <a href class="link">在线客服</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  
};
</script>
<style scoped>
</style>

