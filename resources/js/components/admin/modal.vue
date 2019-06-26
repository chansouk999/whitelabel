<template>
  <div>
    <div
      class="modal fade withdraw-history"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="card-header card-header-success">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Time</th>
                      <th>withdrawID</th>
                      <th>Amount</th>
                      <th class="text-right">Bank account</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>hh:mm dd/mm/yyy</td>
                      <td>withdrawID</td>
                      <td>$500</td>
                      <td class="text-right">e.g xxx xxx xxx</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!--/modal withdraw history -->

  

    <!--modal action record -->
    <div
      class="modal fade action-record"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="content">
                <div class="header text-center">
                  <h3 class="title">My Timeline</h3>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-timeline card-plain">
                      <div class="card-body">
                        <ul class="timeline">
                          <li class="timeline-inverted">
                            <div class="timeline-badge danger">
                              <i class="tim-icons icon-planet"></i>
                            </div>
                            <div class="timeline-panel">
                              <div class="timeline-heading">
                                <span class="badge badge-pill badge-danger">Today</span>
                              </div>
                              <div class="timeline-body">
                                <p>
                                  Changed his password
                                  <span class="text-warning">14 :42 : 33</span>
                                </p>
                              </div>
                              <h6>
                                <i class="ti-time"></i> Place $100 bet on ':as digi -small' in game 'GameID'
                                <span
                                  class="text-warning"
                                >13:39:13</span>
                              </h6>
                            </div>
                          </li>
                          <li>
                            <div class="timeline-badge success">
                              <i class="tim-icons icon-user-run"></i>
                            </div>
                            <div class="timeline-panel">
                              <div class="timeline-heading">
                                <span class="badge badge-pill badge-success">23/11/2019</span>
                              </div>
                              <div class="timeline-body">
                                <p>
                                  withdraw $1000 from balcance
                                  <span class="text-warning">17:43:33</span>
                                </p>
                                <hr>
                                <p>
                                  change password
                                  <span class="text-warning">17:43:33</span>
                                </p>
                                <hr>
                                <p>
                                  Successful logged in
                                  <span class="text-warning">17:43:33</span>
                                </p>
                              </div>
                              <div class="timeline-footer">
                                <div class="dropdown">
                                  <button
                                    type="button"
                                    class="btn btn-round btn-info dropdown-toggle"
                                    data-toggle="dropdown"
                                  >
                                    <i class="tim-icons icon-settings-gear-63"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!--/modal action record -->
  </div>
</template>
<script>
import { adminmixin } from "./adminmixin.js";

export default {
  mixins: [adminmixin],
  data() {
    return {
    
    };
  },
  methods: {

  }
};
</script>
 <style scoped>
</style>
