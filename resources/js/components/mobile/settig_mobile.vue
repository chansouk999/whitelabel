<template>
  <div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"></i>
        </a>
        <ul class="dropdown-menu">
          <li class="header-title">Change Language</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors text-center">
                <div class="row justify-content-center">
                  <div class="w-20">
                    <a href="locale/en">
                      <span class="badge filter flag-icon flag-icon-us"></span>
                    </a>
                  </div>
                  <div class="w-20">
                    <a href="locale/ch">
                      <span class="badge filter flag-icon flag-icon-ch"></span>
                    </a>
                  </div>
                  <div class="w-20">
                    <a href="locale/th">
                      <span class="badge filter flag-icon flag-icon-th"></span>
                    </a>
                  </div>
                  <div class="w-20">
                    <a href="locale/la">
                      <span class="badge filter flag-icon flag-icon-la"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="button-container mt-4 pb-0 d-flex justify-content-center">
            <a href="#" class="btn btn-warning btn-ms">在线咨询</a>
            <a href="/logout" class="btn btn-warning btn-ms">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>
