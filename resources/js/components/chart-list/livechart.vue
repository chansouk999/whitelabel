<template>
  <div>
    <div class="d-flex justify-content-end" v-if="!isMenu">
      <i class="fa fa-undo something btn btn-outline-primary btn-sm"></i>
      <div class="zoom btn btn-outline-primary btn-sm" id="zomm-switch" title="Zoom">
        <i class="fa fa-search-minus"></i>
      </div>
      <div class="btn btn-outline-primary btn-sm enzoom" id="drag-switch">
        <i class="fa fa-unlock"></i>
      </div>
    </div>
    <canvas :key="key" ref="myChart" height="130" width="400"></canvas>
  </div>
</template>
<script>
import { livechart } from "./mixinschart.js";
export default {
  mixins: [livechart],
  props: ["stockname", "loop", "country","isMenu","key"]
};
</script>

<style >
canvas {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.mb_2 {
  margin-bottom: -2%;
}
</style>
