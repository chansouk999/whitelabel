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
    <div class="select-people-to-chat">
      <div class="center-select-people-to-chat" @mouseleave="leaveSearch">
        <div>
          <input
            type="text"
            class="text-seach-people"
            placeholder="Search for people"
            v-model="searchPeople"
          />
        </div>
        <div class="select2 scrollbar" id="style-3">
          <div v-for="res in filterUserlist" @click="createChatroom(res)" style="cursor:pointer">
            <img src="https://ptetutorials.com/images/user-profile.png" alt />
            <span class="txt-seacred">{{ res.name }} ({{res.user_id}})</span>
          </div>
        </div>
        <div class="select3 scrollbar" id="style-3">
          <div style="color: #969698;cursor:pointer" @click="leaveListechat">
            <i class="fas fa-chevron-left" style="    padding: 0px 14px;
    color: #adadad;"></i>
            Back
          </div>

          <div
            v-for="(res,index) in selectUserlist"
            @click="setroomchat(res)"
            style="cursor:pointer"
          >
            <img src="https://ptetutorials.com/images/user-profile.png" alt />
            <span class="txt-seacred">{{ res.AnouncementID }} {{JSON.parse(res.message).msg}}</span>
          </div>
        </div>
      </div>
    </div>
    <div class="main-panel">
      <!-- <navbars></navbars> -->
      <div class="content px-0" style=" margin: 20px 0px 0px 0px !important;">
        <div class="home-wrap">
          <div class="content-wrap">
            <div class="container">
              <div class="row box-coverall">
                <div class="col-lg-4 col-ms-12 chater-peopleder">
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
                        <div class="inbox_chat scrollbar hideafterclick" id="style-3">
                          <!-- v-if="index >= gamehistorystart && index <= gamehistoryend" -->
                          <div v-for="(data,index) in filteredResources" :key="index">
                            <div
                              class="chat_list active_chat"
                              v-if="data.AnouncementID == announeidder"
                            >
                              <div
                                class="snackStick"
                                v-if="JSON.parse(data.userID) == 'all'"
                              >Global Chat</div>
                              <div
                                class="snackStick"
                                v-else-if="JSON.parse(data.userID).length > 1"
                              >{{JSON.parse(data.userID).length}} people in group</div>
                              <div class="chat_people">
                                <div class="chat_img">
                                  <img
                                    v-if="JSON.parse(data.userID) == 'all'"
                                    src="assets/img/investor4.png"
                                    alt="sunil"
                                  />
                                  <img
                                    v-else-if="JSON.parse(data.userID).length > 1"
                                    src="assets/img/gacticle.png"
                                    alt="sunil"
                                  />
                                  <img
                                    v-else
                                    src="https://ptetutorials.com/images/user-profile.png"
                                    alt="sunil"
                                  />
                                </div>
                                <div
                                  class="chat_ib"
                                  style="color:#fff"
                                  @click.prevent="chatandAswer(data.AnouncementID,JSON.parse(data.userID))"
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
                              <div
                                class="snackStick"
                                v-if="JSON.parse(data.userID) == 'all'"
                              >Global Chat</div>
                              <div
                                class="snackStick"
                                v-else-if="JSON.parse(data.userID).length > 1"
                              >{{JSON.parse(data.userID).length}} people in group</div>
                              <div class="chat_people">
                                <div class="chat_img">
                                  <!-- gbalchat -->
                                  <img
                                    v-if="JSON.parse(data.userID) == 'all'"
                                    src="assets/img/investor4.png"
                                    alt="sunil"
                                  />
                                  <img
                                    v-else-if="JSON.parse(data.userID).length > 1"
                                    src="assets/img/gacticle.png"
                                    alt="sunil"
                                  />
                                  <img
                                    v-else
                                    src="https://ptetutorials.com/images/user-profile.png"
                                    alt="sunil"
                                  />
                                  <!-- gropchar -->
                                </div>
                                <div
                                  class="chat_ib"
                                  @click.prevent="chatandAswer(data.AnouncementID,JSON.parse(data.userID))"
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
                <div class="col-md-8 px-0 box-chater">
                  <div class="loader-chater">
                    <div class="lds-ring" v-if="legngcheck > 0">
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>
                    <div class="lds-ring" v-else-if="announeidder==null">SELECT YOUR ANNOUNCEMENT</div>
                    <div class="lds-ring" v-else>NO MESSAGE</div>
                  </div>

                  <div class="card-body">
                    <!-- <div class="card-header card-header-avatar">
                      <a href="#pablo">
                        <img class="img img-raised" src="assets/img/james.jpg" alt="Card image" />
                      </a>
                      <p class="text-name">{{GetName}}</p>
                    </div>-->
                    <div class="mesgs" ref="mesgs">
                      <!-- <div class="create-prochat" @click="dropSearch">
                        <h4>Create Chat Room</h4>
                      </div> -->
                      <div class="msg_history scrollbar" id="style-3">
                        <div
                          class="w-100"
                          v-for="(data,index) in read_annocement"
                          :key="index"
                          v-if="auth !== data.from"
                        >
                          <div class="incoming_msg_img">
                            <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                          </div>
                          <div class="d-block mt-3" style="text-align: left;">
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
                      <div class="hiddenscroll"></div>
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
    <!-- <div class="contaier">
      <div class="row">
        <div class="col-md-12">
          <footers></footers>
        </div>
      </div>
    </div>-->
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
      userList: [],
      announeidder: localStorage.getItem("chatdata"),
      search: "",
      chatId: null,
      legngcheck: null,
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
      searchPeople: null,
      checklisteduser: true,
      selectUserlist: [],
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
      this.read_annocement.push({
        message: e.message.message,
        created_at: e.user
      });
    });
  },
  mounted() {
    // this.builduserListed();
    this.announcefresh();
    setInterval(() => {
      this.GetdataChat();
    }, 5000);
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
    filterUserlist() {
      //   searchPeople

      if (this.searchPeople) {
        return this.userList.filter(res => {
          if (
            res.user_id.includes(this.searchPeople) &&
            res.name.includes(this.searchPeople)
          ) {
            this.checklisteduser = true;
          }
          return (
            res.user_id.includes(this.searchPeople) ||
            res.name.includes(this.searchPeople)
          );
        });
      }

      return this.userList;
    },
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
    setroomchat(res) {
      localStorage.setItem("chatdata", res.AnouncementID);

      this.GetdataChat();
      this.announcefresh();
    },
    announcefresh() {
      axios
        .get("/getaccountment")
        .then(res => {
          this.dataAnnoucement = res.data[4];
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    createChatroom(res) {
      let data;
      data = {
        title: res.user_id,
        message: "PersonNalChat",
        typeAN: "NA",
        method: "NA",
        userID: res.user_id
      };
      axios.post("saveannounce", data).then(res => {
        if (res.data.code == 100) {
          // if(res.data)
          console.log(res.data);
          if (res.data.data.length > 0) {
            $(".select3").fadeIn(0);
            $(".select3").css("right", "0px");
            this.selectUserlist = res.data.data;
            return ;
          }
        }
        localStorage.setItem("chatdata", res.data);
        this.announcefresh();
        this.GetdataChat();
        console.log(res.data);
      });
    },
    leaveListechat() {
      $(".select3").fadeOut(100);
      $(".select3").css("right", "-457px");
    },
    leaveSearch() {
      //   $(".select3").fadeOut(0);
      //   $(".select3").css("right", "-457px");
      $(".select-people-to-chat").css("top", "-489px");
    },
    dropSearch() {
      $(".select-people-to-chat").css("top", "4px");
    },
    builduserListed() {
      axios
        .get("TaguserDetail")
        .then(res => {
          this.userList = res.data;
        })
        .catch(er => {});
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
    GetdataChat(id = null, method = null) {
      axios
        .get("/getDataChat/" + localStorage.getItem("chatdata"))
        .then(res => {
          this.legngcheck = res.data[0].length;
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
          $(".loader-chater").fadeOut(500);
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    chatandAswer(id, userid) {
      this.checkChater(id, userid);

      if (this.legngcheck !== 0) {
        this.legngcheck = 0;
      }
      $(".loader-chater").fadeIn(200);

      //   $('.hideafterclick').fadeOut(200);
      //   $('.showafterclick').toggle('slide');

      localStorage.setItem("chatdata", id);
      this.announeidder = id;
      this.GetdataChat();
    },
    checkChater(id, userid) {
      console.log(id);
      console.log(userid);
      if (userid == "all") {
      }
      if (userid.length > 0) {
      }
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
.showafterclick {
  display: none;
}
.mdf-content {
  margin: 200px 0px 0px 0px !important;
}
.chater-peopleder {
  position: relative;
  top: 15px;
}
.box-coverall {
  border-radius: 1px;
  box-shadow: 0px 0px 20px #99999921;
}
.box-chater {
  border-top-left-radius: 0px;
  border-radius: 5px;
  background-color: #f9f9f9;
  margin-left: -22px;
  border: 1px solid #eaeaec;
  position: relative;
  top: 15px;
}
.msg_history {
  height: calc(100vh - 256px);
  overflow-y: auto;
}
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
.main-panel {
  position: relative;
  /* float: right; */
  width: 100%;
  /* min-height: 100vh; */
  border-top: 4px solid #35b535;
  /* background: linear-gradient(#1e1e2f, #1e1e24); */
  -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
}
.chat_list {
  border-bottom: 1px solid #eaeaec;
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
  background: #59b4d30d;
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
  border: 1px solid #9999991c;
  box-shadow: 0px 0px 5px #bbb9b924;
  padding: 8px 10px;
  display: inline-block;
  border-radius: 10px;
  margin: 0px 10px;
}
p.text-content2 {
  background-color: #35b535;
  color: #fff;
  text-align: left;
  border: 1px solid #9999991c;
  box-shadow: 0px 0px 5px #bbb9b924;
  padding: 8px 10px;
  display: inline-block;
  border-radius: 10px;
  margin: 0px 10px;
}
#style-3::-webkit-scrollbar-track {
  /* -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); */
  background-color: #f9f9f9;
}

#style-3::-webkit-scrollbar {
  width: 6px;
  background-color: #f9f9f9;
}

#style-3::-webkit-scrollbar-thumb {
  background-color: #f9f9f9;
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
.lds-ring {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
  top: 50%;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 51px;
  height: 51px;
  margin: 6px;
  border: 6px solid #fff;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #59b4d3 transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.loader-chater {
  position: absolute;
  width: 100%;
  display: none;
  height: 100%;
  /* top: 50%; */
  background: #fff;
}
.snackStick {
  position: absolute;
  top: 0;
  left: 92px;
  background: #35b535;
  font-size: 11px;
  padding: 0px 10px;
  color: #fff;
  /* right: 235px; */
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.create-prochat {
  position: absolute;
  right: 7px;
  top: -36px;
  cursor: pointer;
  height: 20px;
  /* border-left: 1px solid #999; */
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  background: #35b535;
  padding: 0px 10px;
}
.create-prochat h4 {
  color: #fff;
  font-size: 12px;
}
.select-people-to-chat {
  position: absolute;
  top: -489px;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  width: 100%;
  max-height: 430px;
  z-index: 1;
  /* width: 80%; */
}
.center-select-people-to-chat {
  /* height: 80%; */
  background: white;
  width: 36%;
  border: 1px solid #e8e8e8;
  box-shadow: 0px 0px 10px #e4e4e4;
  text-align: left;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

.center-select-people-to-chat div {
  width: 100%;
  margin: 0 auto;
  padding-bottom: 10px;
}
.text-seach-people {
  width: 98%;
  width: 97.4%;
  margin-left: 6px;
  /* position: relative; */
  padding: 0px 10px;
  height: 37px;
  color: #444444bd;
  outline: none;
  background: #73737312;
  border-radius: 4px;
  border: 1px solid #4440;
  margin-top: 10px;
}
.select2 {
  overflow-y: scroll;
  max-height: 430px;
}
.select3 {
  display: none;
  overflow-y: scroll;
  height: 430px;
  right: -457px;
  top: -430px;
  float: right;
  position: relative;
  background: white;
  margin-left: 18px;
  /* margin-right: 40px; */
  transition: 0.3s;
  -webkit-transition: 0.3s;
  position: re;
  /* top: -439px; */
}
.select3 div {
  /* height: 50px; */
  width: 100%;
  /* float: left; */
  padding: 10px 12px;
  margin-top: 10px;
  border-top: 1px solid #f5f5f5;
}
.select3 div img {
  width: 50px;
}
.select2 div {
  /* height: 50px; */
  width: 100%;
  /* float: left; */
  padding: 10px 12px;
  margin-top: 10px;
  border-top: 1px solid #f5f5f5;
}
.select2 div img {
  width: 50px;
}
.select2afterimg {
}
.txt-seacred {
  color: #555555b8;
  padding: 5px 10px;
  border-radius: 8px;
  margin-left: 6px;
  background: #d4d4d421;
}
</style>




