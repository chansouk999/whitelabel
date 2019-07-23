<template>
  <div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-3 pr-0">
          <div class="card card-nav-tabs">
            <div class="card-header bg-custome p-2 text-white">Featured</div>
            <ul class="list-group list-group-flush text-left">
              <li class="list-group-item">
                <a href @click.prevent="inbox()">
                  <i class="fa fa-inbox mr-2"></i>Inbox
                  <span class="badge badge-pill badge-custome float-right">{{CountAcc}}</span>
                </a>
              </li>
              <li class="list-group-item">
                <a href @click.prevent="promotion()">
                  <i class="tim-icons icon-badge mr-2"></i>Promotion
                  <span class="badge badge-pill badge-custome float-right">{{countTypePM}}</span>
                </a>
              </li>

              <li class="list-group-item">
                <a href @click.prevent="announcement()">
                  <i class="tim-icons icon-bell-55 mr-2"></i> Announcement
                  <span
                    class="badge badge-pill badge-custome float-right"
                  >{{countTypeAN}}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card m-0">
              <div class="card-body pb-0">
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
            <!-- <a href="chat" class="a-link"></a> -->
            <form action="chat" target="_blank">
              <button type="submit" class="d-none a-link"></button>
            </form>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-full-width table-responsive ps ps--active-y">
                <table class="table">
                  <tbody>
                    <tr
                      v-for="(data,index) in filteredResources"
                      v-if="index >= gamehistorystart && index <= gamehistoryend"
                      :key="index"
                    >
                      <td>{{index+1}}</td>
                      <td
                        class="btn-annoucemnt"
                        @click.prevent="read_annocementgeT(data.AnouncementID)"
                      >
                        <p class="title">{{JSON.parse(data.message).title}}</p>
                        <p class="text-muted">{{JSON.parse(data.message).msg}}</p>
                      </td>
                      <td class="td-actions text-right">{{data.created_at}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <nav aria-label="..." class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item">
                      <span class="page-link" @click="gamehistorypage(methods='previous')">Previous</span>
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
                      <a class="page-link" href="#" @click="gamehistorypage(methods='next')">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
    </div>
    <!-- start your code here! -->
  </div>
</template>
<script>
export default {
  data() {
    return {
      chat: "/chat",
      gamehistorystart: 0,
      gamehistoryend: 9,
      gamehistorypagenum: 1,
      dataAnnoucement: [],
      CountAcc: "",
      getNews: [],
      userName: "",
      search: "",
      countTypePM: "",
      countTypeAN: "",
      getpromotion: [],
      getannouncement: [],
      inboxAnnoucement: []
    };
  },
  mounted() {
    this.getTotalOnline();
    this.gettype();
    axios
      .get("/getaccountment")
      .then(res => {
        this.CountAcc = res.data[4].length;
        this.getNews = res.data[2];
        this.userName = res.data[3];
        this.dataAnnoucement = res.data[4];
        this.countTypePM = res.data[5].length;
        this.countTypeAN = res.data[6].length;
        this.inboxAnnoucement = res.data[4];
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
    getTotalOnline() {
      axios.get("/getAlluserdata");
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
    },
    gettype() {
      axios
        .get("/gettype")
        .then(res => {
          this.getpromotion = res.data[0];
          this.getannouncement = res.data[1];
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    inbox() {
      this.dataAnnoucement = this.inboxAnnoucement;
    },

    promotion() {
      this.dataAnnoucement = this.getpromotion;
    },
    announcement() {
      this.dataAnnoucement = this.getannouncement;
    },
    read_annocementgeT(id) {
      localStorage.setItem("chatdata", id);
      $(".a-link").click();
    }
  }
};
</script>
<style scoped>
</style>


