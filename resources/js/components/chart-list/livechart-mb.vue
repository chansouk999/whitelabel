<template>
  <div>
    <div class="d-flex justify-content-end btn-ss">
      <i class="fa fa-undo something btn btn-outline-primary btn-sm"></i>
      <div class="zoom btn btn-outline-primary btn-sm" id="zomm-switch" title="Zoom">
        <i class="fa fa-search-minus"></i>
      </div>
      <div class="btn btn-outline-primary btn-sm enzoom" id="drag-switch">
        <i class="fa fa-unlock"></i>
      </div>
    </div>
    <canvas ref="myChart" :height="setheight" width="100"></canvas>
  </div>
</template>
<script>
import { livechart } from "./mixinschart.js";
export default {
  mixins: [livechart],
  props: ["stockname", "loop", "country", "checkpcormb"],
  data(){
      return{
          setheight:60
      }
  },
  created() {


    let h = window.innerWidth;
    if (h == 812) {
      this.setheight = 32;
    } else if (h == 768) {
      this.setheight = 42;
    } else if (h == 1024) {
      this.setheight = 35;
    } else if (h == 1366) {
      this.setheight = 28;
    } else {
      this.setheight = 60;
    }
  }
};
</script>

<style >
canvas {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.btn-ss {
  height: 33px;
  margin-bottom: -36px;
}
</style>
