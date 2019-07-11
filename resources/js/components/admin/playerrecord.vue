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
          <input type="text" class="form-control datetimepicker" value="10/05/2018">
        </div>
      </div>
      <div class="col-md-6 text-right">
        <button
          class="btn btn-link"
          id="playerrecord"
          data-toggle="modal"
          data-target=".playerrecord"
        >
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search playerrecord fade"
          tabindex="-1"
          role="dialog"
          aria-labelledby="playerrecord"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input type="text" class="form-control" placeholder="SEARCH">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <div class="card card-timeline card-plain">
          <div class="card-body">
            <ul class="timeline timeline-simple">
              <!-- loop -->
              <li class="timeline-inverted" >
                <div class="timeline-badge danger">
                  <i class="tim-icons icon-bag-16"></i>
                </div>

                <!--  -->
                <div class="timeline-panel text-left">
                  <!-- <div class="timeline-heading">
                    <span class="badge badge-pill badge-success">{{ JSON.parse(data.detail).Time }}</span>
                  </div> -->
                  <!-- "{"user_id":"090659ZK4Z8le","event":"Top up request Approved by","serveby":"090659ZK4Z8le","amount":5000,"eventid":"","Time":"2019-06-21 18:55:17"}" -->
                  <div class="timeline-body" v-for="data in logdata" >
                    <p class="text-primary" >
                      {{ JSON.parse(data.detail).user_id }}
                      <span class="text-info"> {{ JSON.parse(data.detail).event }}</span>
                      <span class="text-info"> {{ JSON.parse(data.detail).eventid }}</span>
                      <span class="text-info">  {{ JSON.parse(data.detail).amount }}</span>
                      <span class="text-warning">{{ JSON.parse(data.detail).Time }}</span>
                    </p>
                  </div>
                </div>
              </li>
              <!-- loop -->
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- PLAYER INFO -->
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item">
          <select class="browser-default custom-select">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
          </select>
        </li>
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
          <span class="page-link">
            2
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
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
      date: null
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
  methods: {
    gotactivitylog() {
      let today = new Date();
      let dd = String(today.getDate()).padStart(2, "0");
      let mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
      let yyyy = today.getFullYear();

      today =  yyyy + "-" + mm + "-" + dd ;
      // alert(today)
      axios.get("getlog").then(res => {
        console.log(res.data);
        this.logdata = res.data.data.data;
      });
    }
  }
};
</script>

<style scoped>
</style>


