<template>
  <div>
    <navbars></navbars>
    <div class="container">
      <div class="row">
        <div class="col-2">
          <asides></asides>
        </div>
        <div class="col-xl-10 col-sm-12 px-1">
          <div class="main-panel">
            <!-- <navbars></navbars> -->
            <div class="content px-0">
              <div class="home-wrap">
                <div class="container-wrap">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active">
                        <img
                          src="https://static-pc.swcqlz.com/cms/cms_pic/20190328cfa9d94907ba431db6505bb707b0c58c.jpg"
                        >
                      </li>
                      <li data-target="#myCarousel" data-slide-to="1" class>
                        <img
                          src="https://static-pc.swcqlz.com/cms/cms_pic/20190326961759629a51491e8f00c2ff2e753aff.jpg"
                        >
                      </li>
                      <li data-target="#myCarousel" data-slide-to="2" class>
                        <img
                          src="https://static-pc.swcqlz.com/cms/cms_pic/20190409d5dfebd2223a4eb58427dd4f3325d3f1.jpg"
                        >
                      </li>
                      <li data-target="#myCarousel" data-slide-to="3" class>
                        <img
                          src="https://static-pc.swcqlz.com/cms/cms_pic/20190418108f63a2f4454f9dba0199230447bcbf.jpg"
                        >
                      </li>
                      <li data-target="#myCarousel" data-slide-to="4" class>
                        <img
                          src="https://static-pc.swcqlz.com/cms/cms_pic/2019042247954d584b7547a59733bbc2c3a28880.jpg"
                        >
                      </li>
                    </ol>

                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img
                          class="first-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/201903287c512df06b914cefb2b3a96d20d3fdbd.jpg"
                          alt="First
              slide"
                        >
                      </div>
                      <div class="carousel-item">
                        <img
                          class="second-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/20190423b2ae4cfc35c14da4b2da530f147887c5.jpg"
                          alt="Second
              slide"
                        >
                      </div>
                      <div class="carousel-item">
                        <img
                          class="third-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/20190409837ef9651b994dde86cbf299a2d5a599.jpg"
                          alt="Third
              slide"
                        >
                      </div>
                      <div class="carousel-item">
                        <img
                          class="fourd-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/201904188594c2980f2e4ffa8a7120ff2406d97a.jpg"
                          alt="Third
              slide"
                        >
                      </div>
                      <div class="carousel-item">
                        <img
                          class="five-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/2019042254cc8ec48bfe4d89b4b377df2fbbcc26.jpg"
                          alt="Five
              slide"
                        >
                      </div>
                    </div>
                    <a
                      class="carousel-control-prev"
                      href="#myCarousel"
                      role="button"
                      data-slide="prev"
                    >
                      <i class="tim-icons icon-minimal-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a
                      class="carousel-control-next"
                      href="#myCarousel"
                      role="button"
                      data-slide="next"
                    >
                      <i class="tim-icons icon-minimal-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 px-1">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="w-20">
                  <div class="info-icon text-center icon-warning shadow-warning">
                    <i class="tim-icons icon-chat-33"></i>
                    <p>AG旗舰厅</p>
                  </div>
                </div>
                <div class="w-20">
                  <div class="info-icon text-center icon-primary shadow-primary">
                    <i class="tim-icons icon-shape-star"></i>
                    <p>AG国际厅</p>
                  </div>
                </div>
                <div class="w-20">
                  <div class="info-icon text-center icon-success shadow-success">
                    <i class="tim-icons icon-single-02"></i>
                    <p>AG捕鱼王</p>
                  </div>
                </div>
                <div class="w-20">
                  <div class="info-icon text-center icon-warning shadow-warning">
                    <i class="tim-icons icon-chat-33"></i>
                    <p>电子游戏</p>
                  </div>
                </div>
                <div class="w-20">
                  <div class="info-icon text-center icon-danger shadow-danger">
                    <i class="tim-icons icon-molecule-40"></i>
                    <p>沙巴体育</p>
                  </div>
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
                  class="btn-warning "
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
              >热门游戏</a>
            </li>
            <li class="nav-item w-33">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#link2"
                role="tablist"
                aria-expanded="false"
              >真人视讯</a>
            </li>
            <li class="nav-item w-33">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#link3"
                role="tablist"
                aria-expanded="false"
              >电子游戏</a>
            </li>
          </ul>
          <div class="tab-content tab-space p-0">
            <div class="tab-pane show active" id="link1" aria-expanded="true">
              <div class="container shadow-lg">
                <chartjs backgroundcolor="#ff8d72"></chartjs>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/201905098b86ac2b5ed84d349b5413336407acc2.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>亚游电竞</h4>
                      <p>看直播 投比赛 尽享电竞乐趣</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190528e5478ab16d8a4c14805c1b62251d4869.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>乐门彩票</h4>
                      <p>百万奖池等你来赢</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116f703eef0847744918ee6564887564951.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>AS电玩城</h4>
                      <p>真人游戏结果！更快网速体验！</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190425039f1d5c4d51457c96cb792875a99219.jpg"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>VR彩票</h4>
                      <p>热门彩种来袭 超高洗码</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116836d92c12f824745bfe88ae136bebf17.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>YOPLAY街机</h4>
                      <p>回到小时候玩街机电玩的感觉</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116c81ce9d9d81d4d71a25573d8a514118c.jpg"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>AG体育</h4>
                      <p>专业欧盘 高赔首选</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
              </div>
            </div>
            <div class="tab-pane" id="link2" aria-expanded="false">
              <div class="container shadow-lg">
                <img
                  src="https://static-h5.swcqlz.com/cms/cms_pic/201901164404c1e0ef244f03bf219ec35af5cbc3.jpg"
                  alt
                >
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116c06d119c28604be1b114cbab79323e7f.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>亚游电竞</h4>
                      <p>看直播 投比赛 尽享电竞乐趣</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/201905287706b5246279410698bd148198bb2421.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>乐门彩票</h4>
                      <p>百万奖池等你来赢</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/201905287706b5246279410698bd148198bb2421.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>AS电玩城</h4>
                      <p>真人游戏结果！更快网速体验！</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/2019011697bb7dea9f854c5ab27be45d174fcb37.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>VR彩票</h4>
                      <p>热门彩种来袭 超高洗码</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/201901168db4495073ab4b4ab6bc887573504778.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>YOPLAY街机</h4>
                      <p>回到小时候玩街机电玩的感觉</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
                <div class="row d-flex justify-content-between py-2">
                  <div class="d-flex">
                    <img
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116df9f4d2849ed42d3a14873d3b585ec2e.png"
                      alt
                    >
                    <span class="game_rBox">
                      <h4>AG体育</h4>
                      <p>专业欧盘 高赔首选</p>
                    </span>
                  </div>
                  <p class="mycolor-icon">
                    <button class="btn btn-warning animation-on-hover" type="button">开始游戏</button>
                  </p>
                </div>
                <hr class="hr-mobile">
              </div>
            </div>
            <div class="tab-pane" id="link3" aria-expanded="false">
              <div class="col-12 px-1">
                <img
                  alt
                  src="https://static-h5.swcqlz.com/cms/cms_pic/20190116f71077c971884321bb7bdac1bd52a83b.jpg"
                >
              </div>
              <div class="col-12 row px-0 mt-1">
                <div class="col-6 px-2">
                  <div class="card shadow-wl">
                    <img
                      class="card-img-top"
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116f0f6339f888147628ee46134e29bef67.png"
                      alt="Card image cap"
                    >
                    <div class="card-body">
                      <h4 class="card-title">飞禽走兽多人版</h4>
                    </div>
                  </div>
                </div>
                <div class="col-6 px-2">
                  <div class="card shadow-wl">
                    <img
                      class="card-img-top"
                      src="https://static-h5.swcqlz.com/cms/cms_pic/20190116d2c5f5f3a9924dd4ad82138d589d4646.png"
                      alt="Card image cap"
                    >
                    <div class="card-body">
                      <h4 class="card-title">金拉霸</h4>
                    </div>
                  </div>
                </div>
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
                      >
                    </div>
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/201905315db58b639a4f478fab8b1d45f12f22a8.jpg"
                        alt
                      >
                    </div>
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/20180531015c5365ee7a4bc1b4723d85c0908315.jpg"
                        alt
                      >
                    </div>
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/201905312940e4b826e949499dc51c3cdb810e3b.jpg"
                        alt
                      >
                    </div>
                    <div class="carousel-cell">
                      <img
                        src="https://static-h5.swcqlz.com/cms/cms_pic/201905315db58b639a4f478fab8b1d45f12f22a8.jpg"
                        alt
                      >
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
                <img class="card-img-bottom" src="/assets/img/banner_wl.jpg" alt="Card image cap">
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
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Flickity from "vue-flickity";
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
import chartjs from "../desktop/chartjs";
export default {
  components: {
    navbars,
    asides,
    footers,
    chartjs,
    Flickity
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
      ismenu: false,
      messages: "./index",
      promote: "./promote",
      welcome: "/",
      lobby: "./lobby",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
    };
  },
  computed: {
    swiper() {
      return this.$refs.mySwiper.swiper;
    }
  },
  mounted() {},
  methods: {
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
  }
};
</script>
<style scoped>
</style>
