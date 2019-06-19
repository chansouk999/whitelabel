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
              <input type="text" class="form-control datetimepicker" value="10/05/2018">
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
                    <input
                      type="text"
                      class="form-control"
                     
                      placeholder="SEARCH"
                    >
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
              <li class="timeline-inverted">
                <div class="timeline-badge danger">
                  <i class="tim-icons icon-bag-16"></i>
                </div>
                <div class="timeline-panel text-left">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-danger">23/11/2019</span>
                  </div>
                  <div class="timeline-body">
                    <p class="text-primary">
                      Admin-adminID
                      <span class="text-info">Change his password</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                    <p class="text-primary">
                      Admin-adminID
                      <span class="text-info">Change his password of and admin</span>
                      <span class="text-primary">adminID</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                  </div>
                  <h6>
                    <i class="ti-time"></i>
                  </h6>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge success">
                  <i class="tim-icons icon-gift-2"></i>
                </div>
                <div class="timeline-panel text-left">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-success">22/11/2018</span>
                  </div>
                  <div class="timeline-body">
                    <p class="text-primary">
                      Admin-adminID
                      <span class="text-info">Blocked a player</span>
                      <span class="text-primary">userApiID</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                    <p class="text-primary">
                      Admin-adminID
                      <span class="text-info">add a portal priovider</span>
                      <span class="text-primary">webID</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                    <p class="text-primary">
                      Admin-adminID
                      <span class="text-info">Logged in</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                    <p class="text-primary">
                      Admin-adminID
                      <span class="text-info">add $30000000 to a web</span>
                      <span class="text-primary">webID</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                  </div>
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
              <input type="text" class="form-control datetimepicker" value="10/05/2018">
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
                    <input
                      type="text"
                      class="form-control"
                      
                      placeholder="SEARCH"
                    >
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
              <li class="timeline-inverted">
                <div class="timeline-badge danger">
                  <i class="tim-icons icon-bag-16"></i>
                </div>
                <div class="timeline-panel text-left">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-danger">23/11/2019</span>
                  </div>
                  <div class="timeline-body">
                    <p class="text-primary">
                      <span class="text-info">Change his password</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                    <p class="text-primary">
                      <span class="text-info">Change his password of and admin</span>
                      <span class="text-primary">adminID</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                  </div>
                  <h6>
                    <i class="ti-time"></i>
                  </h6>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge success">
                  <i class="tim-icons icon-gift-2"></i>
                </div>
                <div class="timeline-panel text-left">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-danger">23/11/2019</span>
                  </div>
                  <div class="timeline-body">
                    <p class="text-primary">
                      <span class="text-info">Change his password</span>
                      <span class="text-warning">17:42:33</span>
                    </p>
                    <p class="text-primary">
                      <span class="text-info">Change his password of and admin</span>
                      <span class="text-primary">adminID</span>
                      <span class="text-warning">17:42:33</span>
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
  mounted() {
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      blackDashboard.initDateTimePicker();
      if ($(".slider").length != 0) {
        demo.initSliders();
      }
    });
  }
};
</script>

<style scoped>
</style>

