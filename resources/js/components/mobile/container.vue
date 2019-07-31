<template>
  <div>
    <navbars :home="home" :forum="forum" :washcode="washcode" :recharge="recharge" :mine="mine"></navbars>
    <div class="container">
      <div class="row">
        <div class="col-2">
          <asides
            :stock1="stock1"
            :stock2="stock2"
            :stock3="stock3"
            :stock4="stock4"
            :stock5="stock5"
            :stock6="stock6"
          ></asides>
        </div>
        <div class="col-xl-10 col-sm-12 px-1">
          <div class="main-panel">
            <div class="content px-0">
              <div class="home-wrap">
                <div class="container-wrap">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li
                        data-target="#myCarousel"
                        :data-slide-to="index"
                        v-for="(data,index) in imageSlide"
                        :key="index"
                        :class="activeClass(index)"
                      >
                        <img :src="'/careousel/'+data.carousel" />
                      </li>
                    </ol>

                    <div class="carousel-inner">
                      <div
                        :class="'carousel-item ' + activeClass(index)"
                        v-for="(data,index) in imageSlide"
                        :key="index"
                      >
                        <img
                          :class="slideClass(index)"
                          :src="'/careousel/'+data.carousel"
                          alt="First slide"
                        />
                      </div>
                    </div>
                    <!-- <a
                      class="carousel-control-prev"
                      href="#myCarousel"
                      role="button"
                      data-slide="prev"
                    >
                      <img src="assets/img/arrow-left.png" />
                      <span class="sr-only">Previous</span>
                    </a>
                    <a
                      class="carousel-control-next"
                      href="#myCarousel"
                      role="button"
                      data-slide="next"
                    >
                      <img src="assets/img/arrow-right.png" />
                      <span class="sr-only">Next</span>
                    </a>-->
                  </div>
                </div>
                <!-- Sidebar -->
                <hr />
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 px-1">
          <div class="card card-stats h-100">
            <div class="card-body">
              <div class="row">
                <div class="w-25">
                  <a href>
                    <div class="info-icon text-center icon-primary shadow-primary">
                      <!-- <i class="tim-icons icon-trophy"></i> -->
                      <img src="assets/img/us_flag.png" alt />
                      <p>{{us_stock}}</p>
                    </div>
                  </a>
                </div>
                <div class="w-25">
                  <a href>
                    <div class="info-icon text-center icon-warning shadow-info">
                      <!-- <i class="tim-icons icon-controller"></i> -->
                      <img src="assets/img/bitcoin.png" alt />
                      <p>{{cryptocurrencies}}</p>
                    </div>
                  </a>
                </div>
                <div class="w-25">
                  <a href="#">
                    <div class="info-icon text-center icon-danger shadow-success">
                      <img src="assets/img/china_flag.png" alt />
                      <p>{{chines_stock}}</p>
                    </div>
                  </a>
                </div>
                <div class="w-25">
                  <a href="fullscreengame?stockname=SH000001&loop=5&country=china">
                    <div class="info-icon text-center icon-success shadow-danger">
                      <img src="assets/img/Aragon-icon.png" alt />
                      <!-- <i class="tim-icons icon-palette"></i> -->
                      <p>{{lobby}}</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 px-1">
          <div class="card bg-light rounded-1 mb-1">
            <div class="card-body px-0 py-1">
              <div class="input-group my-1">
                <button
                  type="button"
                  data-toggle="modal"
                  data-target="#searchModal"
                  class="btn-warning"
                >
                  <i class="tim-icons icon-zoom-split"></i>
                </button>
                <a href="#" class="item-link" placeholder>【热点新闻】中美贸易战事件</a>
                <a href="#" class="more_txt">更多</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 px-1">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item w-33">
              <a
                class="nav-link active"
                data-toggle="tab"
                href="#link1"
                role="tablist"
                aria-expanded="true"
              >Live Game</a>
            </li>
            <li class="nav-item w-33">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#link2"
                role="tablist"
                aria-expanded="false"
              >Popular game</a>
            </li>
            <li class="nav-item w-33">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#link3"
                role="tablist"
                aria-expanded="false"
              >All Game</a>
            </li>
          </ul>
          <div class="tab-content tab-space p-0">
            <div class="tab-pane show active" id="link1" aria-expanded="true">
              <div class="container shadow-lg">
                <chartjs
                  backgroundcolor="#ff8d72"
                  bordercolor="red"
                  typechart="line"
                  number_data="false"
                  :checkpcormb="checkpcormb"
                />
                <div v-if="setNumber >=0">
                  <livechartmb
                    :checkpcormb="checkpcormb"
                    stockname="SH000001"
                    loop="5"
                    country="china"
                  />
                </div>
                <div v-if="setNumber >=1">
                  <livechartmb
                    :checkpcormb="checkpcormb"
                    stockname="SZ399001"
                    loop="5"
                    country="china"
                  />
                </div>
                <div v-if="setNumber >=2">
                  <livechartmb
                    :checkpcormb="checkpcormb"
                    stockname="SH00300"
                    loop="5"
                    country="china"
                  />
                </div>
                <div v-if="setNumber >=3">
                  <livechartmb
                    :checkpcormb="checkpcormb"
                    stockname="SZ399415"
                    loop="5"
                    country="china"
                  />
                </div>
                <div v-if="setNumber >=4">
                  <livechartmb
                    :checkpcormb="checkpcormb"
                    stockname="USdollarIndex"
                    loop="5"
                    country="usa"
                  />
                </div>
                <div v-if="setNumber >=5">
                  <livechartmb
                    :checkpcormb="checkpcormb"
                    stockname="BTCUSDT"
                    loop="1"
                    country="cypto"
                  />
                </div>
                <div v-if="setNumber >=6">
                  <livechartmb
                    :checkpcormb="checkpcormb"
                    stockname="BTCUSDT"
                    loop="5"
                    country="cypto"
                  />
                </div>
                <button class="btn btn-warning btn-sm" v-on:click="setNumber += 1">load more...</button>
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <span class="game_rBox">
                      <h4>亚游电竞</h4>
                      <p>看直播 投比赛 尽享电竞乐趣</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile" />
              </div>
            </div>
            <div class="tab-pane" id="link2" aria-expanded="false">
              <div class="container shadow-lg">
                <img
                  src="https://static-h5.swcqlz.com/cms/cms_pic/201901164404c1e0ef244f03bf219ec35af5cbc3.jpg"
                  alt
                />
                <hr class="hr-mobile" />
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116c06d119c28604be1b114cbab79323e7f.png"
                      alt
                    />
                    <span class="game_rBox">
                      <h4>亚游电竞</h4>
                      <p>看直播 投比赛 尽享电竞乐趣</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile" />
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/201905287706b5246279410698bd148198bb2421.png"
                      alt
                    />
                    <span class="game_rBox">
                      <h4>乐门彩票</h4>
                      <p>百万奖池等你来赢</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile" />
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/201905287706b5246279410698bd148198bb2421.png"
                      alt
                    />
                    <span class="game_rBox">
                      <h4>AS电玩城</h4>
                      <p>真人游戏结果！更快网速体验！</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile" />
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/2019011697bb7dea9f854c5ab27be45d174fcb37.png"
                      alt
                    />
                    <span class="game_rBox">
                      <h4>VR彩票</h4>
                      <p>热门彩种来袭 超高洗码</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile" />
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/201901168db4495073ab4b4ab6bc887573504778.png"
                      alt
                    />
                    <span class="game_rBox">
                      <h4>YOPLAY街机</h4>
                      <p>回到小时候玩街机电玩的感觉</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile" />
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116df9f4d2849ed42d3a14873d3b585ec2e.png"
                      alt
                    />
                    <span class="game_rBox">
                      <h4>AG体育</h4>
                      <p>专业欧盘 高赔首选</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile" />
              </div>
            </div>
            <div class="tab-pane" id="link3" aria-expanded="false">
              <div>
                <livechartmb
                  :checkpcormb="checkpcormb"
                  stockname="SH000001"
                  loop="5"
                  country="china"
                />
              </div>
              <div>
                <livechartmb
                  :checkpcormb="checkpcormb"
                  stockname="SZ399001"
                  loop="5"
                  country="china"
                />
              </div>
              <div>
                <livechartmb
                  :checkpcormb="checkpcormb"
                  stockname="SH00300"
                  loop="5"
                  country="china"
                />
              </div>
              <div>
                <livechartmb
                  :checkpcormb="checkpcormb"
                  stockname="SZ399415"
                  loop="5"
                  country="china"
                />
              </div>
              <div>
                <livechartmb
                  :checkpcormb="checkpcormb"
                  stockname="USdollarIndex"
                  loop="5"
                  country="usa"
                />
              </div>
              <div>
                <livechartmb
                  :checkpcormb="checkpcormb"
                  stockname="BTCUSDT"
                  loop="1"
                  country="cypto"
                />
              </div>
              <div>
                <livechartmb
                  :checkpcormb="checkpcormb"
                  stockname="BTCUSDT"
                  loop="5"
                  country="cypto"
                />
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-12 px-0">
                  <flickity ref="flickity" :options="flickityOptions">
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/201905312940e4b826e949499dc51c3cdb810e3b.jpg"
                        alt
                      />
                    </div>
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/201905315db58b639a4f478fab8b1d45f12f22a8.jpg"
                        alt
                      />
                    </div>
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/20180531015c5365ee7a4bc1b4723d85c0908315.jpg"
                        alt
                      />
                    </div>
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/201905312940e4b826e949499dc51c3cdb810e3b.jpg"
                        alt
                      />
                    </div>
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/201905315db58b639a4f478fab8b1d45f12f22a8.jpg"
                        alt
                      />
                    </div>
                  </flickity>
                </div>
              </div>
            </div>
            <div class="col-12 p-1">
              <div class="card bg-light my-1">
                <div class="card-body p-1">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title">客户端下载</h4>
                    <a href="#">
                      更多
                      <i class="tim-icons icon-minimal-right"></i>
                    </a>
                  </div>
                </div>
                <img class="card-img-bottom" src="/assets/img/banner_wl.jpg" alt="Card image cap" />
              </div>
            </div>
            <div class="col-12 mb-6 px-1">
              <div class="copyright">
                <a href="#">关于AG亚游</a> |
                <a href="#">隐私说明</a> |
                <a href="#">合约条款</a> |
                <a href="#">联络我们</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal modal-search fade"
      id="searchModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="searchModal"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <input type="text" class="form-control" placeholder="SEARCH" />
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <setting></setting>
    <!-- Classic Modal -->
    <div
      class="modal fade"
      id="popup"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content" v-for="data in dataAnnoucement">
          <div class="modal-body modal-custome px-0">
            <div class="modal-header justify-content-center px-0 mx-0">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
              <div class="row">
                <div class="col-2">
                  <div class="img-left">
                    <img src="/assets/img/modal-left.png" alt />
                  </div>
                </div>
                <div class="col-8">
                  <h3 class="title title-up">{{JSON.parse(data.message).title}}</h3>
                  <p class="modal-title">{{JSON.parse(data.message).msg}}</p>
                  <a :href="popup">Read More...</a>
                </div>
                <div class="col-2">
                  <div class="img-right">
                    <img src="/assets/img/modal-right.png" alt />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import setting from "./settig_mobile";
import Flickity from "vue-flickity";
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
import chartjs from "../desktop/chartjs";
import livechartmb from "../chart-list/livechart-mb.vue";
export default {
  components: {
    setting,
    navbars,
    asides,
    footers,
    chartjs,
    Flickity,
    livechartmb
  },
  data() {
    return {
      flickityOptions: {
        initialIndex: 3,
        prevNextButtons: false,
        pageDots: false,
        wrapAround: true

        // any options from Flickity can be used
      },
      dataAnnoucement: [],
      ismenu: false,
      setNumber: 0,
      messages: "./index",
      promote: "./promote",
      popup: "./messagemb",
      welcome: "/",
      //   lobby: "./lobby",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      imageSlide: []
    };
  },
  computed: {
    swiper() {
      return this.$refs.mySwiper.swiper;
    }
  },
  mounted() {
    this.getImage();
    // console.log("HELELEOEO");
    let filename = window.location.href;
    filename.split("/");
    // console.log("+++++++++++++++++++++++");
    // console.log(filename.split("/")[2]);
    // console.log("+++++++++++++++++++++++");
    // this.userdata();
    this.getAnnount();
    axios
      .get("/getaccountment")
      .then(res => {
        console.log("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
        this.dataAnnoucement = res.data[0];
        let lengthpop = res.data[1];
        if (lengthpop > localStorage.getItem("popState")) {
          localStorage.clear();
          $("#popup").modal("show");
        }
        localStorage.setItem("popState", lengthpop);
        this.lengthpopup = lengthpop;
        console.log(res.data);
      })
      .catch(e => {
        console.log(e.response);
      });
  },
  methods: {
    runwindow() {
      let filename = window.location.href;

      axios.get("/checkconnection").then(res => {
        if (res.data.success == "timeout") {
          alert("Your session timeout refresh your browser");
          location.href = "/";
        } else {
          // window.open(
          //   "http://localhost:8003/redirect?&name=" +
          //     this.email +
          //     "&urlback=http://" +
          //     filename.split("/")[2],
          //   "LEC68.COM",
          //   "_blank"
          // );
          // location.href= "http://localhost:8003/redirect?&name=" +
          // this.email +
          // "&urlback=http://" +
          // filename.split("/")[2];

          location.href =
            "http://lec68.com/redirect?&name=" +
            this.email +
            "&urlback=http://" +
            filename.split("/")[2];
          //  window.open('http://lec68.com/redirect?&name='+this.email+'&urlback=http://'+filename.split('/')[2],'LEC68.COM',"width=1920,height=1080,location=no");
        }
      });

      //  window.open('http://lec68.com/redirect?&name='+this.email+'&urlback=http://159.138.130.64','LEC68.COM',"width=1920,height=1080,location=no");
    },
    slideClass(index) {
      let array = [
        "first-slide",
        "second-slide",
        "third-slide",
        "fourd-slide",
        "fifth-slide"
      ];
      return array[index];
    },
    activeClass(index) {
      if (index == 0) {
        return "active";
      } else {
        return "";
      }
    },
    getImage() {
      axios
        .get("/userCarousel")
        .then(res => {
          console.log(res.data);
          this.imageSlide = res.data;
        })
        .catch(err => {
          console.log(err);
        });
    },
    getAnnount() {
      axios
        .get("/getaccountment")
        .then(res => {
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.respone);
        });
    },
    next() {
      this.$refs.flickity.next();
    },

    previous() {
      this.$refs.flickity.previous();
    },
    myaccount() {
      $("#myaccountlink")[0].click();
    },
    withDrawClick() {
      $("#withdraw")[0].click();
    },
    rechargeClick() {
      $("#recharge")[0].click();
    }
  },
  props: [
    "recommend_friends",
    "message",
    "myaccount_tra",
    "myprivilege",
    "gamelobby",
    "recharge",
    "withdraw",
    "currentlang",
    "login",
    "register",
    "free_trial",
    "us_stock",
    "cryptocurrencies",
    "chines_stock",
    "lobby",
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6",
    "checkpcormb",
    "home",
    "forum",
    "washcode",
    "mine"
    // "logout"
  ]
};
</script>
<style scoped>
</style>
