<template>
    <div>
                <!-- start your code here! -->
        <div class="u-letter u-inner">
          <div class="panel panel-default">
            <div class="panel-heading">
              <input type="checkbox" id="male" class="ctr-male btn-select-all">
              <label class="btn-select-all" for="male" data-check="true">全选</label>
              <div class="dropdown" style="display:inline-block">
                <button
                  class="btn btn-default dropdown-toggle"
                  type="button"
                  id="dropdownMenu1"
                  onclick="_hmt.push(['_trackEvent','AG8','我的消息','消息状态','消息状态']);"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="true"
                >
                  消息状态
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li>
                    <a href="#" data-href="ALL">全部</a>
                  </li>
                  <li>
                    <a href="#" data-href="READ">已读</a>
                  </li>
                  <li>
                    <a href="#" data-href="UNREAD">未读</a>
                  </li>
                </ul>
              </div>
              <a
                class="btn btn-default btn-cancel"
                onclick="_hmt.push(['_trackEvent','AG8','我的消息','标为已读','标为已读']);"
              >标为已读</a>
              <a
                class="btn btn-default btn-del"
                onclick="_hmt.push(['_trackEvent','AG8','我的消息','删除所选','删除所选']);"
              >删除所选</a>
            </div>
            <ul class="nav nav-tabs yh-tabs">
              <li class="active">
                <a
                  data-toggle="tab"
                  aria-expanded="false"
                  data-value="0"
                  onclick="_hmt.push(['_trackEvent','AG8','我的消息','优惠通知','优惠通知']);"
                >优惠通知</a>
                <em class="badge">2</em>
              </li>
              <li class>
                <a
                  data-toggle="tab"
                  aria-expanded="true"
                  data-value="1"
                  onclick="_hmt.push(['_trackEvent','AG8','我的消息','系统公告','系统公告']);"
                >系统公告</a>
              </li>
            </ul>
            <ul class="list-group letter-list" data-init="1">
              <li>
                <input type="checkbox" class="form-control" value="132922">
                <a
                  class="trun-right"
                  href="/ucenter/letter/details/index.html?id=132922&amp;msgType=0"
                >
                  <h3 class="not-read">
                    【优惠通知】亚游电台第九期大奖活动！
                    <span class="s-right">2019-04-19 11:28</span>
                  </h3>
                  <p>
                    亚游电台第九期，全新的互动奖励，彩券、刮刮卡、礼金邀您来抢！更多详情
                    点我
                  </p>
                </a>
              </li>
              <li>
                <input type="checkbox" class="form-control" value="125129">
                <a
                  class="trun-right"
                  href="/ucenter/letter/details/index.html?id=125129&amp;msgType=0"
                >
                  <h3 class="not-read">
                    PP玩转锦标赛，红包领不停
                    <span class="s-right">2019-04-12 17:35</span>
                  </h3>
                  <p>PP电子玩转锦标赛，红包领不停！每周四18:00至周一18:00，投注指定PP电子游戏，即有机会赢取奖池！更有机会领取红...</p>
                </a>
              </li>
            </ul>
          </div>
          <nav class="d-flex justify-content-center" aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">
                  2
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>

</style>

