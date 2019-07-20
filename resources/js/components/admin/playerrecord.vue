<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-6 d-flex">
        <div class="btn btn-icon btn-round btn-youtube disabled">
          <i class="tim-icons icon-calendar-60"></i>
        </div>
        <!-- input with datetimepicker -->
        <div class="form-group">
          <input type="text" class="form-control datetimepicker" value="10/05/2018" />
        </div>
      </div>
      <div class="col-md-6 text-right">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="tim-icons icon-zoom-split"></i>
            </div>
          </div>
          <input type="text" class="form-control" v-model="search" placeholder="Search Mail" />
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>User ID</th>
              <th>Event</th>
              <th>Event ID</th>
              <th>Amount</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="(data,index) in filtered"
              v-if="index >= gamehistorystart && index <= gamehistoryend"
            >
              <td class="text-center">{{ index+1 }}</td>
              <td>{{ JSON.parse(data.detail).user_id }}</td>
              <td>{{ JSON.parse(data.detail).event }}</td>
              <td>{{ JSON.parse(data.detail).eventid }}</td>
              <td>{{ JSON.parse(data.detail).amount }}</td>
              <td>{{ JSON.parse(data.detail).Time }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- PLAYER INFO -->
    <nav aria-label="..." class="d-flex justify-content-center">
      <ul class="pagination">
        <li class="page-item">
          <select class="selectpicker" data-style="select-with-transition" title="1" data-size="7">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </li>
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
</template>
<script>
export default {
  data() {
    return {
      logdata: [],
      date: null,
      search: "",
      gamehistorystart: 0,
      gamehistoryend: 19,
      gamehistorypagenum: 1
    };
  },
  mounted() {
    this.gotactivitylog();
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      blackDashboard.initDateTimePicker();
      if ($(".slider").length != 0) {
        demo.initSliders();
      }
    });
  },
  computed: {
    filtered() {
      if (this.search) {
        return this.logdata.filter(item => {
          let userIDJson = JSON.parse(item.detail).user_id;
          let eventIDJson = JSON.parse(item.detail).event;
          return (
            userIDJson.toLowerCase().includes(this.search.toLowerCase()) ||
            eventIDJson.toLowerCase().includes(this.search.toLowerCase())
          );
        });
      } else {
        return this.logdata;
      }
    }
  },
  methods: {
    gotactivitylog() {
      let today = new Date();
      let dd = String(today.getDate()).padStart(2, "0");
      let mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
      let yyyy = today.getFullYear();

      today = yyyy + "-" + mm + "-" + dd;
      // alert(today)
      axios.get("getlog").then(res => {
        console.log(res.data);
        this.logdata = res.data.data.data;
      });
    },
    gamehistorypage(methods) {
      if (methods == "previous") {
        if (this.gamehistorystart > 0) {
          this.gamehistorystart -= 10;
          this.gamehistoryend -= 10;
          this.gamehistorypagenum -= 1;
        }
      } else {
        if (this.gamehistoryend < this.logdata.length) {
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
</style>


     


