<template>
  <div>
    <div class="row">
      <div class="col-md-6">
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
            <button
              class="btn btn-link"
              id="timeline1"
              data-toggle="modal"
              data-target=".timeline1"
            >
              <i class="tim-icons icon-zoom-split"></i>
              <span class="d-lg-none d-md-block">Search</span>
            </button>
            <div
              class="modal modal-search timeline1 fade"
              tabindex="-1"
              role="dialog"
              aria-labelledby="timeline1"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <input type="text" class="form-control" placeholder="SEARCH" />
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="tim-icons icon-simple-remove"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-timeline card-plain">
          <div class="card-body">
            <ul class="timeline timeline-simple">
              <li class="timeline-inverted" v-for="(data,index) in alladmininfo">
                <div class="timeline-badge danger">
                  <i class="tim-icons icon-bag-16"></i>
                </div>
                <div class="timeline-panel text-left">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-danger">{{data.created_at}}</span>
                  </div>
                  <div class="timeline-body">
                    <p class="text-primary">
                      <span class="text-info">Admin - {{JSON.parse(data.detail).serveby}}</span>
                      <!-- <span class="text-warning">17:42:33</span> -->
                    </p>
                    <p class="text-primary">
                      <span class="text-info">{{JSON.parse(data.detail).event}}</span>
                      <span class="text-primary">{{JSON.parse(data.detail).user_id}}</span>
                      <span class="text-warning">{{data.created_at}}</span>
                    </p>
                  </div>
                  <h6>
                    <i class="ti-time"></i>
                  </h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
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
            <button
              class="btn btn-link"
              id="timeline2"
              data-toggle="modal"
              data-target=".timeline2"
            >
              <i class="tim-icons icon-zoom-split"></i>
              <span class="d-lg-none d-md-block">Search</span>
            </button>
            <div
              class="modal modal-search timeline2 fade"
              tabindex="-1"
              role="dialog"
              aria-labelledby="timeline2"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <input type="text" class="form-control" placeholder="SEARCH" />
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="tim-icons icon-simple-remove"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-timeline card-plain">
          <div class="card-body">
            <ul class="timeline timeline-simple">
              <li class="timeline-inverted" v-for="(data,index) in myadmininfo" :key="index">
                <div class="timeline-badge danger">
                  <i class="tim-icons icon-bag-16"></i>
                </div>
                <div class="timeline-panel text-left">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-danger">{{data.created_at}}</span>
                  </div>
                  <div class="timeline-body" >
                    <p class="text-primary">
                      <span class="text-info">Admin - {{JSON.parse(data.detail).serveby}}</span>
                      <!-- <span class="text-warning">17:42:33</span> -->
                    </p>
                    <p class="text-primary">
                      <span class="text-info">{{JSON.parse(data.detail).event}}</span>
                      <span class="text-primary">{{JSON.parse(data.detail).user_id}}</span>
                      <span class="text-warning">{{data.created_at}}</span>
                    </p>
                  </div>
                  <h6>
                    <i class="ti-time"></i>
                  </h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      myadmininfo: [],
      alladmininfo: []
    };
  },
  mounted() {
    this.getadmininfo();
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      blackDashboard.initDateTimePicker();
      if ($(".slider").length != 0) {
        demo.initSliders();
      }
    });
  },
  methods: {
    getadmininfo() {
      axios.get("/getadmininfotimeline").then(res => {
        console.log(res.data);
        this.alladmininfo = res.data.data.all;
        this.myadmininfo = res.data.data.my;
      });
    }
  }
};
</script>

<style scoped>
</style>

