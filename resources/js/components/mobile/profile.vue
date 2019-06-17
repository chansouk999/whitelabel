<template>
  <div>
    <navbars></navbars>
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
            <!-- <navbars></navbars> -->
            <!-- End Navbar -->
            <div class="content">
              <div class="row">
                <div class="col-md-4">
                  <div class="card card-user">
                    <div class="card-body">
                      <p class="card-text"></p>
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="javascript:void(0)">
                          <img class="avatar" src="assets/img/emilyz.jpg" alt="...">
                          <h5 class="title">Mike Andrew</h5>
                        </a>
                        <p class="description">Ceo/Co-Founder</p>
                      </div>

                      <div class="card-description p-0 m-0">
                        <div class="card color-bg py-0 my-0">
                          <div class="card-body h-0">
                            <h4 class="card-title">Card title</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p
                              class="card-text"
                            >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="card-footer">
                              <a href="#" class="card-link">Card link</a>
                              <a href="#" class="card-link">Another link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 px-1">
                      <div class="card card-stats">
                        <div class="card-footer">
                          <div class="row">
                            <div class="w-25">
                              <div class="info-icon text-center icon-warning shadow-warning">
                                <i class="tim-icons icon-credit-card"></i>
                                <p>AG旗舰厅</p>
                              </div>
                            </div>
                            <div class="w-25">
                              <div class="info-icon text-center icon-primary shadow-primary">
                                <i class="tim-icons icon-shape-star"></i>
                                <p>AG国际厅</p>
                              </div>
                            </div>
                            <div class="w-25">
                              <div class="info-icon text-center icon-success shadow-success">
                                <i class="tim-icons icon-single-02"></i>
                                <p>AG捕鱼王</p>
                              </div>
                            </div>
                            <div class="w-25">
                              <div class="info-icon text-center icon-danger shadow-danger">
                                <i class="tim-icons icon-molecule-40"></i>
                                <p>沙巴体育</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="title">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-md-5 pr-md-1">
                            <div class="form-group">
                              <label>Company (disabled)</label>
                              <input
                                type="text"
                                class="form-control"
                                disabled
                                value="Creative Code Inc."
                              >
                            </div>
                          </div>
                          <div class="col-md-3 px-md-1">
                            <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control" value="michael23">
                            </div>
                          </div>
                          <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                              <label>Email address</label>
                              <input type="email" class="form-control" placeholder="mike@email.com">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control" value="Mike">
                            </div>
                          </div>
                          <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control" value="Andrew">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Address</label>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Home Address"
                                value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                              >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                              <label>City</label>
                              <input type="text" class="form-control" value="Mike">
                            </div>
                          </div>
                          <div class="col-md-4 px-md-1">
                            <div class="form-group">
                              <label>Country</label>
                              <input type="text" class="form-control" value="Andrew">
                            </div>
                          </div>
                          <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                              <label>Postal Code</label>
                              <input type="number" class="form-control" placeholder="ZIP Code">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>About Me</label>
                              <textarea rows="4" cols="80" class="form-control">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <setting></setting>
  </div>
</template>
<script>
import setting from "./settig_mobile";
import Flickity from "vue-flickity";
import navbars from "./navbar";
import asides from "./asides";
import footers from "./footers";
import chartjs from "../desktop/chartjs";
export default {
  components: {
    setting,
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
    "stock6"
  ]
};
</script>
<style scoped>
</style>
