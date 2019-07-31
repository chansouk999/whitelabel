<template>
  <div>
    <!-- <navbar
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
    ></navbar>-->
    <div class="main-panel">
      <!-- <navbars></navbars> -->
      <div class="content px-0">
        <div class="home-wrap">
          <div class="content-wrap">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-ms-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-zoom-split"></i>
                          </div>
                        </div>
                        <input
                          type="text"
                          v-model="search"
                          class="form-control"
                          placeholder="Search Mail"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="card card-primary card-outline">
                    <div class="card m-0" style="border: 1px solid #eaeaec;">
                      <div class="card-body pb-0">
                        <div class="inbox_chat scrollbar" id="style-3">
                          <div
                            v-for="(data,index) in filteredResources"
                            v-if="index >= gamehistorystart && index <= gamehistoryend"
                            :key="index"
                          >
                            <div
                              class="chat_list active_chat"
                              v-if="data.AnouncementID == announeidder"
                            >
                              <div class="chat_people">
                                <div class="chat_img">
                                  <img
                                    src="https://ptetutorials.com/images/user-profile.png"
                                    alt="sunil"
                                  />
                                </div>
                                <div
                                  class="chat_ib"
                                  @click.prevent="chatandAswer(data.AnouncementID)"
                                >
                                  <h5>
                                    {{JSON.parse(data.message).title}}
                                    <span
                                      class="chat_date"
                                    >{{data.created_at | moment("calendar")}}</span>
                                  </h5>
                                  <p>{{JSON.parse(data.message).msg}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="chat_list active_chat" style="background-color:#fff" v-else>
                              <div class="chat_people">
                                <div class="chat_img">
                                  <img
                                    src="https://ptetutorials.com/images/user-profile.png"
                                    alt="sunil"
                                  />
                                </div>
                                <div
                                  class="chat_ib"
                                  @click.prevent="chatandAswer(data.AnouncementID)"
                                >
                                  <h5>
                                    {{JSON.parse(data.message).title}}
                                    <span
                                      class="chat_date"
                                    >{{data.created_at | moment("calendar")}}</span>
                                  </h5>
                                  <p>{{JSON.parse(data.message).msg}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="card-footer p-0">
                        <div class="mailbox-controls">
                          <nav aria-label="..." class="d-flex justify-content-center">
                            <ul class="pagination">
                              <li class="page-item">
                                <span
                                  class="page-link"
                                  @click="gamehistorypage(methods='previous')"
                                >Previous</span>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">{{ gamehistorypagenum-1 }}</a>
                              </li>
                              <li class="page-item active">
                                <span class="page-link">
                                  {{gamehistorypagenum}}
                                  <span class="sr-only">(current)</span>
                                </span>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">{{ gamehistorypagenum+1 }}</a>
                              </li>
                              <li class="page-item">
                                <a
                                  class="page-link"
                                  href="#"
                                  @click="gamehistorypage(methods='next')"
                                >Next</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>-->
                    </div>
                  </div>
                </div>
                <!-- <button @click="scrollTop()">SCROLLER</button> -->
                <div class="col-md-8 px-0" style="border-radius:5px;background-color:#efefef">
                  <div class="card-body">
                    <div class="card-header card-header-avatar">
                      <a href="#pablo">
                        <img class="img img-raised" src="assets/img/james.jpg" alt="Card image" />
                      </a>
                      <p class="text-name">{{GetName}}</p>
                    </div>
                    <div class="mesgs" ref="mesgs">
                      <div class="msg_history">
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
                              <img
                                src="https://ptetutorials.com/images/user-profile.png"
                                alt="sunil"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="scrollbottom"></div>
                      </div>
                      <div class="cover-typemsg">
                        <div class="type_msg">
                          <div class="input_msg_write">
                            <input
                              @keyup.enter="sendMessage()"
                              type="text"
                              class="write_msg"
                              v-model="typemessage"
                              placeholder="Type a message"
                            />
                            <button
                              class="msg_send_btn"
                              type="button"
                              @click.prevent="sendMessage()"
                            >
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
          </div>
        </div>
      </div>
    </div>
    <div class="contaier">
      <div class="row">
        <div class="col-md-12">
          <footers></footers>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import navbar from "./navbar";
import footers from "./footers";
export default {
  components: {
    navbar,
    footers
  },
  props: [
    "administrator",
    "auth",
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
    "lobby_tra",
    "checkpcormb"
  ],
  data() {
    return {
      announeidder: localStorage.getItem("chatdata"),
      search: "",
      chatId: null,
      GetName: "",
      GetdataID: "",
      typemessage: "",
      dataAnnoucement: [],
      read_annocement: [],
      gamehistorystart: 0,
      post_by: null,
      gamehistoryend: 9,
      gamehistorypagenum: 1,
      checkernew: true,
      lengMsg: null,

      messages: [],
      users: []
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
    this.fetchMessages();

    // Echo.join('chat')
        //     .here(users => {
        //         this.users = users;
        //     })
        //     .joining(user => {
        //         this.users.push(user);
        //     })
        //     .leaving(user => {
        //         this.users = this.users.filter(u => u.id !== user.id);
        //     })
        //     .listenForWhisper('typing', ({ id, name }) => {
        //         this.users.forEach((user, index) => {
        //             if (user.id === id) {
        //                 user.typing = true;
        //                 this.$set(this.users, index, user);
        //             }
        //         });
        //     })
        //     .listen('MessageSent', (event) => {
        //         this.messages.push({
        //             message: event.message.message,
        //             user: event.user
        //         });

        //         this.users.forEach((user, index) => {
        //             if (user.id === event.user.id) {
        //                 user.typing = false;
        //                 this.$set(this.users, index, user);
        //             }
        //         });
        //     });

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
    axios
      .get("/getaccountment")
      .then(res => {
        this.dataAnnoucement = res.data[4];
        console.log(res.data);
      })
      .catch(e => {
        console.log(e.response);
      });
    // setInterval(() => {
    //   this.GetdataChat();
    // }, 5000);
  },
  computed: {
    filteredResources() {
      if (this.search) {
        return this.dataAnnoucement.filter(item => {
          let userIDJson = JSON.parse(item.message).title;
          let eventIDJson = JSON.parse(item.message).msg;
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
  methods: {
    // fetchMessages() {
    //       axios.get('/messages').then(response => {
    //           this.messages = response.data;
    //       });
    //   },

    // addMessage(message) {
    //     this.messages.push(message);

    //     axios.post('/messages', message).then(response => {
    //         console.log(response.data);
    //     });
    // },
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
    GetdataChat() {
      axios
        .get("/getDataChat/" + localStorage.getItem("chatdata"))
        .then(res => {
          console.log(this.$refs);
          this.read_annocement = res.data[0];
          this.GetName = res.data[1][0].name;
          this.GetdataID = res.data[0][0].AnouncementID;
          this.post_by = res.data[0][0].post_by;
          this.chatId = res.data[0][0].chatId;
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
    chatandAswer(id) {
      alert(id);
      localStorage.setItem("chatdata", id);
      this.announeidder = id;
      this.GetdataChat();
      //   axios
      //     .get("/read_annocement/" + id)
      //     .then(res => {
      //       this.read_annocement = res.data;
      //       console.log("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
      //       console.log(res.data);
      //       console.log("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
      //     })
      //     .catch(e => {
      //       console.log(e.response);
      //     });
    },
    // Paganation
    gamehistorypage(methods) {
      if (methods == "previous") {
        if (this.gamehistorystart > 0) {
          this.gamehistorystart -= 10;
          this.gamehistoryend -= 10;
          this.gamehistorypagenum -= 1;
        }
      } else {
        if (this.gamehistoryend < this.dataAnnoucement.length) {
          this.gamehistorystart += 10;
          this.gamehistoryend += 10;
          this.gamehistorypagenum += 1;
        }
      }
    }
  }
};
</script>
<style scoped>
.cover-typemsg {
  width: 100%;
  height: 82px;
  position: absolute;
  background: red;
  left: 0;
}
.inbox_chat {
  top: -12px;
  height: calc(100vh - 234px);
  overflow-y: scroll;
  width: 607px;
  position: relative;
  padding: -14px;
  left: -15px;
}
.chat_list {
  border-bottom: 1px solid #eaeaec;
  margin: 0;
  padding: 18px 16px 10px;
}
.content {
  margin: 90px 0px 0px 0px !important;
}
/* .white-content .main-panel {
    background: #222222;
} */
.white-content .form-control {
  color: #222a42;
  border-color: rgba(29, 37, 59, 0.09);
}
.white-content .input-group-prepend .input-group-text {
  border-color: rgba(29, 37, 59, 0.09);
  color: #1d253b;
}
.active_chat {
  background: #efefef;
  /* border-radius: 5px; */
  position: relative;
  /* left: -10px; */
}
.chat_ib h5 {
  font-size: 15px;
  text-align: left;
  color: #464646;
  margin: 0 0 8px 0;
}
section.cid-ro6uJJ0VM8 {
  left: 0 !important;
}
.content {
  margin: 32px;
}
.type_msg {
  border: 1px solid #c4c4c433;
  position: relative;
  border-radius: 7px;
  padding: 10px 15px;
  background: #ffffff;
  outline: none;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
  outline: none;
}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 17px;
  top: 17px;
  width: 33px;
}
p.time_date {
  padding: 0 18px;
  text-align: left;
  font-size: 12px;
  color: #555;
  margin-top: 3px;
}
p.reply_time_date {
  padding: 0 18px;
  text-align: left;
  font-size: 12px;
  color: #555;
  margin-top: 3px;
}

p.text-content {
  background-color: #ffffff;
  color: #464646;
  text-align: left;
  padding: 12px 10px;
  display: inline-block;
  border-radius: 10px;
  margin: 0px 10px;
}
p.text-content2 {
  background-color: #35b535;
  color: #ffffff;
  text-align: left;
  padding: 12px 10px;
  display: inline-block;
  border-radius: 10px;
  margin: 0px 10px;
}
#style-3::-webkit-scrollbar-track {
  /* -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); */
  background-color: #f1f1f1;
}

#style-3::-webkit-scrollbar {
  width: 6px;
  background-color: #999;
}

#style-3::-webkit-scrollbar-thumb {
  background-color: #999;
}
.type_msg {
  border: 1px solid #c4c4c433;
  position: relative;
  top: 6px;
  height: 69px;
  width: 98%;
  border-radius: 7px;
  padding: 10px 15px;
  background: #ffffff;
  outline: none;
}
.cover-typemsg {
  width: 100%;
  height: 82px;
  position: absolute;
  background: #dcdbdb;
  left: 0;
}
</style>
