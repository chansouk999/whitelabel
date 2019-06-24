<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="title">修改密码</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-3 pr-md-1 text-right">
                  <label>原始密码：</label>
                </div>
                <div class="col-md-9 pr-md-1">
                  <div class="form-group">
                    <input type="text" class="form-control" value placeholder="请输入原始密码">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 pr-md-1 text-right">
                  <label>新密码：</label>
                </div>
                <div class="col-md-9 pr-md-1">
                  <div class="form-group">
                    <input type="text" class="form-control" value placeholder="游戏密码由8~10位字母和数字组成 ">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 pr-md-1 text-right">
                  <label>确认新密码：</label>
                </div>
                <div class="col-md-9 pr-md-1">
                  <div class="form-group">
                    <input type="text" class="form-control" value placeholder="游戏密码由8~10位字母和数字组成 ">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-warning bg-custome">修改</button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
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
              <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                <i class="fab fa-facebook"></i>
              </button>
              <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                <i class="fab fa-twitter"></i>
              </button>
              <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                <i class="fab fa-google-plus"></i>
              </button>
            </div>
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

