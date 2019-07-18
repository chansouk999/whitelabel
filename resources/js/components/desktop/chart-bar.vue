<template>
  <div class="u-content u-account">
    <div class="section-2">
      <div class="unit-wrap clearfix">
        <div class="chart-wrap clearfix">
          <!-- <div class="btns rebate-switch-js">
            <a class="active pointer-link" data-game-kind="VIDEO">
              <font class="verticalalign">
                <font class="verticalalign">Live video video</font>
              </font>
            </a>
            <a class="pointer-link" data-game-kind="SLOT">
              <font class="verticalalign">
                <font class="verticalalign">game</font>
              </font>
            </a>
            <a class="pointer-link" data-game-kind="FISHING">
              <font class="verticalalign">
                <font class="verticalalign">fishing game</font>
              </font>
            </a>
            <a class="pointer-link" data-game-kind="SPORT">
              <font class="verticalalign">
                <font class="verticalalign">sports e-sports</font>
              </font>
            </a>
          </div>-->
          <ul class="amount pull-left">
            <li>
              <font class="verticalalign">
                <font class="verticalalign">{{formatNumber(Amount5)}}</font>
              </font>
            </li>
            <li>
              <font class="verticalalign">
                <font class="verticalalign">{{formatNumber(Amount4)}}</font>
              </font>
            </li>
            <li>
              <font class="verticalalign">
                <font class="verticalalign">{{formatNumber(Amount3)}}</font>
              </font>
            </li>
            <li>
              <font class="verticalalign">
                <font class="verticalalign">{{formatNumber(Amount2)}}</font>
              </font>
            </li>
            <li>
              <font class="verticalalign">
                <font class="verticalalign">{{formatNumber(Amount1)}}</font>
              </font>
            </li>
            <li>
              <font class="verticalalign">
                <font class="verticalalign">{{formatNumber(Amount0)}}</font>
              </font>
            </li>
          </ul>
          <ul class="pull-left bars">
            <li class="new" style="display:none">
              <!-- <span class="level">新会员</span> -->
            </li>
            <li>
              <em>
                <font class="verticalalign">
                  <font class="verticalalign">{{percentage0}}</font>
                </font>
              </em>
              <span class="tip-message">
                <font class="verticalalign">
                  <!-- <font class="verticalalign">can enjoy the wash code</font> -->
                </font>
              </span>
              <span
                :class="totalbet>0 && totalbet < Amount1 ? 'bar null orange' : 'bar null'"
                style="height: 30px;"
              ></span>
              <span class="level">
                <i class="crown crown-1"></i>
                <font class="verticalalign">
                  <font class="verticalalign" style="font-size: 13px;">{{title0}}</font>
                </font>
              </span>
            </li>
            <li>
              <em>
                <font class="verticalalign">
                  <font class="verticalalign">{{percentage1}}</font>
                </font>
              </em>
              <span class="tip-message">
                <font class="verticalalign">
                  <!-- <font class="verticalalign">can enjoy the wash code</font> -->
                </font>
              </span>
              <span
                :class="totalbet>=Amount1 && totalbet < Amount2? 'bar null orange' : 'bar null'"
                style="height: 60px;"
              ></span>
              <span class="level">
                <i class="crown crown-2"></i>
                <font class="verticalalign">
                  <font class="verticalalign" style="font-size: 13px;">{{title1}}</font>
                </font>
              </span>
            </li>
            <li>
              <em>
                <font class="verticalalign">
                  <font class="verticalalign">{{percentage2}}</font>
                </font>
              </em>
              <span class="tip-message">
                <font class="verticalalign">
                  <!-- <font class="verticalalign" style="font-size: 13px;">can enjoy the wash code</font> -->
                </font>
              </span>
              <span
                :class="totalbet>=Amount2 && totalbet < Amount3? 'bar null orange' : 'bar null'"
                style="height: 90px;"
              ></span>
              <span class="level">
                <i class="crown"></i>
                <font class="verticalalign">
                  <font class="verticalalign" style="font-size: 13px;">{{title2}}</font>
                </font>
              </span>
            </li>
            <li>
              <em>
                <font class="verticalalign">
                  <font class="verticalalign">{{percentage3}}</font>
                </font>
              </em>
              <span class="tip-message">
                <font class="verticalalign">
                  <!-- <font class="verticalalign">can enjoy the wash code</font> -->
                </font>
              </span>
              <span
                :class="totalbet>=Amount3 && totalbet < Amount4 ? 'bar null orange' : 'bar null'"
                style="height: 120px;"
              ></span>
              <span class="level">
                <i class="crown"></i>
                <font class="verticalalign">
                  <font class="verticalalign">{{title3}}</font>
                </font>
              </span>
            </li>
            <li>
              <em>
                <font class="verticalalign">
                  <font class="verticalalign">{{percentage4}}</font>
                </font>
              </em>
              <span class="tip-message">
                <font class="verticalalign">
                  <!-- <font class="verticalalign">can enjoy the wash code</font> -->
                </font>
              </span>
              <span
                :class="totalbet>=Amount4 && totalbet < Amount5 ? 'bar null orange' : 'bar null'"
                style="height: 150px;"
              ></span>
              <span class="level">
                <i class="crown"></i>
                <font class="verticalalign">
                  <font class="verticalalign">{{title4}}</font>
                </font>
              </span>
            </li>
            <li>
              <em>
                <font class="verticalalign">
                  <font class="verticalalign">{{percentage5}}</font>
                </font>
              </em>
              <span class="tip-message">
                <font class="verticalalign">
                  <!-- <font class="verticalalign">can enjoy the wash code</font> -->
                </font>
              </span>
              <span
                :class="totalbet >= Amount5 ? 'bar null orange' : 'bar null'"
                style="height: 180px;"
              ></span>
              <span class="level">
                <i class="crown"></i>
                <font class="verticalalign">
                  <font class="verticalalign">{{title5}}</font>
                </font>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios, * as others from "axios";
export default {
  data() {
    return {
      totalbet: "",

      Amount0: "",
      Amount1: "",
      Amount2: "",
      Amount3: "",
      Amount4: "",
      Amount5: "",

      title0: "",
      title1: "",
      title2: "",
      title3: "",
      title4: "",
      title5: "",

      percentage0: "",
      percentage1: "",
      percentage2: "",
      percentage3: "",
      percentage4: "",
      percentage5: ""
    };
  },
  mounted() {
    this.getuserbet();
    // this.formatNumber();
  },
  methods: {
    getuserbet() {
      axios.get("/getUserBet").then(response => {
        this.totalbet = response.data["totalbet"];
        let responses = response.data[0];
        // Amount
        this.Amount0 = responses[0].Amount;
        this.Amount1 = responses[1].Amount;
        this.Amount2 = responses[2].Amount;
        this.Amount3 = responses[3].Amount;
        this.Amount4 = responses[4].Amount;
        this.Amount5 = responses[5].Amount;

        // title
        this.title0 = responses[0].title;
        this.title1 = responses[1].title;
        this.title2 = responses[2].title;
        this.title3 = responses[3].title;
        this.title4 = responses[4].title;
        this.title5 = responses[5].title;

        // percentage
        this.percentage0 = currencyFormat(responses[0].percentage);
        this.percentage1 = currencyFormat(responses[1].percentage);
        this.percentage2 = currencyFormat(responses[2].percentage);
        this.percentage3 = currencyFormat(responses[3].percentage);
        this.percentage4 = currencyFormat(responses[4].percentage);
        this.percentage5 = currencyFormat(responses[5].percentage);

        function currencyFormat(num) {
          return num.toFixed(2) + "%"; //.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }
      });
    },
    formatNumber(num) {
      return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
    }
  }
};
</script>
<style scoped>
@charset "UTF-8";
.orange {
  background-color: orange !important;
}

.vertical-align {
  vertical-align: inherit;
}

/* u_account styles */

.u-account .animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.u-account .fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight;
}

@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.u-account .fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

.u-account .section-1 {
  border-bottom: 1px solid #e8e8e8;
  padding: 30px 0;
}

.u-account .section-1 .pull-left {
  position: relative;
  height: 100px;
  padding-left: 1%;
  padding-right: 1%;
  width: 21.33333333333333%;
}

.u-account .section-1 .pull-left:before {
  content: "";
  height: 100px;
  width: 1px;
  background-color: #dbdbdb;
  position: absolute;
  top: 50%;
  left: 0;
  margin-top: -50px;
}

.u-account .section-1 .pull-left:first-child:before {
  content: none;
}

.u-account .section-1 .pull-left .icon-user-btn {
  font-size: 17px;
}

.u-account .section-1 .info {
  color: #594333;
  width: 36%;
}

.u-account .section-1 .info .media .media-body,
.u-account .section-1 .info .media .media-left {
  vertical-align: middle;
  width: auto;
}

.u-account .section-1 .info .media .media-left {
  padding-right: 16px;
}

.u-account .section-1 .info .media em {
  display: block;
  margin-bottom: 7px;
}

.u-account .section-1 .info .media span {
  border: 1px solid #f87604;
  color: #fff;
  display: block;
  font-family: "Berlin Sans FB";
  font-size: 12px;
  height: 16px;
  line-height: 14px;
  margin-bottom: 4px;
  margin-left: 10px;
  position: relative;
  text-align: center;
  width: 47px;
  background: #fc9702;
  background: -moz-linear-gradient(top, #fc9702 0%, #f77405 100%);
  background: -webkit-linear-gradient(top, #fc9702 0%, #f77405 100%);
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(#fc9702),
    to(#f77405)
  );
  background: -o-linear-gradient(top, #fc9702 0%, #f77405 100%);
  background: linear-gradient(to bottom, #fc9702 0%, #f77405 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fc9702', endColorstr='#f77405', GradientType=0);
}

.u-account .section-1 .info .media span .crown {
  /* background: url("../../images/user/crowns.png") no-repeat -15px -15px; */
  width: 17px;
  height: 16px;
  position: absolute;
  top: -2px;
  left: -10px;
}

.u-account .section-1 .info .media span.level-1:before {
  background-position: -62px -15px;
}

.u-account .section-1 .info .media span.level-2:before {
  background-position: -109px -15px;
}

.u-account .section-1 .info .media small {
  color: #aeaeae;
}

.u-account .section-1 .info ul.list-inline {
  margin: 10px 0 0;
  font-size: 0;
}

.u-account .section-1 .info ul.list-inline li {
  padding: 0;
  font-size: 12px;
  margin-left: 15px;
}

.u-account .section-1 .info ul.list-inline li:first-child {
  margin-left: 0;
}

.u-account .section-1 .info ul.list-inline li a {
  color: #594333;
  outline: none;
}

.u-account .section-1 .info ul.list-inline li a:hover {
  text-decoration: underline;
}

.u-account .section-1 .info ul.list-inline i {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  /* background-image: url("../../images/user/info_icons.png"); */
  margin-right: 5px;
  top: -2px;
}

.u-account .section-1 .info ul.list-inline i.icon-mobile {
  background-position: -15px -15px;
  width: 14px;
  height: 22px;
}

.u-account .section-1 .info ul.list-inline i.icon-card {
  background-position: -59px -15px;
  width: 25px;
  height: 19px;
}

.u-account .section-1 .info ul.list-inline i.icon-setting {
  /* background: url("../../images/user/setting.png") center center no-repeat; */
  background-size: cover;
  width: 23px;
  height: 23px;
}

.u-account .section-1 .stats {
  text-align: center;
}

.u-account .section-1 .stats .canvas-wrap {
  position: relative;
  /* background: url("../../images/user/progress_circle.png") center center no-repeat\9; */
  width: 71px;
  height: 72px;
  margin: 0 auto;
}

.u-account .section-1 .stats .canvas-wrap #procent {
  display: block;
  position: absolute;
  width: 71px;
  height: 72px;
  line-height: 72px;
  left: 0;
  top: 0;
  font-size: 21px;
  text-align: center;
  color: #ff6a00;
}

.u-account .section-1 .stats img {
  display: block;
  margin: 0 auto 6px;
}

.u-account .section-1 .stats span {
  color: #ff6a00;
}

.u-account .section-1 .stats span:after {
  content: "%";
  font-size: 16px;
}

.u-account .section-1 .balance {
  color: #3f3f3f;
  text-align: center;
  padding-top: 3px;
  padding-bottom: 3px;
}

.u-account .section-1 .balance span {
  display: block;
  font-size: 23px;
  color: #ff6a00;
  margin-bottom: 6px;
}

.u-account .section-1 .balance .btn {
  padding: 0;
  width: 88px;
  height: 22px;
  line-height: 20px;
  background-color: #e6e6e6;
  border: 1px solid #c8c8c8;
  border-radius: 0;
}

.u-account .section-1 .balance .btn i {
  margin-right: 5px;
}

.u-account .section-1 .balance .btn:focus,
.u-account .section-1 .balance .btn:hover {
  background-color: #d9d9d9;
}

.u-account .section-1 .two-btns {
  text-align: center;
}

.u-account .section-1 .two-btns .btn {
  display: block;
  width: 100%;
  height: 45px;
  border: 2px solid #544132;
  border-radius: 25px;
  color: #000;
  font-size: 18px;
  text-align: center;
  -webkit-transition: all 0.25s ease-in-out;
  -o-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
  line-height: 1.1;
}

.u-account .section-1 .two-btns .btn:hover {
  background-color: #544132;
  color: #fff;
}

.u-account .section-1 .two-btns .btn:hover span {
  color: #fff;
}

.u-account .section-1 .two-btns span {
  display: block;
  line-height: 100%;
  padding-top: 1px;
  color: #544132;
  font-size: 12px;
}

.u-account .section-1 .two-btns .btn-deposit {
  background-color: #544132;
  color: #fff;
  margin-bottom: 10px;
}

.u-account .section-1 .two-btns .btn-deposit:hover {
  background: none;
  color: #544132;
}

.u-account .section-1 .two-btns .btn-deposit:hover span {
  color: #544132;
}

.u-account .section-1 .two-btns .btn-deposit span {
  color: #fff;
}

@media (min-width: 1531px) {
  .u-account .section-1 .pull-left {
    padding-left: 3%;
    padding-right: 3%;
  }
  .u-account .section-1 .info {
    width: 35%;
  }
}

.u-account .section-2 {
  padding: 0px 0;
  border-bottom: 1px solid #e8e8e8;
}

.u-account .section-2 p {
  color: #a9a9a9;
}

.u-account .section-2 p span {
  color: #594333;
}

.u-account .section-2 .icon-gift {
  display: inline-block;
  vertical-align: middle;
  /* background: url("../../images/user/gift.png") no-repeat center; */
  width: 19px;
  height: 16px;
}

.u-account .section-2 .icon-exclamation-circle {
  display: inline-block;
  vertical-align: middle;
  /* background: url("../../images/user/exclamation-circle.png") no-repeat center; */
  width: 23px;
  height: 23px;
  margin-top: -5px;
}

.u-account .section-2 .unit-wrap {
  width: auto;
  margin: 0 auto;
}

.u-account .section-2 .unit-wrap .chart-wrap {
  float: left;
  width: 100%;
}

.u-account .section-2 .unit-wrap .u-balance {
  width: 35%;
  float: left;
  margin-left: 0;
}

@media (min-width: 1600px) {
  .u-account .section-2 .unit-wrap {
    width: 1100px;
  }
  .u-account .section-2 .chart-wrap {
    width: 50%;
  }
  .u-account .section-2 .u-balance {
    width: 50%;
    margin-left: 65px;
  }
}

.u-account .section-2 .chart-wrap {
  background: url("https://ag124.com/assets/images/user/chart_bg.jpg") no-repeat
    162px top;
  position: relative;
  height: 315px;
  margin-top: 25px;
}

.u-account .section-2 .chart-wrap .btns {
  position: absolute;
  margin-top: -10px;
  padding-left: 150px;
  text-align: center;
  z-index: 1;
}

.u-account .section-2 .chart-wrap .btns a {
  background: #fff;
  margin: 0 3px;
  padding: 2px 12px 3px;
  border: 1px solid #d1601a;
  border-radius: 15px;
  color: #d1601a;
  font-size: 12px;
  position: relative;
  top: -1px;
  outline: none;
  text-decoration: none;
  -webkit-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}

.u-account .section-2 .chart-wrap .btns a.active,
.u-account .section-2 .chart-wrap .btns a:hover {
  background: #d1601a;
  color: #fff;
}

.u-account .section-2 .chart-wrap .btns a.active:after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  left: 50%;
  bottom: -6px;
  margin-left: -6px;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 5px solid #d1601a;
}

.u-account .section-2 .chart-wrap ul.amount {
  padding-top: 62px;
  width: 155px;
  text-align: right;
  float: left;
}

.u-account .section-2 .chart-wrap ul.amount li {
  line-height: 2.2;
}

.u-account .section-2 .chart-wrap ul.bars {
  width: 455px;
  height: 100%;
  display: table;
  font-size: 0;
  float: left;
  position: relative;
  left: 0px;
}

.u-account .section-2 .chart-wrap ul.bars:before {
  content: "新会员";
  font-size: 14px;
  color: #333;
  position: absolute;
  left: -30px;
  bottom: 7px;
}

.u-account .section-2 .chart-wrap ul.bars li {
  width: 16.66666666666667%;
  font-size: 12px;
  text-align: center;
  display: table-cell;
  vertical-align: bottom;
}

.u-account .section-2 .chart-wrap ul.bars li em {
  display: block;
  color: #ff6a00;
  font-size: 18px;
}

.u-account .section-2 .chart-wrap ul.bars .bar {
  display: block;
  background-color: #ddd;
  margin: 10px 20px 0;
  height: 0;
  background: #ff9500;
  background: -moz-linear-gradient(top, #ff9500 0%, #ff5f39 100%);
  background: -webkit-linear-gradient(top, #ff9500 0%, #ff5f39 100%);
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(#ff9500),
    to(#ff5f39)
  );
  background: -o-linear-gradient(top, #ff9500 0%, #ff5f39 100%);
  background: linear-gradient(to bottom, #ff9500 0%, #ff5f39 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ff9500', endColorstr='#ff5f39', GradientType=0);
}

.u-account .section-2 .chart-wrap ul.bars .bar.null {
  background: #d4d4d4;
  filter: progid: DXImageTransform.Microsoft.gradient(enabled=false);
}

.u-account .section-2 .chart-wrap ul.bars .level {
  font-size: 14px;
  display: block;
  margin-bottom: 7px;
}

.u-account .section-2 .chart-wrap ul.bars .level .crown {
  display: block;
  width: 17px;
  height: 17px;
  /* background-image: url("../../images/user/crowns.png"); */
  background-position: -15px -15px;
  margin: 9px auto 2px;
}

.u-account .section-2 .chart-wrap ul.bars .level .crown.crown-1 {
  background-position: -62px -15px;
}

.u-account .section-2 .chart-wrap ul.bars .level .crown.crown-2 {
  background-position: -109px -15px;
}

.u-account .section-2 .chart-wrap ul.bars .is-here {
  display: block;
  background-color: #f6f6f6;
  border: 1px solid #d0d0d0;
  border-radius: 3px;
  color: #554031;
  width: 70px;
  height: 40px;
  margin: 0 auto;
  text-align: center;
  position: relative;
  padding-top: 5px;
}

.u-account .section-2 .chart-wrap ul.bars .is-here .fa {
  display: block;
  font-size: 20px;
  position: absolute;
  bottom: -10px;
  width: 100%;
}

.u-account .section-2 .u-balance {
  margin-top: 17px;
}

.u-account .section-2 .u-balance .unit {
  border: 1px solid #dbdbdb;
  background-color: #f5f5f5;
  padding: 15px 0;
  text-align: center;
  color: #010101;
}

.u-account .section-2 .u-balance .unit .diamond {
  position: absolute;
  top: -35px;
  left: 50%;
  margin-left: -34px;
}

.u-account .section-2 .u-balance .unit h3 {
  font-size: 25px;
  color: #ff6a00;
  margin: 8px 0 0;
}

.u-account .section-2 .u-balance .unit h3 small {
  color: #ff6a00;
  margin-left: 2px;
}

.u-account .section-2 .u-balance .unit a {
  background: #ff9500;
  background: -moz-linear-gradient(top, #ff9500 0%, #ff6038 100%);
  background: -webkit-linear-gradient(top, #ff9500 0%, #ff6038 100%);
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(#ff9500),
    to(#ff6038)
  );
  background: -o-linear-gradient(top, #ff9500 0%, #ff6038 100%);
  background: linear-gradient(to bottom, #ff9500 0%, #ff6038 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ff9500', endColorstr='#ff6038', GradientType=0);
  padding: 0;
  text-align: center;
  color: #fff;
  width: 110px;
  height: 20px;
  line-height: 20px;
  display: inline-block;
  border-radius: 0;
  border: 0;
  margin-top: 10px;
}

.u-account .section-2 .u-balance .unit span {
  color: #ff6a00;
}

.u-account .section-2 .u-balance .unit:first-child {
  position: relative;
  padding-top: 23px;
  border-bottom: 0;
}

.u-account .section-2 .u-balance .unit:first-child:before {
  content: "";
  border: 8px solid transparent;
  border-right: 7px solid #dbdbdb;
  position: absolute;
  top: 28px;
  left: -16px;
}

.u-account .section-2 .u-balance .unit:first-child:after {
  content: "";
  border: 8px solid transparent;
  border-right: 7px solid #f5f5f5;
  position: absolute;
  top: 28px;
  left: -15px;
}

.u-account .section-2 .u-balance .vip-header {
  background-color: #544132;
  padding: 8px 15px;
  color: #ffffff;
}

.u-account .section-2 .u-balance .vip-header span {
  color: #fff600;
}

.u-account .section-2 .u-balance .vip-header i {
  margin-right: 5px;
}

.u-account .section-2 .u-balance ul.list-inline {
  padding: 10px 0;
  margin: 0;
  font-size: 0;
  background: #ff4e48;
  background: -moz-linear-gradient(top, #ff4e48 0%, #ff2a68 100%);
  background: -webkit-linear-gradient(top, #ff4e48 0%, #ff2a68 100%);
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(#ff4e48),
    to(#ff2a68)
  );
  background: -o-linear-gradient(top, #ff4e48 0%, #ff2a68 100%);
  background: linear-gradient(to bottom, #ff4e48 0%, #ff2a68 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ff4e48', endColorstr='#ff2a68', GradientType=0);
}

.u-account .section-2 .u-balance ul.list-inline li {
  font-size: 14px;
  width: 33.33333%;
  text-align: center;
  color: #fff;
  padding: 0;
  border-left: 1px solid #ff6d71;
}

.u-account .section-2 .u-balance ul.list-inline li:first-child {
  border-left: 0;
}

.u-account .section-2 .u-balance ul.list-inline li span {
  display: block;
  margin-top: 2px;
  color: #fff600;
  font-size: 18px;
}

.u-account .section-2 .tips {
  margin: 7px 0 0 5%;
  background-color: #eeeeee;
  padding: 5px 15px;
  position: relative;
}

.u-account .section-2 .tips:before {
  content: "";
  display: block;
  border: 5px solid transparent;
  border-right: 5px solid #eeeeee;
  position: absolute;
  top: 50%;
  margin-top: -5px;
  left: -10px;
}

.u-account .section-2 .tips i {
  color: #b2b2b2;
  font-size: 16px;
  position: absolute;
  top: 18px;
  left: -30px;
}

.u-account .section-2 .tips span {
  color: #544132;
  padding: 5px 0;
  border-radius: 3px;
  position: relative;
}

.u-account .section-2 .tips span:before {
  content: "";
  border: 5px solid transparent;
  border-right: 10px solid #eeeeee;
  position: absolute;
  top: 50%;
  margin-top: -5px;
  left: -15px;
}

.u-account .section-3 {
  padding: 20px 0;
}

.u-account .section-3 p {
  color: #a9a9a9;
}

.u-account .section-3 p span {
  color: #594333;
}

.u-account .section-3 .media {
  background-color: #f5f5f5;
  border: 1px solid #dbdbdb;
  color: #594333;
  padding: 15px 0;
}

.u-account .section-3 .media p {
  color: #594333;
  display: inline-block;
}

.u-account .section-3 .media a {
  margin-left: 11px;
}

.u-account .section-3 .media .media-body,
.u-account .section-3 .media .media-left {
  vertical-align: middle;
  padding: 15px 25px;
}

.u-account .section-3 .media .media-left {
  text-align: center;
  border-right: 1px solid #dadada;
}

.u-account .section-3 .media .media-left span {
  font-size: 24px;
  color: #ff6a00;
  display: block;
}

.u-account .section-3 .media .media-left a {
  color: #fff;
  border: 1px solid #fff;
  background-color: #594333;
  display: inline-block;
  text-align: center;
}

.u-account .section-3 .media .media-left a:focus,
.u-account .section-3 .media .media-left a:hover {
  text-decoration: none;
  background-color: #795b46;
}

.u-account .section-3 .media .media-body a {
  color: #fff;
  border: 1px solid #fff;
  background-color: #594333;
  display: inline-block;
  text-align: center;
  width: 70px;
  height: 30px;
  line-height: 30px;
}

.u-account .section-3 .media .media-body a:focus,
.u-account .section-3 .media .media-body a:hover {
  text-decoration: none;
  background-color: #795b46;
}

.u-account .section-3 .nested {
  padding-left: 70px;
}

.u-account .section-3 .dl-horizontal dt {
  font-weight: normal;
}

.u-account .section-3 .dl-horizontal dd span {
  display: inline-block;
  width: 400px;
}

h4 {
  display: inline-block;
}

.u-wrap #user-phone .modal-dialog {
  width: 500px;
}

.u-wrap #user-phone .modal-body {
  padding: 10px 0 20px;
}

.u-wrap #user-phone .modal-body .form-template {
  width: 100%;
  padding-right: 30px;
}

.u-wrap #user-phone .modal-body .table td em {
  display: inline-block;
  width: 150px;
  padding-right: 5px;
  font-size: 12px;
  color: #999;
  text-align: right;
}

.sections {
  height: 200px;
  padding-top: 20px;
  position: relative;
}

.sections .section-area {
  position: absolute;
  width: 100%;
  text-align: center;
}

.sections .section-area .content-details {
  padding: 0 20px;
}

.sections .btn-offset {
  color: #fff;
  font-size: 14px;
  text-align: center;
  background-color: #be4822;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  height: 38px;
  line-height: 38px;
  padding: 0;
  top: 0;
}

.sections .btn-offset:focus,
.sections .btn-offset:hover {
  background-color: #a8401e;
}

.sections .table th {
  font-weight: normal;
  text-align: center;
  background-color: #544132;
  border-color: #544132;
  color: #fff;
}

.sections .table td {
  padding: 0;
  height: 34px;
  line-height: 34px;
  text-align: center;
}

.sections .table label {
  margin: 0;
}

.sections .switcher {
  position: relative;
  display: inline-block;
  min-width: 50px;
  height: 21px;
  cursor: pointer;
  vertical-align: middle;
}

.sections .switcher input {
  width: 0;
  height: 0;
  visibility: hidden;
  visibility: visible\9;
}

.sections .switcher span {
  position: absolute;
  background: #d1d1d1;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border: 1px solid #ccc;
  border-radius: 12px;
  z-index: 1;
  text-align: left;
  -webkit-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}

.sections .switcher span i {
  position: absolute;
  display: block;
  background: #fff;
  width: 21px;
  height: 21px;
  top: -1px;
  left: -1px;
  border: 1px solid #ccc;
  border-radius: 12px;
  z-index: 2;
  -webkit-transition: all 0.15s ease-in-out;
  -o-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
}

.sections .switcher input:checked + span {
  background: #53cf49;
  border-color: #53cf49;
}

.sections .switcher input:checked + span i {
  -webkit-transform: scale(1.15);
  -ms-transform: scale(1.15);
  transform: scale(1.15);
  left: 30px;
}

.sections .checked span {
  background: #53cf49;
  border-color: #53cf49;
}

.sections .checked span i {
  left: 30px;
}
</style>
