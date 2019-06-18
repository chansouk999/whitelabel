<template>
  <div>
    <app-navbar
      :recommend_friends="recommend_friends"
      :message="message"
      :myaccount_tra="myaccount_tra"
      :myprivilege="myprivilege"
      :gamelobby="gamelobby"
      :recharge="recharge"
      :withdraw="withdraw"
      :currentlang="currentlang"
    ></app-navbar>
    <div class="container">
      <div class="row">
        <div class="col-2">
          <app-aside
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
          ></app-aside>
        </div>

        <div class="col-xl-10 col-sm-12">
          <div class="container-wrap">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active">
                  <img src="assets/img/lobby1.jpg">
                </li>
                <li data-target="#myCarousel" data-slide-to="1" class>
                  <img src="assets/img/lobby2.jpg">
                </li>
                <li data-target="#myCarousel" data-slide-to="2" class>
                  <img src="assets/img/lobby3.jpg">
                </li>
              </ol>-->

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    class="first-slide"
                    src="assets/img/lobby1.jpg"
                    alt="First
              slide"
                  >
                  <div class="container">
                    <div class="slide-caption">
                      <h2 class="slide-caption__title">Mussum Ipsum</h2>
                      <p class="slide-caption__desc">Mé faiz elementum girarzis, nisi eros vermeio.</p>
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
                    src="assets/img/lobby2.jpg"
                    alt="Second
              slide"
                  >
                  <div class="container">
                    <div class="slide-captiontwo">
                      <h2 class="slide-caption__title">Mussum Ipsum</h2>
                      <p class="slide-caption__desc">Mé faiz elementum girarzis, nisi eros vermeio.</p>
                      <div class="d-flex">
                        <a href="#" class="btn btn-danger animation-on-hover">Learn More</a>
                        <a href="#" class="btn btn-danger btn-simple">Learn More</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    class="fourth-slide"
                    src="assets/img/lobby3.jpg"
                    alt="fourth
              slide"
                  >
                  <div class="container">
                    <div class="slide-captiontwo">
                      <h2 class="slide-caption__title">Mussum Ipsum</h2>
                      <p class="slide-caption__desc">Mé faiz elementum girarzis, nisi eros vermeio.</p>
                      <div class="d-flex">
                        <a href="#" class="btn btn-danger animation-on-hover">Learn More</a>
                        <a href="#" class="btn btn-danger btn-simple">Learn More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <img src="assets/img/arrow-left.png">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <img src="assets/img/arrow-right.png">
                <span class="sr-only">Next</span>
              </a>-->
            </div>
          </div>
          <!-- Sidebar -->
          <div class="col-md-12">
            <div class="slide-container">
              <div class="row">
                <div class="col-md-4">
                  <div class="wrapper">
                    <div class="clash-card barbarian">
                      <div class="clash-card__image clash-card__image--barbarian">
                        <img src="assets/img/barbarian.png" alt="barbarian">
                      </div>
                      <div class="clash-card__unit-name">竞咪</div>
                      <div
                        class="clash-card__unit-description barbarian-description"
                      >独家首创：自主切牌。玩家不仅可以与主播进行语音文字聊天，还可以全程主导整个游戏节奏，全方位拉近玩家与现场真实游戏互动的体验。</div>

                      <div
                        class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix"
                      >
                        <div class="one-third">
                          <div class="stat">
                            20
                            <sup>S</sup>
                          </div>
                          <div class="stat-value">Training</div>
                        </div>
                        <a href>
                          <div class="w-75">
                            <div class="stat">16</div>
                            <div class="stat-value">Speed</div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <!-- end clash-card barbarian-->
                  </div>
                  <!-- end wrapper -->
                </div>
                <div class="col-md-4">
                  <div class="wrapper">
                    <div class="clash-card archer">
                      <div class="clash-card__image clash-card__image--archer">
                        <img src="assets/img/archer.png" alt="archer">
                      </div>
                      <div class="clash-card__unit-name">包桌</div>
                      <div
                        class="clash-card__unit-description archer-description"
                      >VIP包桌可自行控制游戏节奏，尽享更换荷官、飞牌及换靴等优越功能，成就更高级及自主的娱乐享受。</div>

                      <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                        <div class="one-third">
                          <div class="stat">
                            25
                            <sup>S</sup>
                          </div>
                          <div class="stat-value">Training</div>
                        </div>

                        <div class="one-third">
                          <div class="stat">24</div>
                          <div class="stat-value">Speed</div>
                        </div>

                        <div class="one-third no-border">
                          <div class="stat">300</div>
                          <div class="stat-value">Cost</div>
                        </div>
                      </div>
                    </div>
                    <!-- end clash-card archer-->
                  </div>
                  <!-- end wrapper -->
                </div>
                <div class="col-md-4 mb-5">
                  <div class="wrapper">
                    <div class="clash-card giant">
                      <div class="clash-card__image clash-card__image--giant">
                        <img src="assets/img/giant.png" alt="giant">
                      </div>
                      <div class="clash-card__unit-name">多台</div>
                      <div
                        class="clash-card__unit-description giant-description"
                      >私人定制不同类型的游戏同时投注，随心所欲，多张桌枱任意切换。</div>

                      <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                        <div class="one-third">
                          <div class="stat">
                            2
                            <sup>M</sup>
                          </div>
                          <div class="stat-value">Training</div>
                        </div>

                        <div class="one-third">
                          <div class="stat">12</div>
                          <div class="stat-value">Speed</div>
                        </div>

                        <div class="one-third no-border">
                          <div class="stat">2250</div>
                          <div class="stat-value">Cost</div>
                        </div>
                      </div>
                    </div>
                    <!-- end clash-card giant-->
                  </div>
                  <!-- end wrapper -->
                </div>
              </div>
            </div>
            <!-- end container -->
          </div>
          <div class="row content">
            <div class="col-4">
              <div class="ft-recipe">
                <div class="ft-recipe__thumb">
                  <h3>Today's Featured Recipe</h3>
                  <img
                    src="https://zippypaws.com/app/uploads/2018/05/strawberry-waffles-1024x668.jpg"
                    alt="Strawberry Waffle"
                  >
                </div>
                <div class="ft-recipe__content">
                  <header class="content__header">
                    <div class="row-wrapper">
                      <h2 class="recipe-title">Strawberry Waffle</h2>
                      <div class="user-rating"></div>
                    </div>
                    <ul class="recipe-details">
                      <li class="recipe-details-item time">
                        <i class="ion ion-ios-clock-outline"></i>
                        <span class="value">20</span>
                        <span class="title">Minutes</span>
                      </li>
                      <li class="recipe-details-item ingredients">
                        <i class="ion ion-ios-book-outline"></i>
                        <span class="value">5</span>
                        <span class="title">Ingredients</span>
                      </li>
                      <li class="recipe-details-item servings">
                        <i class="ion ion-ios-person-outline"></i>
                        <span class="value">4-6</span>
                        <span class="title">Serving</span>
                      </li>
                    </ul>
                  </header>
                  <p
                    class="description"
                  >There’s no better way to celebrate May being National Strawberry Month than by sharing a sweet treat with your pup!!! Strawberries...</p>
                  <footer class="content__footer">
                    <a @click="runwindow">
                      <h1>Play Lec68</h1>
                    </a>
                    <button @click="runwindow">PLAY</button>
                  </footer>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <app-footer></app-footer>
            <app-alertsidebar></app-alertsidebar>
          </div>
          <!-- /.row -->
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import navbar from "./desktop/navbar";
import aside from "./desktop/asides";
import alertsidebar from "./alertsidebar";
import footers from "./desktop/footers";

export default {
  components: {
    "app-navbar": navbar,
    "app-aside": aside,
    "app-footer": footers,
    "app-alertsidebar": alertsidebar
  },
  data() {
    return {
      val: "",
      id: null,
      provider_name: null,
      balance: null,
      user_id: null,
      pro_id: null,
      name: null,
      firstname: null,
      lastname: null,
      email: null,
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
  },
  mounted() {
    console.log("HELELEOEO");

    this.userdata();
  },
  methods: {
    runwindow() {
      axios.get('/checkconnection').then(res=>{
        if(res.data.success=='timeout'){
          alert('Your session timeout refresh your browser')
          location.href = "/"
        }else{
            //  window.open('http://localhost:8003/redirect?&name='+this.email+'&urlback=http://localhost:8004','LEC68.COM',"width=1920,height=1080,location=no");
             window.open('http://lec68.com/redirect?&name='+this.email+'&urlback=http://www.ecg9.com','LEC68.COM',"width=1920,height=1080,location=no");
        }
      });

      //  window.open('http://lec68.com/redirect?&name='+this.email+'&urlback=http://159.138.130.64','LEC68.COM',"width=1920,height=1080,location=no");
    },
    gotogame() {
      // console.log(this.firstname+this.lastname)

      let config = {
        headers: { "X-CSRF-TOKEN": this.csrf }
      };
      axios
        .post(
          "http://localhost:8003/checkapiuser",
          {
            id: this.id,
            user_id: this.user_id,
            provider_name: this.provider_name,
            balance: this.balance,
            pro_id: this.pro_id,
            name: this.name,
            email: this.email
          },
          config
        )
        .then(res => {
          console.log(res.data);
          window.open("http://localhost:8003/redirect", "_blank");
        })
        .catch(er => {
          console.log(er.res);
        });
    },
    userdata() {
      axios
        .get("/userdetaildata")
        .then(res => {
          console.log(res.data);
          this.id = res.data[0].id;
          this.user_id = res.data[0].user_id;
          this.provider_name = res.data[0].provider_name;
          this.balance = res.data[0].userBalance;
          this.pro_id = res.data[0].pro_id;
          this.name = res.data[0].name;
          this.email = res.data[0].email;
          this.firstname = res.data[0].id;
          this.lastname = res.data[0].secret;
          // $('.id').val(this.id);
          // $('.provider_name').val(this.provider_name);
          // $('.balance').val(this.balance);
          // $('.pro_id').val(this.pro_id);
          // $('.name').val(this.name);
          // $('.email').val(this.email);
        })
        .catch(er => {
          console.log(er.res);
        });
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
  ]
};
</script>
<style scoped>
</style>

