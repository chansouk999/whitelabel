<template>
  <div>
    <div class="wrapper">
      <app-aside></app-aside>
      <div class="main-panel">
        <app-navbar></app-navbar>
        <div class="content">
          <div class="container-fluid">
            

            <div class="card card-nav-tabs card-plain">
              <div class="card-header card-header-danger">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                          <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab">Player info</a></li>
                              <li class="nav-item"><a class="nav-link" href="#updates" data-toggle="tab">Game History</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Game Result</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Withdraw top-up</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Admin info</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">TimeLine</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Player record</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Agent Info</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Finance</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Request</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Announcement</a></li>
                              <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Manage Record</a></li>
                          </ul>
                      </div>
                      </div>
                  </div>
              </div>

              <!-- PLAYER INFO -->


              <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>PlayerID</th>
                        <th>Name</th>
                        <th>Balance</th>
                        <th >Currency</th>
                        <th >online hour</th>
                        <th >Language</th>
                        <th >Total rolling</th>
                        <th >Available Rolling</th>
                        <th >Online Status</th>
                        <th >Register Time</th>
                        <th >Register IP</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Andrew Mike</td>
                        <td>Develop</td>
                        <td>2013</td>
                        <td >&euro; 99,225</td>
                        <td >&euro; 99,225</td>
                        <td >&euro; 99,225</td>
                        <td >&euro; 99,225</td>
                        <td >&euro; 99,225</td>
                        <td >&euro; 99,225</td>
                        <td >&euro; 99,225</td>
                        <td >&euro; 99,225</td>
                        <td class="td-actions">
                            <button type="button" rel="tooltip" class="btn btn-default">
                               Game History
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-default">
                                Top-up History
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-default">
                                Withdraw History
                            </button>
                             <button type="button" rel="tooltip" class="btn btn-default">
                                Access Record
                            </button>
                             <button type="button" rel="tooltip" class="btn btn-default">
                                Action Record
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>


              <!-- PLAYER INFO -->
            
            
          </div>
        </div>
        <app-footer></app-footer>
      </div>
    </div>
  </div>
</template>
<script>
import aside from "./asides";
import navbar from "./navbar";
import footer from "./footers";
export default {
  components: {
    "app-aside": aside,
    "app-navbar": navbar,
    "app-footer": footer
  }
};
</script>
<style scoped>
</style>
