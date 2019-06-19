<template>
  <div>
    <!-- <div class="d-flex justify-content-end btn-ss">
      <i class="fa fa-undo something btn btn-outline-primary btn-sm"></i>
      <div class="zoom btn btn-outline-primary btn-sm" id="zomm-switch" title="Zoom">
        <i class="fa fa-search-minus"></i>
      </div>
      <div class="btn btn-outline-primary btn-sm enzoom" id="drag-switch">
        <i class="fa fa-unlock"></i>
      </div>
    </div> -->
    <canvas ref="myChart" height="220" width="400"></canvas>
  </div>
</template>
<script>
import { livechart } from "./mixinschart.js";
export default {
  mixins: [livechart],
  props: ["stockname", "loop", "country","checkpcormb"]
};
</script>

<style >
canvas {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  width: 105%;
}
.btn-ss {
  height: 33px;
  margin-bottom: -36px;
}
</style>
