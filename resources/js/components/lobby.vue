<template>
  <div>
      <div class="d-none d-xl-block wrapper container-whitelabel">
    <navbar></navbar>
    <asides></asides>
   
   
    <div class="main-panel ps main-container game-lobby">
      <div class="content container-wrap">
        <ul>
          <li>
            <div class="item item-inter">
              <div class="links">
                <!-- <a href="/game/play/agin" target="_blank">传统百家乐</a>
                <a href="/game/play/agin" target="_blank">龙宝百家乐</a>
                <a href="/game/play/agin" target="_blank">保险百家乐</a>
                <a href="/game/play/agin" target="_blank">多台百家乐</a>
                <a href="/game/play/agin" target="_blank">龙虎</a>
                <a href="/game/play/agin" target="_blank">轮盘</a>
                <a href="/game/play/agin" target="_blank">21点</a>
                <a href="/game/play/agin" target="_blank">炸金花</a>
                <a href="/game/play/agin" target="_blank">骰宝</a> -->
              </div>
              <div class="section">
                <h2>
                  <!-- <span class="icon"> -->
                    <!-- <img src="/assets/img/AG_logo.png"> -->
                  <!-- </span>国际厅 -->
                </h2>
                <!-- <p>
                  <span class="orange">欧洲厅：将马耳他实地赌场与真人娱乐场整合，充满异国情调的真人游戏。</span>
                  <br>VIP包桌：专属于您的桌台，尊享换荷官、飞牌、换牌靴等特权。
                </p> -->
                <!-- <div class="btns">
                  <button type="submit" class="orange" value="GO"></button>
                </div> -->
                <a href="#" @click="gotogame"> <h1>Play Lec68</h1> </a>
              </div>
            </div>
          </li>
          <!-- <li>
            <div class="item item-flagship">
              <div class="links">
                <a href="/game/play/agq" target="_blank">经典百家乐</a>
                <a href="/game/play/agq" target="_blank">龙宝百家乐</a>
                <a href="/game/play/agq" target="_blank">保险百家乐</a>
                <a href="/game/play/agq" target="_blank">龙虎</a>
                <a href="/game/play/agq" target="_blank">轮盘</a>
                <a href="/game/play/agq" target="_blank">骰宝</a>
                <a href="/game/play/agq" target="_blank">牛牛</a>
                <a href="/game/play/agq" target="_blank">炸金花</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon">
                    <img src="/assets/img/AG_logo.png">
                  </span>旗舰厅
                </h2>
                <p>
                  <span class="orange">贵宾厅：高额投注桌台，高达百万入座限红，让您轻松一掷千金。</span>
                  <br>连环百家乐： 8张桌同时投注，可随意切换桌台，好路不错过。
                </p>
                <div class="btns">
                  <a href="/game/play/agq" target="_blank" class="orange">立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="item item-warrior">
              <div class="links">
                <a href="/game/dygame/" data-value="ag" target="_playGame">AG</a>
                <a href="/game/dygame/" data-value="pt" target="_playGame">PT</a>
                <a href="/game/dygame/" data-value="mg" target="_playGame">MG</a>
                <a href="/game/dygame/" data-value="mg" target="_playGame">PP</a>
                <a href="/game/dygame/" data-value="mg" target="_playGame">SW</a>
                <a href="/game/dygame/" data-value="ttg" target="_playGame">TTG</a>
                <a href="/game/dygame/" data-value="mg" target="_playGame">PNG</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon">
                    <img src="/assets/img/AG_logo.png">
                  </span>亚游电游
                </h2>
                <p>
                  <span class="orange">YOPLAY：街机游戏引领者，设有VIP专属特区，享特色游戏、好路提示、动态聊天等特权。</span>
                  <br>巨奖厅：千万奖池等您赢，独立机台加倍爆奖，独有机台数据让你掌握中奖技巧。
                </p>
                <div class="btns">
                  <a data-value="egame" href="/game/dygame/" target="_playGame" class="orange">立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="item item-qg">
              <div class="links">
                <a href="/game/play/scg" target="_blank">古堡密探</a>
                <a href="/game/play/scg" target="_blank">骰宝王子</a>
                <a href="/game/play/scg" target="_blank">捕鱼高手</a>
                <a href="/game/play/scg" target="_blank">新年集福</a>
                <a href="/game/play/scg" target="_blank">欢乐足球</a>
                <a href="/game/play/scg" target="_blank">拆快递</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon">
                    <img src="/assets/images/game_lobby/qg_logo.png">
                  </span>刮刮彩
                </h2>
                <p>
                  <span class="orange">美美满满：各款优质美女等着您，春光旖旎，让你血脉喷胀。</span>
                  <br>天生赢家：真人百家乐为基础设计，超高爆奖率，霸占大奖排行榜的佼佼者。
                </p>
                <div class="btns">
                  <a href="/game/play/scg" target="_blank" class="orange">立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="item item-bbin">
              <div class="links">
                <a
                  data-value="game/play/agstar"
                  href="/game/iframe/index.html?egames=1&amp;gameCode=SHB&amp;gameName=SICBO&amp;g=as&amp;language=zh&amp;trial=true"
                  target="_playGame"
                >骰宝</a>
                <a
                  data-value="game/play/agstar"
                  href="/game/iframe/index.html?egames=1&amp;gameCode=ROU&amp;gameName=ROULETTE&amp;g=as&amp;language=zh&amp;trial=true"
                  target="_playGame"
                >轮盘</a>
                <a
                  data-value="game/play/agstar"
                  href="/game/iframe/index.html?egames=1&amp;gameCode=NN&amp;gameName=NIU NIU&amp;g=as&amp;language=zh&amp;trial=true"
                  target="_playGame"
                >牛牛</a>
                <a
                  data-value="game/play/agstar"
                  href="/game/iframe/index.html?egames=1&amp;gameCode=DT&amp;gameName=DRAGON TIGER&amp;g=as&amp;language=zh&amp;trial=true"
                  target="_playGame"
                >龙虎</a>
                <a
                  data-value="game/play/agstar"
                  href="/game/iframe/index.html?egames=1&amp;gameCode=ASBR&amp;gameName=RED BLACK&amp;g=as&amp;language=zh&amp;trial=true"
                  target="_playGame"
                >红黑大战</a>
                <a
                  data-value="game/play/agstar"
                  href="/game/iframe/index.html?egames=1&amp;g=as&amp;platType=AS&amp;gameCode=BZMW&amp;gameName=asstar&amp;platForm=AG&amp;language=zh&amp;trial=true"
                  target="_playGame"
                >奔驰宝马</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon as">
                    <img src="/assets/img/as_logo.png">
                  </span>电玩城
                </h2>
                <p>
                  <span class="orange">百家乐：最低1元投注，更低网速要求，实时同步真人游戏结果，绝对公平公正。</span>
                  <br>二八杠：又称疯狂牌九，可随意下顺门、天门、地门，庄家和三门单独比大小。
                </p>
                <div class="btns">
                  <a
                    href="/game/iframe/index.html?egames=1&amp;g=as&amp;platType=AS&amp;gameCode=agstar&amp;gameName=asstar&amp;platForm=AG&amp;language=zh&amp;trial=true"
                    target="_playGame"
                    class="orange"
                  >立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="item item-new-world">
              <div class="links">
                <a href="/game/iframe/index.html?g=agtlb" target="_blank">经典百家乐</a>
                <a href="/game/iframe/index.html?g=agtlb" target="_blank">多台百家乐</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon">
                    <img src="/assets/img/AG_logo.png">
                  </span>赌场厅
                </h2>
                <p>
                  <span class="orange">快速模式：无需输入联系方式，直接操作下注，电投手收到系统指令后现场为其操作。</span>
                  <br>传统模式：输入金额及电话提交后，电投手会在5-10分钟主动联系您，语音通话为你操作下注。
                </p>
                <div class="btns">
                  <a href="/game/iframe/index.html?g=agtlb" target="_blank" class="orange">立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="item item-sport">
              <div class="links"> -->
                <!-- <a href="/game/play/xesports" target="_blank">亚游电竞</a> -->
                <!-- <a href="/sports/sabah" target="_blank">沙巴体育</a>
                <a href="/game/play/agsport" target="_blank">AG体育</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon sabah">
                    <img src="/assets/img/AG_logo.png">
                  </span>体育游戏
                </h2>
                <p>
                  <span class="orange">亚游电竞：全球首创视频即时投注，1080P超高清、超低延时，享受边看比赛边投注。</span>
                  <br>沙巴体育：老牌体育平台，亚洲领先， 首创虚拟体育，精彩每时每刻。
                </p>
                <div class="btns">
                  <a href="/sports/sabah" target="_blank" class="orange">立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="item item-fish">
              <div class="links">
                <a data-value="fishing" href="/game/dygame/fishing/" target="_playGame">捕鱼</a>
                <a data-value="fishing" href="/game/dygame/fishing/" target="_playGame">养鱼</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon">
                    <img src="/assets/img/AG_logo.png">
                  </span>捕鱼王
                </h2>
                <p>
                  <span class="orange">渔场：投资买鱼和AG齐做庄，鱼吃子弹变金矿，收益颇丰，操作简单，轻松离线赚钱。</span>
                  <br>捕鱼王3D（多人版）：4人同场射击，最后击杀者将获取全部价值，支持实时聊天。
                </p>
                <div class="btns">
                  <a
                    data-value="fishing"
                    target="_playGame"
                    href="/game/iframe/index.html?egames=1&amp;g=ag&amp;gameCode=6&amp;gameName=Fish&amp;platForm=AG&amp;trial=true"
                    class="orange"
                  >立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="item item-cow">
              <div class="links">
                <a href="/game/play/agin" target="_blank">百家乐</a>
                <a href="/game/play/agin" target="_blank">龙虎</a>
                <a href="/game/play/agin" target="_blank">轮盘</a>
                <a href="/game/play/agin" target="_blank">多台</a>
                <a href="/game/play/agin" target="_blank">骰宝</a>
                <a href="/game/play/agin" target="_blank">牛牛</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon">
                    <img src="/assets/img/AG_logo.png">
                  </span>直播厅
                </h2>
                <p>
                  <span class="orange">实时直播：最火爆的网络直播互动娱乐，美女主播极致互动体验，开创博彩娱乐新高度。</span>
                  <br>打赏：点击聊天窗口的“礼物”标志，选择相对应的礼物，赠送给喜欢的主播作为奖励。
                </p>
                <div class="btns">
                  <a href="/game/play/agin" target="_blank" class="orange">立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="item item-vr">
              <div class="links">
                <a href="/game/play/vr" target="_blank">重庆时时彩</a>
                <a href="/game/play/vr" target="_blank">香港六合彩</a>
                <a href="/game/play/vr" target="_blank">龙翔秒秒彩</a>
                <a href="/game/play/vr" target="_blank">北京赛车</a>
                <a href="/game/play/vr" target="_blank">VR北京赛车</a>
                <a href="/game/play/vr" target="_blank">VR六合彩</a>
              </div>
              <div class="section">
                <h2>
                  <span class="icon">
                    <img src="/assets/img/vr_logo.png">
                  </span>彩票
                </h2>
                <p>
                  <span class="orange">龙翔秒秒彩:热门彩票秒秒开奖，更快的节奏，更多的玩法，给您不一样的购彩体验。</span>
                  <br>VR六合彩：最火爆的六合彩，再加入更公平的真人视讯开奖，让您亲眼见证开奖过程。
                </p>
                <div class="btns">
                  <a href="/game/play/vr" target="_blank" class="orange">立即游戏</a>
                </div>
              </div>
            </div>
          </li> -->
        </ul>
   
      </div>
  
    </div>
     
    <alertside></alertside>  
  </div>
     <footers></footers>
  </div>
</template>
<script>
import navbar from "./welcome/navbarDekstop";
import asides from "./welcome/asides";
import alertside from "./alertsidebar";
import footers from './welcome/footers';
export default {
  components: {
    navbar,
    asides,
    alertside,
    footers
  }
  ,methods:{
    gotogame(){
      var myWindow = window.open("redirect", "", "width=1920,height=1080");
    }
  }
};
</script>
<style scoped>
</style>

