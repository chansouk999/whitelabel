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
                <p class="headTxt">Search</p>
                <a href="#" class="item-link" placeholder="With Font Awesome Icons">【热点新闻】中美贸易战事件</a>
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
              <div class="shadow-lg">
                <chartjs backgroundcolor="#ff8d72"></chartjs>
                <div class="slide-container">
                  <div class="wrapper">
                    <div class="clash-card barbarian">
                      <div class="clash-card__image clash-card__image--barbarian">
                        <img
                          src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/barbarian.png"
                          alt="barbarian"
                        >
                      </div>
                      <div class="clash-card__level clash-card__level--barbarian">Level 4</div>
                      <div class="clash-card__unit-name">The Barbarian</div>
                      <div
                        class="clash-card__unit-description barbarian-description"
                      >The Barbarian is a kilt-clad Scottish warrior with an angry, battle-ready expression, hungry for destruction. He has Killer yellow horseshoe mustache.</div>

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

                        <div class="one-third">
                          <div class="stat">16</div>
                          <div class="stat-value">Speed</div>
                        </div>

                        <div class="one-third no-border">
                          <div class="stat">150</div>
                          <div class="stat-value">Cost</div>
                        </div>
                      </div>
                    </div>
                    <!-- end clash-card barbarian-->
                  </div>
                  <!-- end wrapper -->

                  <div class="wrapper">
                    <div class="clash-card archer">
                      <div class="clash-card__image clash-card__image--archer">
                        <img
                          src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/archer.png"
                          alt="archer"
                        >
                      </div>
                      <div class="clash-card__level clash-card__level--archer">Level 5</div>
                      <div class="clash-card__unit-name">The Archer</div>
                      <div
                        class="clash-card__unit-description archer-description"
                      >The Archer is a female warrior with sharp eyes. She wears a short, light green dress, a hooded cape, a leather belt and an attached small pouch.</div>

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

                  <div class="wrapper">
                    <div class="clash-card giant">
                      <div class="clash-card__image clash-card__image--giant">
                        <img
                          src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/giant.png"
                          alt="giant"
                        >
                      </div>
                      <div class="clash-card__level clash-card__level--giant">Level 5</div>
                      <div class="clash-card__unit-name">The Giant</div>
                      <div
                        class="clash-card__unit-description giant-description"
                      >Slow, steady and powerful, Giants are massive warriors that soak up huge amounts of damage. Show them a turret or cannon and you'll see their fury unleashed!</div>

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

                  <div class="wrapper">
                    <div class="clash-card goblin">
                      <div class="clash-card__image clash-card__image--goblin">
                        <img
                          src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/goblin.png"
                          alt="goblin"
                        >
                      </div>
                      <div class="clash-card__level clash-card__level--goblin">Level 5</div>
                      <div class="clash-card__unit-name">The Goblin</div>
                      <div
                        class="clash-card__unit-description goblin-description"
                      >These pesky little creatures only have eyes for one thing: LOOT! They are faster than a Spring Trap, and their hunger for resources is limitless.</div>

                      <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                        <div class="one-third">
                          <div class="stat">
                            30
                            <sup>S</sup>
                          </div>
                          <div class="stat-value">Training</div>
                        </div>

                        <div class="one-third">
                          <div class="stat">32</div>
                          <div class="stat-value">Speed</div>
                        </div>

                        <div class="one-third no-border">
                          <div class="stat">100</div>
                          <div class="stat-value">Cost</div>
                        </div>
                      </div>
                    </div>
                    <!-- end clash-card goblin-->
                  </div>
                  <!-- end wrapper -->

                  <div class="wrapper mb-5">
                    <div class="clash-card wizard">
                      <div class="clash-card__image clash-card__image--wizard">
                        <img
                          src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/wizard.png"
                          alt="wizard"
                        >
                      </div>
                      <div class="clash-card__level clash-card__level--wizard">Level 6</div>
                      <div class="clash-card__unit-name">The Wizard</div>
                      <div
                        class="clash-card__unit-description wizard-description"
                      >The Wizard is a terrifying presence on the battlefield. Pair him up with some of his fellows and cast concentrated blasts of destruction on anything, land or sky!</div>

                      <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                        <div class="one-third">
                          <div class="stat">
                            5
                            <sup>M</sup>
                          </div>
                          <div class="stat-value">Training</div>
                        </div>

                        <div class="one-third">
                          <div class="stat">16</div>
                          <div class="stat-value">Speed</div>
                        </div>

                        <div class="one-third no-border">
                          <div class="stat">4000</div>
                          <div class="stat-value">Cost</div>
                        </div>
                      </div>
                    </div>
                    <!-- end clash-card wizard-->
                  </div>
                  <!-- end wrapper -->
                </div>
                <!-- end container -->
              </div>
            </div>
            <div class="tab-pane" id="link2" aria-expanded="false"></div>
            <div class="tab-pane" id="link3" aria-expanded="false"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
import chartjs from "../desktop/chartjs";
export default {
  components: {
    navbars,
    asides,
    footers,
    chartjs
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
  mounted() {},

  methods: {
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
