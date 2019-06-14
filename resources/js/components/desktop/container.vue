<template>
  <div>
    <navbars
      :recommend_friends="recommend_friends"
      :message="message"
      :myaccount_tra="myaccount_tra"
      :myprivilege="myprivilege"
      :gamelobby="gamelobby"
      :recharge="recharge"
      :withdraw="withdraw"
      :currentlang="currentlang"
      :login="login"
      :register="register"
      :free_trial="free_trial"
    ></navbars>
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
            :us_stock="us_stock"
            :cryptocurrencies="cryptocurrencies"
            :chines_stock="chines_stock"
            :lobby="lobby"
          ></asides>
        </div>
        <div class="col-xl-10 col-sm-12">
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
                        <div class="container">
                          <div class="slide-caption">
                            <h2 class="slide-caption__title">Mussum Ipsum</h2>
                            <p
                              class="slide-caption__desc"
                            >Mé faiz elementum girarzis, nisi eros vermeio.</p>
                            <div class="d-flex">
                              <a href="#" class="btn btn-danger animation-on-hover">Learn More</a>
                              <a href="#" class="btn btn-danger btn-simple">Learn More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img
                          class="second-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/20190423b2ae4cfc35c14da4b2da530f147887c5.jpg"
                          alt="Second
              slide"
                        >
                        <div class="container">
                          <div class="slide-captiontwo">
                            <h2 class="slide-caption__title">Mussum Ipsum</h2>
                            <p
                              class="slide-caption__desc"
                            >Mé faiz elementum girarzis, nisi eros vermeio.</p>
                            <div class="d-flex">
                              <a href="#" class="btn btn-danger animation-on-hover">Learn More</a>
                              <a href="#" class="btn btn-danger btn-simple">Learn More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img
                          class="third-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/20190409837ef9651b994dde86cbf299a2d5a599.jpg"
                          alt="Third
              slide"
                        >
                        <div class="container">
                          <div class="slide-captionthree">
                            <h2 class="slide-caption__title">Mussum Ipsum</h2>
                            <p
                              class="slide-caption__desc"
                            >Mé faiz elementum girarzis, nisi eros vermeio.</p>
                            <div class="d-flex">
                              <a href="#" class="btn btn-danger animation-on-hover">Learn More</a>
                              <a href="#" class="btn btn-danger btn-simple">Learn More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img
                          class="fourd-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/201904188594c2980f2e4ffa8a7120ff2406d97a.jpg"
                          alt="Third
              slide"
                        >
                        <div class="container">
                          <div class="slide-captionfour">
                            <h2 class="slide-caption__title">Mussum Ipsum</h2>
                            <p
                              class="slide-caption__desc"
                            >Mé faiz elementum girarzis, nisi eros vermeio.</p>
                            <div class="d-flex">
                              <a href="#" class="btn btn-danger animation-on-hover">Learn More</a>
                              <a href="#" class="btn btn-danger btn-simple">Learn More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img
                          class="five-slide"
                          src="https://static-pc.swcqlz.com/cms/cms_pic/2019042254cc8ec48bfe4d89b4b377df2fbbcc26.jpg"
                          alt="Five
              slide"
                        >
                        <div class="container">
                          <div class="slide-captionfive">
                            <h2 class="slide-caption__title">Mussum Ipsum</h2>
                            <p
                              class="slide-caption__desc"
                            >Mé faiz elementum girarzis, nisi eros vermeio.</p>
                            <div class="d-flex">
                              <a href="#" class="btn btn-danger animation-on-hover">Learn More</a>
                              <a href="#" class="btn btn-danger btn-simple">Learn More</a>
                            </div>
                          </div>
                        </div>
                      </div>.
                    </div>
                    <a
                      class="carousel-control-prev"
                      href="#myCarousel"
                      role="button"
                      data-slide="prev"
                    >
                      <img src="assets/img/arrow-left.png">
                      <span class="sr-only">Previous</span>
                    </a>
                    <a
                      class="carousel-control-next"
                      href="#myCarousel"
                      role="button"
                      data-slide="next"
                    >
                      <img src="assets/img/arrow-right.png">
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <!-- Sidebar -->
                <hr>
              </div>
            </div>
          </div>
          <div class="row">
            <footers></footers>
          </div>
          <div class="row">
            <app-alertsidebar></app-alertsidebar>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import alertsidebar from '../alertsidebar';
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
export default {
  components: {
    navbars,
    asides,
    footers,
    "app-alertsidebar": alertsidebar
  },
  data() {
    return {
      ismenu: false,
      messages: "./index",
      promote: "./promote",
      welcome: "/",
      lobby: "./lobby",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
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
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6",
    "us_stock",
    "cryptocurrencies",
    "chines_stock",
    "lobby"
  ],
  mounted() {},

  methods: {
    myaccount() {
      $("#myaccountlink")[0].click();
    },
    withDrawClick() {
      $("#withDrawClick")[0].click();
    },
    rechargeClick() {
      $("#recharge")[0].click();
    }
  }
};
</script>
<style scoped>
</style>
