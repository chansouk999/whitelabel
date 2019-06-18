<template>
  <div>
    <div class="d-flex justify-content-end">
        <i class="fa fa-undo something btn btn-outline-primary btn-sm"></i>
        <div class="zoom btn btn-outline-primary btn-sm" id="zomm-switch"  title="Zoom"><i class="fa fa-search-minus"></i></div>
        <div class="btn btn-outline-primary btn-sm enzoom" id="drag-switch"><i class="fa fa-unlock"></i></div>
    </div>
    <canvas ref="myChart" height="100" width="400" ></canvas>
  </div>
</template>
<script>
import { Bar, Line } from "vue-chartjs";
import VueCharts from "vue-chartjs";
import zoom from "chartjs-plugin-zoom";
import { urlapi } from "./urlapi.js";
export default {
    mixins: [urlapi],
    extends: Line,
    props: ["stockname","loop","country"],
    data() {
        return {
            labelss: [],
            datas: [],
            items: [],
            datenow: 0,
            first: 0,
            last: 0,
            sumfl: 0
        };
    },
    mounted() {
        //  console.log(this.stockname +"=>"+this.loop +"=>"+this.country)
        this.url(this.stockname,this.loop,this.country);
        let labelss = [];
        let datas = [];
        let _this = this;
        let lastdraw = [];
        // let minDataValue = [];
        // let maxDataValue = [];
        axios({
            method: "get",
            url: this.api
        }).then(response => {
            let dataGet = response.data.data;
            dataGet.forEach(element => {
                let date = new Date(element.writetime.replace(/-/g, "/"));
                let dd1 = date.getDate();
                let dd = dd1 < 10 ? "0" + dd1 : dd1;
                let mm1 = date.getMonth() + 1;
                let mm = mm1 < 10 ? "0" + mm1 : mm1;
                let yyyy = date.getFullYear();
                let Hourss = date.getHours();
                let Hours = Hourss < 10 ? "0" + Hourss : Hourss;
                let Minutess = date.getMinutes();
                let Minutes = Minutess < 10 ? "0" + Minutess : Minutess;
                date = dd + "/" + mm + " " + Hours + ":" + Minutes;
                let dates = yyyy + "-" + mm + "-" + dd + " " + Hours + ":" + Minutes;
                labelss.push(date);
                datas.push(element.PT);
                lastdraw.push({ id: element.id, dates: dates, first: element.no1, last: element.no2 });

                //     minDataValue = Math.min(parseFloat(value.PT));
                //     maxDataValue = Math.max(parseFloat(value.PT));
            });
            let datalastdraw = lastdraw[lastdraw.length - 1];
            _this.datenow = datalastdraw.dates;
            _this.first = datalastdraw.first;
            _this.last = datalastdraw.last;
            _this.sumfl = datalastdraw.first + datalastdraw.last;

            // this post id drives the example data
            let mindate = labelss[labelss.length - 20];
            let mindates = labelss[labelss.length - 299];

            let max = datas[0];
            let min = datas[0];
            let maxs, mins, stepVal;

            for (let counter = 1; counter < datas.length; counter++) {
                //  get max
                if (datas[counter] > max) {
                    max = datas[counter];
                }
                // get min
                if (datas[counter] < min) {
                    min = datas[counter];
                }

                if (this.stockname === "美元指数") {
                    maxs = parseFloat(max);
                    mins = parseFloat(min);
                    stepVal = 0.2;
                } else if (this.stockname === "比特币") {
                    maxs = parseFloat(max);
                    mins = parseFloat(min);
                    stepVal = 40;
                } else if (this.stockname === "比特币1") {
                    maxs = parseFloat(max);
                    mins = parseFloat(min);
                    stepVal = 10;
                } else {
                    maxs = parseFloat(max);
                    mins = parseFloat(min);
                    stepVal = 20;
                }
            }
            // console.log(maxs + "maxs");
            // console.log(mins + "mins");

            // create initial empty chart
            var config = {
                type: "line",
                data: {
                    labels: labelss,
                    datasets: [{
                        data: datas,
                        label: "value",
                        fill: true,
                        // backgroundColor: "#00c0ef",
                        borderColor: "#00c0ef",
                        borderWidth: 1.5,
                        borderDashOffset: 0.0,
                        pointBackgroundColor: "#00c0ef",
                        pointBorderColor: "rgba(255,255,255,0)",
                        pointHoverBackgroundColor: "#00c0ef",
                        pointBorderWidth: 20,
                        pointHoverRadius: 3,
                        pointHoverBorderWidth: 15,
                        pointRadius: 3
                    }]
                },
                options: {
                    responsive: true,
                    barPercentage: 1.6,
                    elements: {
                        rectangle: {
                            borderWidth: 0,
                            borderSkipped: "bottom"
                        }
                    },
                    layout: {
                        // padding: {
                        //     left: 50,
                        //     right: 0,
                        //     top: 0,
                        //     bottom: 0
                        // }
                    },
                    legend: {
                        display: false,
                        position: "top"
                    },
                    title: {
                        display: true
                            // text: 'LOADS'
                    },
                    pan: {
                        enabled: true,
                        mode: "xy",
                        speed: 10,
                        threshold: 10
                    },
                    zoom: {
                        enabled: true,
                        drag: false,
                        mode: "xy",
                        limits: {
                            max: 10,
                            min: 0.5
                        },
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                maxRotation: 0,
                                display: true,
                                min: mindate,
                                beginAtZero: true,

                            }
                        }],
                        yAxes: [{
                            display: false,
                            reverse: false,
                            position: 'right',
                        }, {
                            gridLines: {
                                display: true
                            },
                            scaleLabel: {
                                display: false
                            },
                            ticks: {
                                display: true,
                                reverse: false,
                                position: 'left',
                                beginAtZero: true,
                                // stepSize: 5,
                                // stepValue: maxDataValue,
                                // max: maxs,
                                suggestedMin: mins,
                                suggestedMax: maxs,
                                maxTicksLimit: 6,
                                // callback: function(value, index, values) {
                                //     console.log("Value " + value, index);
                                //     return (Math.round(value).toString());
                                // }
                            }
                        }]
                    },


                    tooltips: {
                        bodySpacing: 4,
                        xPadding: 12,
                        intersect: 0,
                        intersect: false,
                        mode: "index",

                        callbacks: {
                            label: function(tooltipItem, data) {
                                if (_this.stockname === "US dollar Index") {
                                    return (" value: " + tooltipItem.yLabel.toFixed(4));
                                } else {
                                    return (" value: " + tooltipItem.yLabel.toFixed(2));
                                }
                            }
                        }
                    }
                }

            };

            var ctx = this.$refs.myChart.getContext("2d");
            var myChart = new Chart(ctx, config);

            // $(".resetZooms").click(() => {
            //     // config.options.scales.xAxes[0].ticks.min = mindates;
            //     myChart.resetZoom();
            // });

            var linebar = 1;
            $(".line").click(() => {
                linebar++;
                if (linebar % 2 == '0') {
                    config.type = 'bar';
                    $('#linebar-switch').html('line');
                } else {
                    config.type = 'line';
                    $('#linebar-switch').html('bar');
                }
                myChart.update();
            });

            var zoominout = 0;
            $(".zoom").click(() => {
                zoominout++;
                if (zoominout % 2 == '0') {
                    config.options.scales.xAxes[0].ticks.min = mindate;
                    $('#zomm-switch').html('<i class="fa fa-search-minus" ></i>');
                } else {
                    config.options.scales.xAxes[0].ticks.min = mindates;
                    $('#zomm-switch').html('<i class="fa fa-search-plus"></i>');
                }
                myChart.update();
            });

            var zoomOptions = 0;
            $(".enzoom").click(() => {
                zoomOptions++;
                if (zoomOptions % 2 == '0') {
                    config.options.zoom.mode = 'xy';
                    config.options.pan.mode = 'xy';
                    $('#drag-switch').html('<i class="fa fa-unlock"></i>');
                } else {
                    config.options.zoom.mode = 'x';
                    config.options.pan.mode = 'x';
                    $('#drag-switch').html('<i class="fa fa-lock"></i>');
                }
                myChart.update();
            });

            $('.something').click(function() {
                location.reload();
                myChart.update();
            });

            // get new data every 1 seconds
            // setInterval(function() {
            //     if (_this.stockname === "比特币") {
            //         if (_this.$store.state.timerfiveonly == 260) {
            //             startInterval();
            //         }
            //     } else if (_this.stockname === "美元指数" && _this.$store.state.uschecks != "closed") {
            //         if (_this.$store.state.timerfiveonly == 260) {
            //             startInterval();
            //         }
            //     } else if (_this.stockname === "比特币1") {
            //         if (_this.$store.state.timerone == 40) {
            //             startInterval();
            //         }
            //     } else {
            //         if (_this.$store.state.timerfive == 260) {
            //             startInterval();
            //         }
            //     }
            // }, 1000);

            // logic to get new data
            // function startInterval() {
            //     let items = [];
            //     axios.get(_this.api).then(function(response) {
            //         let dataGet = response.data.data;
            //         dataGet.forEach(elements => {
            //             items.push({
            //                 id: elements.id,
            //                 date: elements.writetime.replace(/-/g, "/"),
            //                 value: elements.PT,
            //                 first: elements.no1,
            //                 last: elements.no2
            //             });
            //         });
            //         let dataItems = items[items.length - 1];

            //         if (datalastdraw.id != dataItems.id) {
            //             let date = new Date(dataItems.date);
            //             let dd1 = date.getDate();
            //             let dd = dd1 < 10 ? "0" + dd1 : dd1;
            //             let mm1 = date.getMonth() + 1;
            //             let mm = mm1 < 10 ? "0" + mm1 : mm1;
            //             let yyyy = date.getFullYear();
            //             let Hourss = date.getHours();
            //             let Hours = Hourss < 10 ? "0" + Hourss : Hourss;
            //             let Minutess = date.getMinutes();
            //             let Minutes = Minutess < 10 ? "0" + Minutess : Minutess;
            //             date = dd + "/" + mm + " " + Hours + ":" + Minutes;
            //             let dates = yyyy + "-" + mm + "-" + dd + " " + Hours + ":" + Minutes;
            //             // new data to chart
            //             config.data.labels.push(date);
            //             config.data.datasets[0].data.push(dataItems.value);
            //             myChart.update();
            //             _this.datenow = dates;
            //             _this.first = dataItems.first;
            //             _this.last = dataItems.last;
            //             _this.sumfl = dataItems.first + dataItems.last;
            //         }

            //     });
            // }
        });
    }
};
</script>

<style >
canvas {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.mb_2{
    margin-bottom: -2%;
}

</style>
