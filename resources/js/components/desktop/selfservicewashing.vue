<template>
  <div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-shopping table-hover">
              <thead>
                <tr>
                  <th class="text-center"></th>
                  <th>未结算洗码金额</th>
                  <th>可结算有效投注额</th>
                  <th>当周总有效投注额</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="img-container">
                      <img src="/assets/img/jacket.png" alt="...">
                    </div>
                  </td>
                  <td class="td-number text-left">
                    <small>€</small>3490
                  </td>
                  <td class="td-number text-left">
                    <small>€</small>3490
                  </td>
                  <td class="td-number text-left">
                    <small>€</small>3490
                  </td>
                </tr>
              </tbody>
            </table>
            <button
              type="button"
              rel="tooltip"
              class="btn btn-primary btn-lg"
              data-original-title
              title
            >提交</button>
          </div>
        </div>
      </div>
      <div class="u-box">
        <h3><span class="badge badge-primary"> <i class="fas fa-question" aria-hidden="true"></i> </span>洗码佣金：</h3>
        <p class="tip">
          周期(北京时间 5-27-2019 00:00:00 - 6-2-2019 23:59:59 )
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;单个游戏类型的洗码佣金达到10元即可随时结算
        </p>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>

