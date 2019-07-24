<template>
  <div>
    <navbar
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
    ></navbar>
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
                    <div class="card m-0">
                      <div class="card-body pb-0">
                        <div class="inbox_chat">
                          <div
                            class="chat_list active_chat"
                            v-for="(data,index) in filteredResources"
                            v-if="index >= gamehistorystart && index <= gamehistoryend"
                            :key="index"
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
                        </div>
                      </div>
                      <div class="card-footer p-0">
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
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 bg-light px-0">
                  <div class="card-body">
                    <div class="card-header card-header-avatar">
                      <a href="#pablo">
                        <img class="img img-raised" src="assets/img/james.jpg" alt="Card image" />
                      </a>
                      <p class="text-name">Bank</p>
                    </div>
                    <div class="mesgs">
                      <div class="msg_history">
                        <div
                          class="w-100"
                          v-for="(data,index) in read_annocement"
                          :key="index"
                          v-if="data.owner == 1"
                        >
                          <div class="incoming_msg_img">
                            <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                          </div>
                          <div class="d-block mt-3">
                            <p class="text-content">{{JSON.parse(data.message).msg}}</p>
                            <p class="time_date">{{data.created_at | moment("calendar")}}</p>
                          </div>
                        </div>

                        <div class="reply" v-else>
                          <div class="replay-content">
                            <div class="d-block">
                              <p class="text-content">{{data.msg}}</p>
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
                      </div>
                      <div class="type_msg">
                        <div class="input_msg_write">
                          <input
                            type="text"
                            class="write_msg"
                            v-model="typemessage"
                            placeholder="Type a message"
                          />
                          <button class="msg_send_btn" type="button" @click.prevent="sendMessage()">
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
      search: "",
      GetdataID: "",
      typemessage: "",
      dataAnnoucement: [],
      read_annocement: [],
      gamehistorystart: 0,
      gamehistoryend: 9,
      gamehistorypagenum: 1
    };
  },
  filters: {
    formatDate(value) {
      let secound = new Date(value).getTime();
      return secound;
      return moment(String(value)).format("m/DD/YYYY hh:mm");
    }
  },
  mounted() {
    this.GetdataChat();
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
    sendMessage() {
      axios
        .post("/Senddata", {
          typemessage: this.typemessage,
          GetdataID: this.GetdataID
        })
        .then(res => {
          console.log(res.data);
          if (res.data.code == 200) {
            this.$swal({
              type: "success",
              title: "Sended",
              buttonsStyling: false,
              confirmButtonClass: "btn btn-success",
              text: "The message sended",
              timer: 2000
            });
          }
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    GetdataChat() {
      axios
        .get("/getDataChat/" + localStorage.getItem("chatdata"))
        .then(res => {
          this.read_annocement = res.data;
          this.GetdataID = res.data[0].AnouncementID;
          console.log("!!!!!!!!!!!!xxxxxxxxxxxxxxxxxxxx!!!!!!!!!!!!!!!!!!");
          console.log(res.data);
          console.log("!!!!!!!!!!!!xxxxxxxxxxxxxxxxxxxx!!!!!!!!!!!!!!!!!!");
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    chatandAswer(id) {
      axios
        .get("/read_annocement/" + id)
        .then(res => {
          this.read_annocement = res.data;
          console.log("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
          console.log(res.data);
          console.log("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
        })
        .catch(e => {
          console.log(e.response);
        });
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
.content {
  margin: 90px 0px 0px 0px !important;
}
section.cid-ro6uJJ0VM8 {
  left: 0 !important;
}
</style>
