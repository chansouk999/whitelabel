<template>
  <canvas id="chart" width="100" :height="setheight"></canvas>
</template>
<script>
import { Bar, Line } from "vue-chartjs";
import VueCharts from "vue-chartjs";
export default {
  extends: Bar,
  props: {
    // backgroundcolor: {
    //   default: "#003679",
    //   type: String
    // },
    // typechart: {
    //   type: String,
    //   required: true
    // },
    // borderColor: {
    //   type: String,
    //   required: true
    // },
    // number_data: {
    //   type: String,
    //   required: true
    // },
    checkpcormb: {
      type: String
    }
  },
  data() {
    return {
      stockname: [1, 2, 3, 4, 5, 6],
      betlose: [],
      betwon: [200, 300, 500, 1000, 3000, 6000],
      //   gettimeshow:""
      setheight: 60
    };
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
    console.log(h);
  },
  mounted() {
    let _this = this;
    if (this.checkpcormb == "mb") {
      this.typechart = "line";
      this.number_data = "off";
      this.borderColor = "red";
      this.backgroundcolor = "#ff8d728a";
      this.backgroundcolors = "#e86211";
      (this.pointBorderWidth = 2.2),
        (this.pointHoverRadius = 2.2),
        (this.pointHoverBorderWidth = 2.2),
        (this.pointRadius = 2.2);
    } else {
      this.typechart = "bar";
      this.number_data = "on";
      this.borderColor = "#ff6c00";
      this.backgroundcolor = "#ffc1b3a8";
      this.backgroundcolors = "#e86211";
      (this.pointBorderWidth = 20),
        (this.pointHoverRadius = 10),
        (this.pointHoverBorderWidth = 15),
        (this.pointRadius = 10);
    }
    var jsonfile = {
      data: [
        {
          writetime: "One star",
          PT: "50000",
          PTS: "0.60%",
          PTS2: "0.40%"
        },
        {
          writetime: "Two stars",
          PT: "100000",
          PTS: "0.60%",
          PTS2: "0.40%"
        },
        {
          writetime: "Three Star",
          PT: "500000",
          PTS: "0.60%",
          PTS2: "0.60%"
        },
        {
          writetime: "VIP4",
          PT: "1000000",
          PTS: "0.70%",
          PTS2: "0.60%"
        },
        {
          writetime: "VIP5",
          PT: "3000000",
          PTS: "0.80%",
          PTS2: "0.80%"
        },
        {
          writetime: "VIP6",
          PT: "6000000",
          PTS: "0.90%",
          PTS2: "0.80%"
        }
      ]
    };
    var labels = jsonfile.data.map(function(e) {
      return e.writetime;
    });
    var data = jsonfile.data.map(function(e) {
      return e.PT;
    });
    let step = 1;
    if (step == 1) {
      var datas = jsonfile.data.map(function(e) {
        return e.PTS;
        50;
      });
    } else {
      var datas = jsonfile.data.map(function(e) {
        return e.PTS2;
      });
    }

    if (this.checkpcormb == "mb") {
      this.datacolor = this.backgroundcolor;
    } else {
      this.datacolor = jsonfile.data.map(function(e) {
        return e.PT == 3000000 ? _this.backgroundcolors : _this.backgroundcolor;
      });
    }

    let ctx = document.getElementById("chart");
    let myChart = new Chart(ctx, {
      // type: "bar",
      type: this.typechart,
      responsive: true,
      data: {
        labels: labels,
        datasets: [
          {
            label: "minutes",
            data: data,
            fill: true,
            borderColor: "#ff8d72",
            backgroundColor: this.datacolor,
            // backgroundColor: this.backgroundcolor,
            borderWidth: 2,
            borderDash: [],
            borderDashOffset: 0.0,
            Color: "#ff0000",
            pointBackgroundColor: "#ff0000",
            pointBorderColor: "rgba(255,255,255,0)",
            pointHoverBackgroundColor: "#00c0ef",
            pointBorderWidth: this.pointBorderWidth,
            pointHoverRadius: this.pointHoverRadius,
            pointHoverBorderWidth: this.pointHoverBorderWidth,
            pointRadius: this.pointRadius
          }
        ]
      },
      options: {
        elements: {
          rectangle: {
            borderWidth: 0,
            borderSkipped: "bottom"
          }
        },
        responsive: true,
        legend: {
          display: false,
          position: "top"
        },
        title: {
          display: true
          // text: "online time minutes"
        },
        pan: {
          enabled: false,
          mode: "x"
          // speed: 10,
          // threshold: 10,
          // limits: {
          //     max: 10,
          //     min: 0.5
          // }
        },
        zoom: {
          enabled: false,
          mode: "x",
          drag: false,
          sensitivity: 0.5,
          limits: {
            min: 0.5
          }
        },
        tooltips: {
          mode: "index",
          intersect: false
        },
        hover: {
          mode: "nearest",
          intersect: true
        },
        scales: {
          yAxes: [
            {
              stacked: true,
              gridLines: {
                display: true
              },
              scaleLabel: {
                display: false
              },
              ticks: {
                display: true,
                callback: function(value, index, values) {
                  return Math.round(value).toString() + "k";
                }
              }
            }
          ],
          xAxes: [
            {
              stacked: true,
              gridLines: {
                display: true
              },
              scaleLabel: {
                display: false
              },
              ticks: {
                display: true
                // min: "January-17",
                // max: "December-17"
              }
            }
          ]
        },
        tooltips: {
          enabled: false
        },
        animation: {
          duration: 1,
          onComplete: function() {
            var chartInstance = this.chart,
              ctx = chartInstance.ctx;
            ctx.font = Chart.helpers.fontString(
              (Chart.defaults.global.defaultFontSize = 14),
              Chart.defaults.global.defaultFontStyle,
              Chart.defaults.global.defaultFontFamily,
              Chart.defaults.global.defaultColor
            );
            ctx.textAlign = "center";
            ctx.textBaseline = "bottom";
            if (_this.number_data == "on") {
              this.data.datasets.forEach(function(dataset, i) {
                let meta = chartInstance.controller.getDatasetMeta(i);
                meta.data.forEach(function(bar, index) {
                  var data = dataset.data[index];
                  ctx.fillStyle = "#ff6c00";
                  ctx.fillText(
                    data < 1000000
                      ? datas[0]
                      : data < 3000000
                      ? datas[3]
                      : data < 6000000
                      ? datas[4]
                      : datas[5],
                    bar._model.x,
                    bar._model.y - 5
                  );
                });
              });
            }
          }
        }
      }
    });
    //   })
    //   .catch(error => {
    //     console.log(error);
    //   });
  }
};
</script>
