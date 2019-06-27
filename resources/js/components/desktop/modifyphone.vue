<template>
  <div>
    <div class="card">
      <div class="card-body">
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
              <input type="text" class="form-control mt-2" id="inputZip" placeholder="请输入6位数验证码">
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
</template>
<script>
export default {

};
</script>
<style scoped>
</style>

