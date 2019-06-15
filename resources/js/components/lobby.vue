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
             window.open('http://lec68.com/redirect?&name='+this.email+'&urlback=http://159.138.130.64','LEC68.COM',"width=1920,height=1080,location=no");
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

