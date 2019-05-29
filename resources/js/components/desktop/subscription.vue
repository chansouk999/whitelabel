<template>
  <div>
    <blockquote class="blockquote text-left">
      <p class="mb-0 d-flex">
        手机号码: 186*******2
        <button class="btn btn-custome">修改</button>
      </p>
      <form>
        <div class="form-row">
          <div class="form-group col-md-6 d-flex">
            <button type="submit" class="btn btn-custome">获取短信验证码</button>
            <input type="text" class="form-control mt-1" placeholder="请输入短信验证码">
            <button type="submit" class="btn btn-custome">立即验证</button>
          </div>
        </div>
      </form>
      <p>温馨提示：请您输入短信验证码开通短信订阅功能</p>
    </blockquote>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center">#</th>
          <th>content</th>
          <th>SMS</th>
          <th>Salary</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">1</td>
          <td>Andrew Mike</td>
          <td>
            <div class="checkbox switcher">
              <label for="test">
                <input
                  type="checkbox"
                  id="test"
                  class="bootstrap-switch"
                  data-on-label="ON"
                  data-off-label="OFF"
                >
                <span>
                  <small></small>
                </span>
              </label>
            </div>
          </td>
          <td class="text-right">&euro; 99,225</td>
          <td class="td-actions text-right">
            <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
              <i class="tim-icons icon-single-02"></i>
            </button>
            <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
              <i class="tim-icons icon-settings"></i>
            </button>
            <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </td>
        </tr>
        <tr>
          <td class="text-center">2</td>
          <td>John Doe</td>
          <td>
            <div class="checkbox switcher">
              <label for="test1">
                <input type="checkbox" id="test1" value>
                <span>
                  <small></small>
                </span>
              </label>
            </div>
          </td>
          <td class="text-right">&euro; 89,241</td>
          <td class="td-actions text-right">
            <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon">
              <i class="tim-icons icon-single-02"></i>
            </button>
            <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon">
              <i class="tim-icons icon-settings"></i>
            </button>
            <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>

