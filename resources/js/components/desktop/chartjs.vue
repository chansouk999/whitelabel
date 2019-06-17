<template>
  <canvas id="chart" class="mbile-chart"></canvas>
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
      betwon: [200, 300, 500, 1000, 3000, 6000]
      //   gettimeshow:""
    };
  },
  mounted() {
    if (this.checkpcormb == "mb") {
      this.typechart = "line";
      this.number_data = "off";
      this.borderColor = "red";
      this.backgroundcolor = "#ff8d728a";
      (this.pointBorderWidth = 5),
        (this.pointHoverRadius = 5),
        (this.pointHoverBorderWidth = 5),
        (this.pointRadius = 4);
    } else {
      this.typechart = "bar";
      this.number_data = "on";
      this.borderColor = "#ff6c00";
      this.backgroundcolor = "#ffc1b3a8";
      (this.pointBorderWidth = 20),
        (this.pointHoverRadius = 10),
        (this.pointHoverBorderWidth = 15),
        (this.pointRadius = 10);
    }
    // this.api = "onlinehistory";
    // axios({
    //   method: "get",
    //   url: this.api
    // })
    //   .then(response => {
    //     let dataGet = response.data.onlineHistory;
    //     dataGet.forEach(element => {
    //       let date = new Date(element.created_at.replace(/-/g, "/"));
    //       let dd1 = date.getDate();
    //       let dd = dd1 < 10 ? "0" + dd1 : dd1;
    //       let mm1 = date.getMonth() + 1;
    //       let mm = mm1 < 10 ? "0" + mm1 : mm1;
    //       let yyyy = date.getFullYear();
    //       let dates = yyyy + "/" + mm + "/" + dd ;

    //       this.stockname.push(dates);

    //       let sec_num = parseInt(element.time_online);
    //    var hours1 = Math.floor(sec_num / 3600);
    //     //   var minutes1 = Math.floor((sec_num - hours1 * 3600) / 60);
    //     //   var seconds1 = sec_num - hours1 * 3600 - minutes1 * 60;
    //     // this.gettimeshow = hours1+':'+minutes1+':'+seconds1;

    //       let minutes = Math.floor(sec_num / 60);
    //       let seconds = (sec_num % 60) % 60;

    //       this.betwon.push(parseFloat(minutes + "." + seconds));
    //     });
    let _this = this;
    let ctx = document.getElementById("chart");
    let myChart = new Chart(ctx, {
      // type: "bar",
      type: this.typechart,
      responsive: true,
      data: {
        labels: this.stockname,
        datasets: [
          {
            label: "minutes",
            data: this.betwon,
            fill: true,
            borderColor: "#ff8d72",
            backgroundColor: this.backgroundcolor,
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
          enabled: true,
          mode: "x"
          // speed: 10,
          // threshold: 10,
          // limits: {
          //     max: 10,
          //     min: 0.5
          // }
        },
        zoom: {
          enabled: true,
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
                  return Math.round(value).toString() + "K";
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
                  ctx.fillText(data / 100 + "%", bar._model.x, bar._model.y - 5);
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
