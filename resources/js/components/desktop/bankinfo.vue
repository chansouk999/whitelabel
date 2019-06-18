<template>
  <div>
    <div class="container my-5">
      <div class="row">
        <div class="col-md-12">
          <div class="blockquote">
            <p class="mb-0">温馨提示：玩家可绑定3张银行卡和1个虚拟币钱包，若您需要修改资料信息，请先删除该资料并重新添加即可。.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card ml-auto" style="width: 20rem;">
            <div class="card-body p-bank">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addnewcard">
                <i class="tim-icons icon-simple-add"></i> 添加银行卡
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mr-auto" style="width: 20rem;">
            <div class="card-body p-bank">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addnewcard">
                <i class="tim-icons icon-simple-add"></i> 添加银行卡
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card ml-auto" style="width: 20rem;">
            <div class="card-body p-bank">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addnewcard">
                <i class="tim-icons icon-simple-add"></i> 添加银行卡
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mr-auto" style="width: 20rem;">
            <img src="assets/img/bitcoin.png" alt="Card image cap">
            <div class="card-body p-bank">
              <a href="#" class="btn btn-primary">
                <i class="tim-icons icon-simple-add"></i> 添加比特币钱包
              </a>
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
          <form class="form-horizontal" method="post" action>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add a new bank card</h5>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <label class="col-md-3 col-form-label">Name on Card</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="text"
                            name="namecard"
                            class="form-control"
                            placeholder="Name on Card..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Card Number</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="cardNumber"
                            class="form-control"
                            placeholder="Card Number..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Bank</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select id="inputState" name="bank" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Registered Province</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="registerProvince"
                            class="form-control"
                            placeholder="Registered Province..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Registered City</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="registedCity"
                            class="form-control"
                            placeholder="Registered City..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Branch</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="branch"
                            class="form-control"
                            placeholder="Branch..."
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Save & Continue</button>
            </div>
          </form>
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

