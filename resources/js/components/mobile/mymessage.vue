<template>
  <div>
    <div class="container">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12 px-0">
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
                      <td>
                        <div class="info-icon text-center icon-success">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </td>
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
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
    </div>
    <!-- start your code here! -->
    <!-- Classic Modal -->
    <div
      class="modal fade"
      id="read_inbox"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content" v-for="(data,index) in read_annocement" :key="index">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{data.AnouncementID}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="timeline-panel">
              <div class="timeline-heading">
                <span class="badge badge-danger">{{JSON.parse(data.message).title}}</span>
              </div>
              <div class="timeline-body">
                <p>{{JSON.parse(data.message).msg}}</p>
              </div>
              <h6>
                <i class="ti-time"></i>
                {{data.created_at}}
              </h6>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-end">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
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
    "home",
    "forum",
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
      inboxAnnoucement: [],
      read_annocement: []
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
</style>


