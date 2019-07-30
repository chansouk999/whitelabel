<template>
  <div>
    <div class="navbar-minimize-fixed">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">TNK</a>
          <a href="javascript:void(0)" class="simple-text logo-normal">Stock List</a>
        </div>
        <ul class="nav">
          <li class="nav-aside">
            <a
              href="fullscreengame?stockname=SH000001&loop=5&country=china"
              slot="reference"
              target="_blank"
            >
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">{{stock1}}</p>
            </a>
          </li>
          <li class="nav-aside">
            <a
              href="fullscreengame?stockname=SZ399001&loop=5&country=china"
              slot="reference"
              target="_blank"
            >
              <i class="tim-icons icon-money-coins"></i>
              <p class="text-aside">{{stock2}}</p>
            </a>
          </li>
          <li class="nav-aside">
            <a
              href="fullscreengame?stockname=SH00300&loop=5&country=china"
              slot="reference"
              target="_blank"
            >
              <i class="tim-icons icon-user-run"></i>
              <p class="text-aside">{{stock3}}</p>
            </a>
          </li>
          <li class="nav-aside">
            <a
              href="fullscreengame?stockname=SZ399415&loop=5&country=china"
              slot="reference"
              target="_blank"
            >
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">{{stock4}}</p>
            </a>
          </li>
          <li class="nav-aside">
            <a
              href="fullscreengame?stockname=US dollar Index&loop=5&country=usa"
              slot="reference"
              target="_blank"
            >
              <i class="tim-icons icon-chart-pie-36"></i>
              <p class="text-aside">{{stock5}}</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="tim-icons icon-image-02"></i>
              <p>
                {{stock6}}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li>
                  <a
                    href="fullscreengame?stockname=BTC/USDT&loop=1&country=cypto"
                    slot="reference"
                    target="_blank"
                  >
                    <span class="sidebar-mini-icon">1</span>
                    <span class="sidebar-normal">1 Minutes</span>
                  </a>
                </li>
                <li>
                  <a
                    href="fullscreengame?stockname=BTC/USDT&loop=5&country=cypto"
                    slot="reference"
                    target="_blank"
                  >
                    <span class="sidebar-mini-icon">5</span>
                    <span class="sidebar-normal">5 Minutes</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["stock1", "stock2", "stock3", "stock4", "stock5", "stock6"],
  data() {
    return {
      myPopper: {
        placement: "right",
        modifiers: { offset: { offset: "0,10px" } }
      },
      stocklist: null,
      gamemode: null,
      reqstock: null,
      reqloop: null,
      val: "",
      stocknameder: "",
      loopstock: "",
      countrystock: "",
      id: null,
      provider_name: null,
      balance: null,
      user_id: null,
      pro_id: null,
      name: null,
      firstname: null,
      email: null,
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
  },
  mounted() {
    let idactive = this.stockname + "" + this.loop;
    $("#" + idactive + "").addClass("nav-aside active");
    this.userdata();
  },
  methods: {
    getstock(stocknameder, loppstock, countrystock) {
      let filename = window.location.href;
      // this.gamelink = `http://lec68.com/redirect?&name=${this.email}&urlback=http://${filename.split('/')[2]}`
      this.stocklist = `http://lec68.com/redirect?&name=${
        this.email
      }&urlback=http://${
        filename.split("/")[2]
      }&stockname=${stocknameder}&loop=${loppstock}&country=${countrystock}`;
      // alert(stocknameder + loppstock + countrystock);
      window.open(this.stocklist, "_blank");
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
          let filename = window.location.href;
          // this.gamelink = `http://lec68.com/redirect?&name=${this.email}&urlback=http://${filename.split('/')[2]}`
          this.stocklist = `http://lec68.com/redirect?&name=${
            this.email
          }&urlback=http://${filename.split("/")[2]}&stockname=${
            this.stocknameder
          }&loop=${this.loopstock}&country=${this.countrystock}`;
        })
        .catch(er => {
          console.log(er.res);
        });
    }
  }
};
</script>
<style scoped>
</style>
