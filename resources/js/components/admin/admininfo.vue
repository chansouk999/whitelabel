<template>
  <div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text"></p>
                <div class="author">
                  <div class="block block-one"></div>
                  <div class="block block-two"></div>
                  <div class="block block-three"></div>
                  <div class="block block-four"></div>
                  <a href="javascript:void(0)">
                    <img class="avatar" src="assetsadmin/img/emilyz.jpg" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                  </a>
                  <p class="description">Ceo/Co-Founder</p>
                </div>
                <div
                  class="card-description"
                >Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...</div>
              </div>
              <div class="card-footer">
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- PRODUCT LIST -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">ID : </p>
                      <p class="text-rose">{{ admininfo[0].id }}</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Name : </p>
                      <p class="text-rose">{{ admininfo[0].name }}</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Type : </p>
                      <p class="text-rose"> {{ admininfo[0].role_id }}</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Role :</p>
                      <p class="text-rose">{{ admininfo[0].role_id }}</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Last logged in :</p>
                      <p class="text-rose">{{ admininfo[0].updated_at }}</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Total Online :</p>
                      <p class="text-rose">{{ admininfo[0].TotalOnline }}</p>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="#" class="btn btn-rose btn-round">View my activity</a>
                <a
                  href="#"
                  class="btn btn-rose btn-round"
                  data-toggle="modal"
                  data-target="#addnewadmin"
                >Create New Admin</a>
              </div>
              <!-- /.card-footer -->
            </div>
          </div>
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-12 text-right">
                <button
                  class="btn btn-link"
                  id="admininfo"
                  data-toggle="modal"
                  data-target=".admininfo"
                >
                  <i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
                <div
                  class="modal modal-search fade admininfo"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="admininfo"
                  aria-hidden="true"
                >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <input
                          type="text"
                          class="form-control"
                          id="admininfo"
                          placeholder="userapiID/refernce/gameID"
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
            <br>
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Admin namea</th>
                  <th>ID</th>
                  <th>Type</th>
                  <th>Role</th>
                  <th>Last logged in time</th>
                  <th>Total Online</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(data,index) in admininfoall">
                  <td class="text-center">{{index+1}}</td>
                  <td>{{data.name}}</td>
                  <td>{{data.id}}</td>
                  <td>{{data.role_id}}</td>
                  <td>{{data.role_id}}</td>
                  <td>{{data.updated_at}}</td>
                  <td>{{data.TotalOnline}}</td>
                  <td>{{data.active}}</td>
                  <td class="td-actions">
                    <span data-toggle="modal" data-target=".edit">
                      <button
                        type="button"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="Edit "
                        class="btn btn-info btn-sm btn-icon"
                      >
                        <i class="tim-icons icon-trophy"></i>
                      </button>
                    </span>
                    <span data-toggle="modal" data-target=".view-activity">
                      <button
                        type="button"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="View Activity"
                        class="btn btn-success btn-sm btn-icon"
                      >
                        <i class="tim-icons icon-video-66"></i>
                      </button>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--modal action record -->
    <div
      class="modal fade view-activity"
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
                  <h3 class="title">My Activity Timeline</h3>
                </div>
                <div class="row">
                  <div class="col-md-12">
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
                                  <span
                                    class="text-info"
                                  >Change his password of and admin</span>
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

    <!-- Modal -->
    <div
      class="modal fade"
      id="addnewadmin"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLongTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Create new admin</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-2">
                  <h5>admin name:</h5>
                </div>
                <div class="col-4">
                  <input
                    type="text"
                    class="form-control"
                    v-model="addnewadminder"
                    placeholder="Type here...."
                  >
                </div>
              </div>
              <div class="row">
                <div class="col-2">
                  <h5>Type:</h5>
                </div>
                <div class="col-10">
                  <select name id v-model="admintype">
                    <option selected v-bind:value="{ siti: 'root' }">root</option>
                    <option selected v-bind:value="{ siti: 'Normal' }">Normal</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-5">
                <table class="table table-unruled">
                  <thead>
                    <tr>
                      <th>role:</th>
                      <th>Player</th>
                      <th>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_player">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </th>
                      <th>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_player">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </th>
                      <th>
                        <div class="form-check">
                          <input type="radio" value="2" v-model="r_player">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>Gameble</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="gameble">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="gameble">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="gameble">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Game result</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_gameresult">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_gameresult">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_gameresult">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Withdraw-topup</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_withtop">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_withtop">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_withtop">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Timeline</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_timeline">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_timeline">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_timeline">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>player record</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_playerrecord">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_playerrecord">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_playerrecord">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>agentInfo</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_agentinfo">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_agentinfo">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_agentinfo">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>SH info</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_shinfo">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_shinfo">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_shinfo">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>agent transaction</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_agenttstion">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_agenttstion">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_agenttstion">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Request</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_request">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_request">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_request">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Anouncement</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_announcement">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_announcement">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_announcement">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Manage Record</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_managerecord">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_managerecord">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_managerecord">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Self Rolling</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="0" v-model="r_selfrolling">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="1" v-model="r_selfrolling">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="2" v-model="r_selfrolling">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-2">
                  <h5>Password:</h5>
                </div>
                <div class="col-4">
                  <input
                    type="text"
                    class="form-control"
                    v-model="addnewpassword"
                    placeholder="Type here...."
                  >
                </div>
              </div>
              <div class="row d-flex justify-content-center p-3">
                <button type="button" class="btn btn-primary mr-2" @click="addnewadmin">Create</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
      admininfoall:[],
      admininfo:[],
      r_player: null,
      gameble: null,
      r_gameresult: null,
      r_withtop: null,
      r_timeline: null,
      r_playerrecord: null,
      r_agentinfo: null,
      r_shinfo: null,
      r_agenttstion: null,
      r_request: null,
      r_announcement: null,
      r_managerecord: null,
      r_selfrolling: null,
      addnewadminder: null,
      addnewpassword: null,
      admintype: null
    };
  },
  mounted() {
    this.getadmininfo()
  },
  methods: {
    getadmininfo() {
      axios.get('getadmininfo').then(res=>{
        console.log(res.data)
        this.admininfoall = res.data.data.all.data
        this.admininfo  = res.data.data.auth
      })
    },
    addnewadmin() {
      let data = {
        r_player: this.r_player,
        gamble: this.gameble,
        r_gameresult: this.r_gameresult,
        r_withtop: this.r_withtop,
        r_timeline: this.r_timeline,
        r_playerrecord: this.r_playerrecord,
        r_agentinfo: this.r_agentinfo,
        r_shinfo: this.r_shinfo,
        r_agenttstion: this.r_agenttstion,
        r_request: this.r_request,
        r_announcement: this.r_announcement,
        r_managerecord: this.r_managerecord,
        r_selfrolling: this.r_selfrolling,
        addnewadminder: this.addnewadminder,
        addnewpassword: this.addnewpassword,
        admintype: this.admintype.siti
      };
      console.log(data);
      axios.post("addnewadmin", data).then(res => {
        console.log(res.data);
        if (res.data.code == 200) {
          this.getadmininfo();
        }
      }).catch(e=>{console.log(e.response)})
    }
  }
};
</script>

<style scoped>
</style>

