<template>
  <div>
    <div class="container px-0">
      <div class="col-md-12 px-0">
        <div class="card card-primary card-outline">
          <div class="card m-0">
            <div class="card-body pb-0">
              <div class="input-group">
                <input type="text" v-model="search" class="form-control" placeholder="Search Mail" />
                <i class="tim-icons icon-zoom-split search-icon"></i>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div
              class="chart-loop"
              v-for="(data,index) in filteredResources"
              :key="index"
              @click.prevent="startChat(data.AnouncementID)"
            >
              <div class="d-flex">
                <div class="info-icon text-center icon-success icon-profile">
                  <i class="tim-icons icon-single-02"></i>
                </div>
                <span class="game_rBox">
                  <h4>{{JSON.parse(data.message).title}}</h4>
                  <p>{{JSON.parse(data.message).msg}}</p>
                </span>
              </div>
              <i class="tim-icons icon-minimal-right mt-3 text-dark"></i>
            </div>
          </div>
          <div class="card text-left" v-if="coutAnnoucement == false">
            <img class="card-img-top" src="holder.js/100px180/" alt />
            <div class="card-body">
              <h4 class="card-title">No Found</h4>
              <p class="card-text">We not found in our Store</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-12 px-0 hide-chat">
        <nav class="mobile-bottom-nav">
          <div
            :class="page =='' ?'mobile-bottom-nav__item mobile-bottom-nav__item--active' : 'mobile-bottom-nav__item'"
          >
            <div class="mobile-bottom-nav__item-content">
              <a :href="welcome">
                <i class="tim-icons icon-bank"></i>
                <p>{{home}}</p>
                <!--My Account -->
              </a>
            </div>
          </div>
          <div
            :class="page =='messagemb' ?'mobile-bottom-nav__item mobile-bottom-nav__item--active' : 'mobile-bottom-nav__item'"
          >
            <div class="mobile-bottom-nav__item-content">
              <a href="/messagemb">
                <i class="tim-icons icon-chat-33 icon-default"></i>
                <p>{{forum}}</p>
              </a>
              <!-- riviledge -->
            </div>
          </div>
          <div
            :class="page =='washcode' ?'mobile-bottom-nav__item mobile-bottom-nav__item--active' : 'mobile-bottom-nav__item'"
          >
            <div class="mobile-bottom-nav__item-content">
              <a href="#">
                <i class="tim-icons icon-coins icon-default"></i>
                <p>{{washcode}}</p>
              </a>
              <!-- Recharge -->
            </div>
          </div>
          <div
            :class="page =='recharge' ?'mobile-bottom-nav__item mobile-bottom-nav__item--active' : 'mobile-bottom-nav__item'"
          >
            <div class="mobile-bottom-nav__item-content">
              <a href="#">
                <i class="tim-icons icon-credit-card"></i>
                <p>{{recharge}}</p>
              </a>
              <!-- WithDraw -->
            </div>
          </div>

          <div
            :class="page =='myaccount' ?'mobile-bottom-nav__item mobile-bottom-nav__item--active' : 'mobile-bottom-nav__item'"
          >
            <div class="mobile-bottom-nav__item-content">
              <a href="/myaccount">
                <i class="tim-icons icon-single-02"></i>
                <p>{{mine}}</p>
              </a>
              <!-- Profile -->
            </div>
          </div>
        </nav>
      </div>
      <div class="col-md-12 px-0 openchat" ref="openchat">
        <div class="card-deck">
          <div class="card">
            <div class="card-body p-0">
              <div class="d-flex justify-content-between header-profile">
                <div class="profile d-flex">
                  <i class="tim-icons icon-minimal-left icon-profile" @click.prevent="closechat()"></i>
                  <img class="img img-raised" src="assets/img/james.jpg" alt="Card image" />
                  <div class="d-block profile">
                    <p class="profile-name">{{GetName}}</p>
                    <p class="profile-status">{{dataCreate | moment("calendar")}}</p>
                  </div>
                </div>
                <a @click.prevent="notification(id)">
                  <i class="tim-icons icon-bullet-list-67 icon-edit-profile"></i>
                </a>
              </div>
              <tr class="tr-loader" v-if="loading == true">
                <td colspan="13">
                  <div class="cover-load">
                    <div class="lds-ring" v-if="lengdata > 0">
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>
                    <div class="card text-white bg-warning" v-else>
                      <img class="card-img-top" src="holder.js/100px180/" alt />
                      <div class="card-body">
                        <h4 class="card-title">NO DATA</h4>
                        <p class="card-text">Text</p>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <div class="chat-page">
                <div
                  class="w-100"
                  v-for="(data,index) in read_annocement"
                  :key="index"
                  v-if="auth !== 1 && data.owner == 1 "
                >
                  <div class="incoming_msg_img">
                    <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                  </div>
                  <div class="d-block mt-3">
                    <p class="text-content">{{data.conversationMsg}}</p>
                    <p class="time_date">{{data.created_at | moment("calendar")}}</p>
                  </div>
                </div>
                <div class="reply" v-else>
                  <div class="replay-content">
                    <div class="d-block text-right">
                      <p class="text-content2">{{data.conversationMsg}}</p>
                      <p class="reply_time_date">{{data.created_at | moment("calendar")}}</p>
                    </div>
                    <div class="img-chat">
                      <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="chat-footer">
                <div class="type_msg">
                  <div class="input_msg_write">
                    <input
                      @keyup.enter="sendMessage()"
                      type="text"
                      v-model="typemessage"
                      placeholder="Type a message"
                      class="write_msg"
                    />
                    <button type="button" class="msg_send_btn" @click.prevent="sendMessage()">
                      <i class="tim-icons icon-send"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- start your code here! -->
  </div>
</template>
<script>
import navbars from "./navbar";
import asides from "./asides";
export default {
  components: {
    navbars,
    asides
  },
  props: [
    "auth",
    "home",
    "forum",
    "recharge",
    "washcode",
    "mine",
    "stock1",
    "stock2",
    "stock3",
    "stock4",
    "stock5",
    "stock6"
  ],
  data() {
    return {
      GetName: "",
      loading: true,
      page: "",
      messages: "./message",
      promote: "./promote",
      welcome: "/",
      lobby: "./lobby",
      dataAnnoucement: [],
      CountAcc: "",
      getNews: [],
      userName: "",
      search: "",
      typemessage: "",
      countTypePM: "",
      countTypeAN: "",
      dataCreate: "",
      lengdata: "",
      read_annocement: [],
      coutAnnoucement: "",
      window: {
        width: 0,
        height: 0
      }
    };
  },
  filters: {
    formatDate(value) {
      let secound = new Date(value).getTime();
      return secound;
      return moment(String(value)).format("m/DD/YYYY hh:mm");
    }
  },
  created() {
    this.GetdataChat();
    Echo.private("chat").listen("MessageSent", e => {
      alert("good");
      this.read_annocement.push({
        message: e.message.message,
        created_at: e.user
      });
    });
  },
  mounted() {
    this.page = window.location.href.split("/")[3];
    axios
      .get("/getaccountment")
      .then(res => {
        this.dataAnnoucement = res.data[4];
        this.coutAnnoucement = res.data[4].length;
        console.log(res.data);
      })
      .catch(e => {
        console.log(e.response);
      });
    setInterval(() => {
      this.GetdataChat();
    }, 5000);
  },
  computed: {
    filteredResources() {
      if (this.search) {
        return this.dataAnnoucement.filter(item => {
          let userIDJson = JSON.parse(item.message).title;
          let eventIDJson = JSON.parse(item.message).msg;
          if (
            !userIDJson.toLowerCase().includes(this.search.toLowerCase()) ||
            !eventIDJson.toLowerCase().includes(this.search.toLowerCase())
          ) {
            this.coutAnnoucement = false;
          } else {
            this.coutAnnoucement = true;
          }
          return (
            userIDJson.toLowerCase().includes(this.search.toLowerCase()) ||
            eventIDJson.toLowerCase().includes(this.search.toLowerCase())
          );
        });
      } else {
        return this.dataAnnoucement;
      }
    }
  },
  created() {
    window.addEventListener("resize", this.handleResize);
    this.handleResize();
  },
  destroyed() {
    window.removeEventListener("resize", this.handleResize);
  },
  methods: {
    rechargeClick() {
      let url = window.location.href
        .split("/")
        .pop()
        .split("?")[0];
      // alert(url);
      if (url == "message") {
        $("#recharge")[0].click();
        window.location = "/message?page=recharge";
      } else {
        window.location = "/message?page=recharge";
      }
    },
    scrollTop() {
      //   $(".msg_history").animate( {scrollTop: $(".scrollbottom").offset().top});
      $(".msg_history").scrollTop(70000000000000);
    },
    sendMessage(chat = null) {
      axios
        .post("/Senddata", {
          typemessage: this.typemessage,
          GetdataID: localStorage.getItem("chatdata"),
          chat: this.chatId
        })
        .then(res => {
          console.log(res.data);
          this.GetdataChat();
          if (this.checkernew == false) {
            $(".msg_history").scrollTop(70000000000000);
          }

          this.typemessage = "";
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    handleResize() {
      this.window.width = window.innerWidth;
      this.window.height = window.innerHeight;
    },
    closechat() {
      $(".hide-chat").show();
      this.$refs.openchat.style.width = "0%";
    },
    startChat(id) {
      localStorage.setItem("chatdata", id);
      this.GetdataChat();
      $(".hide-chat").hide();
      this.$refs.openchat.style.width = "100%";
    },
    getTotalOnline() {
      axios.get("/getAlluserdata");
    },
    GetdataChat() {
      axios
        .get("/getDataChat/" + localStorage.getItem("chatdata"))
        .then(res => {
          console.log(this.$refs);
          this.read_annocement = res.data[0];
          this.lengdata = res.data[0].length;
          this.GetName = res.data[1][0].name;
          this.GetdataID = res.data[0][0].AnouncementID;
          this.post_by = res.data[0][0].post_by;
          this.chatId = res.data[0][0].chatId;
          this.dataCreate = res.data[1][0].created_at;
          this.loading = false;
          //   if(this.chatId==undefined){
          //       this.chatId ='NO';
          //   }
          //   alert(this.chatId)

          if (this.read_annocement.length !== this.lengMsg) {
            $(".msg_history").scrollTop(70000000000000);

            this.checkernew = false;
          }
          this.checkernew = true;
          //   $(".msg_history").scrollTop(70000000000000);
          this.lengMsg = this.read_annocement.length;
          //   console.log("!!!!!!!!!!!!xxxxxxxxxxxxxxxxxxxx!!!!!!!!!!!!!!!!!!");
          //   console.log(res.data);
          //   console.log("!!!!!!!!!!!!xxxxxxxxxxxxxxxxxxxx!!!!!!!!!!!!!!!!!!");
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    read_annocementgeT(id) {
      $("#read_inbox").modal("show");
      axios
        .get("/read_annocement/" + id)
        .then(res => {
          this.read_annocement = res.data;
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
    }
  }
};
</script>
<style scoped>
.openchat {
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  overflow-x: hidden;
  transition: 0.1s;
}
.content .table > tbody > tr > td {
  border-color: none;
}
.content .table > tbody > tr > td:after {
  border-color: #000;
}

.form-control {
  border-left: 0;
  border-top: 0;
  border-radius: 0;
}
.white-content .input-group-focus .input-group-prepend .input-group-text,
.white-content .input-group-focus .input-group-append .input-group-text,
.white-content .input-group-focus .form-control {
  border-color: #F44336;
}
</style>








