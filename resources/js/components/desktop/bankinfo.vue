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
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-primary">
            <div class="card-body">
              <h1 class="card-title">pro</h1>
              <img class="card-img" src="/assets/img/card-primary.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">300 messages</li>
                <li class="list-group-item">150 emails</li>
                <li class="list-group-item">24/7 Support</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>95
                </h3>
                <h5 class="text-on-back">95</h5>
                <p class="plan">Professional plan</p>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button
                class="btn btn-round btn-just-icon btn-primary"
                data-toggle="modal"
                data-target="#addbankcard"
              >添加银行卡</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-success card-white">
            <div class="card-body">
              <h1 class="card-title">basic</h1>
              <img class="card-img" src="/assets/img/card-success.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">50 messages</li>
                <li class="list-group-item">100 emails</li>
                <li class="list-group-item">24/7 Support</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>57
                </h3>
                <h5 class="text-on-back">57</h5>
                <p class="plan">Basic plan</p>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button
                class="btn btn-round btn-just-icon btn-success"
                data-toggle="modal"
                data-target="#addbankcard"
              >添加银行卡</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-warning card-raised card-white">
            <div class="card-body">
              <h1 class="card-title">mid</h1>
              <img class="card-img" src="/assets/img/card-warning.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">200 messages</li>
                <li class="list-group-item">130 emails</li>
                <li class="list-group-item">24/7 Support</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>72
                </h3>
                <h5 class="text-on-back">72</h5>
                <p class="plan">Medium plan</p>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button
                class="btn btn-round btn-just-icon btn-warning"
                data-toggle="modal"
                data-target="#addbankcard"
              >添加银行卡</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-danger card-white">
            <div class="card-body">
              <h1 class="card-title">trial</h1>
              <img class="card-img" src="/assets/img/card-danger.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">50 messages</li>
                <li class="list-group-item">50 emails</li>
                <li class="list-group-item">No Support</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>9
                </h3>
                <h5 class="text-on-back">9</h5>
                <p class="plan">Trial plan</p>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button
                type="button"
                class="btn btn-round btn-just-icon btn-danger"
                data-toggle="modal"
                data-target="#addbankcard"
              >添加比特币钱包</button>
            </div>
          </div>
        </div>
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
export default {};
</script>
<style scoped>
</style>

