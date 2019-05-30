<template>
  <canvas id="chart"></canvas>
</template>
<script>
import { Bar, Line } from "vue-chartjs";
import VueCharts from "vue-chartjs";

export default {
  extends: Bar,
  data() {
    return {
      stockname: [1, 2, 3, 4, 5, 6, 7, 8, 9],
      betlose: [],
      betwon: [1, 2, 3, 4, 5, 6, 7, 8, 9]
      //   gettimeshow:""
    };
  },
  mounted() {
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

    let ctx = document.getElementById("chart");
    let myChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: this.stockname,
        datasets: [
          {
            label: "minutes",
            data: this.betwon,
            fill: true,
            borderColor: "blue",
            backgroundColor: "#003679"
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
          display: true,
          text: "online time minutes"
        },
        pan: {
          enabled: true,
          mode: "x" // is panning about the y axis neccessary for bar charts?
        },
        zoom: {
          enabled: true,
          mode: "x",
          sensitivity: 1
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
                display: false
              },
              scaleLabel: {
                display: false
              },
              ticks: {
                display: true
              }
            }
          ],
          xAxes: [
            {
              stacked: true,
               gridLines: {
                display: false
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
