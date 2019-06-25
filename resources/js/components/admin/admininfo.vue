<template>
  <div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
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
                      <p class="text-rose">ID :</p>
                      <p class="text-rose">FUCK YOU</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Name :</p>
                      <p class="text-rose">Bank</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Type :</p>
                      <p class="text-rose">e.g 01</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Role :</p>
                      <p class="text-rose">e.g defalt</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Last logged in :</p>
                      <p class="text-rose">13/09/2018 21:12:45</p>
                    </div>
                  </li>
                  <!-- /.item -->
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-info">
                      <p class="text-rose">Total Online :</p>
                      <p class="text-rose">3Day 16hrs 28Minus</p>
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
          <div class="col-md-8">
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
                <tr>
                  <td class="text-center">1</td>
                  <td>e.g alice</td>
                  <td>AdminID</td>
                  <td>TypeID e.g 02</td>
                  <td>e.g user/transfer</td>
                  <td>e.g 13/05/2019 18:06:31</td>
                  <td>?day?hrs?mins</td>
                  <td>online/offline</td>
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
          <!-- <div class="modal-body">
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
                          <input type="radio" value="viewonly_player" v-model="r_player">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </th>
                      <th>
                        <div class="form-check">
                          <input type="radio" value="editable_player" v-model="r_player">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </th>
                      <th>
                        <div class="form-check">
                          <input type="radio" value="noaccess_player" v-model="r_player">
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
                          <input type="radio" value="viewonly_gamble" v-model="gameble">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="editable_gamble" v-model="gameble">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input
                            type="radio"
                            checked="checked"
                            value="noaccess_gamble"
                            v-model="gameble"
                          >
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Game</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="viewonly_game" v-model="r_game">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="editable_game" v-model="r_game">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input
                            type="radio"
                            checked="checked"
                            value="noaccess_game"
                            v-model="r_game"
                          >
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Portal provider</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="viewonly_pt" v-model="r_pt">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="editable_pt" v-model="r_pt">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" checked="checked" value="noaccess_pt" v-model="r_pt">
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>admin</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="viewonly_admin" v-model="r_admin">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="editable_admin" v-model="r_admin">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input
                            type="radio"
                            checked="checked"
                            value="noaccess_admin"
                            v-model="r_admin"
                          >
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>TimeLine</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="viewonly_timeline" v-model="r_timeline">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="editable_timeline" v-model="r_timeline">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input
                            type="radio"
                            checked="checked"
                            value="noaccess_timeline"
                            v-model="r_timeline"
                          >
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Stock</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="viewonly_stock" v-model="r_stock">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="editable_stock" v-model="r_stock">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input
                            type="radio"
                            checked="checked"
                            value="noaccess_stock"
                            v-model="r_stock"
                          >
                          <label class="form-check-label" for="exampleCheck1">No access</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Finance</td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="viewonly_finance" v-model="r_finance">
                          <label class="form-check-label" for="exampleCheck1">View only</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="radio" value="editable_finance" v-model="r_finance">
                          <label class="form-check-label" for="exampleCheck1">Editable</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check">
                          <input
                            type="radio"
                            checked="checked"
                            value="noaccess_finance"
                            v-model="r_finance"
                          >
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
          </div> -->
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
export default {};
</script>

<style scoped>
</style>

