import {
    Bar,
    Line
} from "vue-chartjs";
import VueCharts from "vue-chartjs";
import zoom from "chartjs-plugin-zoom";
import {
    urlapi
} from "./urlapi.js";
export const livechart = {
    mixins: [urlapi],
    extends: Line,
    props: ["stockname", "loop", "country", "checkpcormb"],
    data() {
        return {
            labelss: [],
            datas: [],
            items: [],
            datenow: 0,
            first: 0,
            last: 0,
            sumfl: 0,
            timerone: ""
        };
    },
    mounted() {
        this.chart()
    },
    methods: {
        chart() {

            // console.log(this.stockname)
            // console.log(this.loop)

            this.url(this.stockname, this.loop, this.country);
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
                // console.log(response)
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
                    lastdraw.push({
                        id: element.id,
                        dates: dates,
                        first: element.no1,
                        last: element.no2
                    });

                    //     minDataValue = Math.min(parseFloat(value.PT));
                    //     maxDataValue = Math.max(parseFloat(value.PT));
                });
                let datalastdraw = lastdraw[lastdraw.length - 1];
                _this.datenow = datalastdraw.dates;
                _this.first = datalastdraw.first;
                _this.last = datalastdraw.last;
                _this.sumfl = datalastdraw.first + datalastdraw.last;

                // this post id drives the example data
                let mindate = labelss[labelss.length - 100];
                let mindates = labelss[labelss.length - 299];

                let maxdates20 = datas[datas.length - 20];
                let maxdate19 = datas[datas.length - 19];
                let maxdate18 = datas[datas.length - 18];
                let maxdate17 = datas[datas.length - 17];
                let maxdate16 = datas[datas.length - 16];
                let maxdates15 = datas[datas.length - 15];
                let maxdates14 = datas[datas.length - 14];
                let maxdates13 = datas[datas.length - 13];
                let maxdates12 = datas[datas.length - 12];
                let maxdates11 = datas[datas.length - 11];
                let maxdates10 = datas[datas.length - 10];
                let maxdates9 = datas[datas.length - 9];
                let maxdates8 = datas[datas.length - 8];
                let maxdates7 = datas[datas.length - 7];
                let maxdates6 = datas[datas.length - 6];
                let maxdates5 = datas[datas.length - 5];
                let maxdates4 = datas[datas.length - 4];
                let maxdates3 = datas[datas.length - 3];
                let maxdates2 = datas[datas.length - 2];
                let maxdates1 = datas[datas.length - 1];

                let maxValue = [
                    maxdates20,
                    maxdate19,
                    maxdate18,
                    maxdate17,
                    maxdate16,
                    maxdates15,
                    maxdates14,
                    maxdates13,
                    maxdates12,
                    maxdates11,
                    maxdates10,
                    maxdates9,
                    maxdates8,
                    maxdates7,
                    maxdates6,
                    maxdates5,
                    maxdates4,
                    maxdates3,
                    maxdates2,
                    maxdates1
                ];
                let max = maxValue[0];
                let min = maxValue[0];
                let maxs, mins, stepVal;

                for (let counter = 1; counter < maxValue.length; counter++) {
                    //  get max
                    if (maxValue[counter] > max) {
                        max = maxValue[counter];
                    }
                    // get min
                    if (maxValue[counter] < min) {
                        min = maxValue[counter];
                    }
                    if (this.stockname === "USdollarIndex") {
                        maxs = parseFloat(max);
                        mins = parseFloat(min);
                        stepVal = 0.2;
                    } else if (this.stockname === "BTCUSDT" && this.loop == "5") {
                        maxs = parseFloat(max);
                        mins = parseFloat(min);
                        stepVal = 40;
                    } else if (this.stockname === "BTCUSDT" && this.loop == "1") {
                        maxs = parseFloat(max);
                        mins = parseFloat(min);
                        stepVal = 10;
                    } else {
                        maxs = parseFloat(max);
                        mins = parseFloat(min);
                        stepVal = 20;
                    }
                }
                if (this.checkpcormb == 'mb') {
                    this.onoff = "x";
                    this.pointBorderWidth = 2.2;
                    this.pointHoverRadius = 2.2;
                    this.pointHoverBorderWidth = 2.2;
                    this.pointRadius = 2.2;
                    this.backgroundColor = "#ffc1b3a8";
                    this.pointBackgroundColor = "red";
                    this.borderColor = "#ff8d72";
                } else {
                    this.onoff = "xy";
                    this.pointBorderWidth = 0;
                    this.pointHoverRadius = 0;
                    this.pointHoverBorderWidth = 0;
                    this.pointRadius = 0;
                    this.backgroundColor = ""
                    this.pointBackgroundColor = "#00c0ef";
                    this.borderColor = "#00c0ef";
                };
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
                            backgroundColor: this.backgroundColor,
                            borderColor: this.borderColor,
                            // backgroundColor: "#00c0ef",
                            // borderColor: "#00c0ef",
                            borderWidth: 1.5,
                            borderDashOffset: 0.0,
                            pointBackgroundColor: this.pointBackgroundColor,
                            pointBorderColor: "rgba(255,255,255,0)",
                            pointHoverBackgroundColor: "#00c0ef",
                            pointBorderWidth: this.pointBorderWidth,
                            pointHoverRadius: this.pointHoverRadius,
                            pointHoverBorderWidth: this.pointHoverBorderWidth,
                            pointRadius: this.pointRadius
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
                            mode: this.onoff,
                            speed: 10,
                            threshold: 10
                        },
                        zoom: {
                            enabled: true,
                            drag: false,
                            mode: this.onoff,
                            limits: {
                                max: 10,
                                min: 0.5
                            }
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
                                    position: "right"
                                },
                                {
                                    gridLines: {
                                        display: true
                                    },
                                    scaleLabel: {
                                        display: false
                                    },
                                    ticks: {
                                        display: true,
                                        reverse: false,
                                        position: "left",
                                        beginAtZero: true,
                                        // stepSize: 5,
                                        // stepValue: stepVal,
                                        // max: maxs,
                                        suggestedMin: mins,
                                        suggestedMax: maxs,
                                        maxTicksLimit: 6
                                            // callback: function(value, index, values) {
                                            //     console.log("Value " + value, index);
                                            //     return (Math.round(value).toString());
                                            // }
                                    }
                                }
                            ]
                        },

                        tooltips: {
                            bodySpacing: 4,
                            xPadding: 12,
                            intersect: 0,
                            intersect: false,
                            mode: "index",

                            callbacks: {
                                label: function(tooltipItem, data) {
                                    if (_this.stockname === "USdollarIndex") {
                                        return " value: " + tooltipItem.yLabel.toFixed(4);
                                    } else {
                                        return " value: " + tooltipItem.yLabel.toFixed(2);
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
                    if (linebar % 2 == "0") {
                        config.type = "bar";
                        $("#linebar-switch").html("line");
                    } else {
                        config.type = "line";
                        $("#linebar-switch").html("bar");
                    }
                    myChart.update();
                });

                var zoominout = 0;
                $(".zoom").click(() => {
                    zoominout++;
                    if (zoominout % 2 == "0") {
                        config.options.scales.xAxes[0].ticks.min = mindate;
                        $("#zomm-switch").html('<i class="fa fa-search-minus" ></i>');
                    } else {
                        config.options.scales.xAxes[0].ticks.min = mindates;
                        $("#zomm-switch").html('<i class="fa fa-search-plus"></i>');
                    }
                    myChart.update();
                });

                var zoomOptions = 0;
                $(".enzoom").click(() => {
                    zoomOptions++;
                    if (zoomOptions % 2 == "0") {
                        config.options.zoom.mode = "xy";
                        config.options.pan.mode = "xy";
                        $("#drag-switch").html('<i class="fa fa-unlock"></i>');
                    } else {
                        config.options.zoom.mode = "x";
                        config.options.pan.mode = "x";
                        $("#drag-switch").html('<i class="fa fa-lock"></i>');
                    }
                    myChart.update();
                });

                $(".something").click(function() {
                    location.reload();
                    myChart.update();
                });

                // get new data every 1 seconds
                axios.get("http://159.138.45.25/api/timeset").then(response => {
                    let countDownDate5 = new Date(
                        response.data[2].replace(/-/g, "/")
                    ).getTime();
                    let countDownDate1 = new Date(
                        response.data[1].replace(/-/g, "/")
                    ).getTime();
                    let asiaTime = new Date(
                        response.data[0].replace(/-/g, "/")
                    ).getTime();
                    let n = 0;
                    setInterval(() => {
                        n++;

                        // timer 1 minutes
                        let distance1 = countDownDate1 - asiaTime;
                        let min1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
                        let sec1 = Math.floor((distance1 % (1000 * 60)) / 1000);
                        let TimeCount1 = 60 * min1 + sec1 - n;

                        // timer 5 minutes
                        let distance5 = countDownDate5 - asiaTime;
                        let minutes = Math.floor(
                            (distance5 % (1000 * 60 * 60)) / (1000 * 60)
                        );
                        let seconds = Math.floor((distance5 % (1000 * 60)) / 1000);
                        let time = 60 * minutes + seconds - n;
                        if (
                            TimeCount1 < 1 ||
                            TimeCount1 == 5 ||
                            TimeCount1 == 10 ||
                            TimeCount1 == 15 ||
                            TimeCount1 == 20 ||
                            TimeCount1 == 25 ||
                            TimeCount1 == 30 ||
                            TimeCount1 == 35 ||
                            TimeCount1 == 40 ||
                            TimeCount1 == 45 ||
                            TimeCount1 == 50 ||
                            TimeCount1 == 55
                        ) {
                            axios.post("http://159.138.45.25/api/checktimeclose", {
                                code: "jnaosr78q3hn4aoidfsj1543570997985646a9wr15"
                            }).then(ress => {
                                _this.checkstockss = ress.data;
                                //  console.log(_this.checkstockss);
                            });
                        }
                        if (_this.checkstockss === undefined) {
                            _this.stockch = "closed";
                            _this.usstocks = "closed";
                            _this.btc = "closed";
                        } else {
                            _this.stockch = _this.checkstockss.stockch;
                            _this.usstocks = _this.checkstockss.usstock;
                            _this.btc = _this.checkstockss.btc;
                        }

                        if (_this.stockname == "USdollarIndex" && _this.usstocks != "closed") {
                            if (time == 260) {
                                startInterval();
                            }
                        } else if (_this.stockname == "BTCUSDT" && _this.loop == "5" && _this.btc != "closed") {
                            if (time == 260) {
                                startInterval();
                            };

                        } else if (_this.stockname == "BTCUSDT" && _this.loop == "1" && _this.btc != "closed") {
                            if (TimeCount1 == 40) {
                                startInterval();
                            }

                        } else if (_this.stockch != "closed") {
                            if (time == 260) {
                                startInterval();
                            }

                        }

                        if (time <= 0 || TimeCount1 <= 0) {
                            axios.get("http://159.138.45.25/api/timeset").then(response => {
                                countDownDate5 = new Date(
                                    response.data[2].replace(/-/g, "/")
                                ).getTime();
                                countDownDate1 = new Date(
                                    response.data[1].replace(/-/g, "/")
                                ).getTime();
                                asiaTime = new Date(
                                    response.data[0].replace(/-/g, "/")
                                ).getTime();
                            });
                            n = 1;
                            return;
                        }
                    }, 1000);
                });

                // logic to get new data
                function startInterval() {
                    let items = [];
                    axios.get(_this.api).then(function(response) {
                        let dataGet = response.data.data;
                        dataGet.forEach(elements => {
                            items.push({
                                id: elements.id,
                                date: elements.writetime.replace(/-/g, "/"),
                                value: elements.PT
                                    // first: elements.no1,
                                    // last: elements.no2
                            });
                        });
                        let dataItems = items[items.length - 1];

                        if (datalastdraw.id != dataItems.id) {
                            let date = new Date(dataItems.date);
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
                            let dates =
                                yyyy + "-" + mm + "-" + dd + " " + Hours + ":" + Minutes;
                            // new data to chart
                            config.data.labels.push(date);
                            config.data.datasets[0].data.push(dataItems.value);
                            myChart.update();
                            //   _this.datenow = dates;
                            //   _this.first = dataItems.first;
                            //   _this.last = dataItems.last;
                            //   _this.sumfl = dataItems.first + dataItems.last;
                        }
                    });
                }
            }).catch(err => {
                console.error(err)
                alert(err)
            });
        }
    }
};