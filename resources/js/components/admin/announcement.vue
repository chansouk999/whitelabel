<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-3 text-left">
        <p class="pl-5">Current Page : 1</p>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="card card-timeline card-plain">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-2 col-md-6">
                <!--
                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                -->
                <ul class="nav nav-pills nav-pills-primary flex-column">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      data-toggle="tab"
                      @click="getannounce('PA','PM')"
                    >Pop-up Promotion</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      @click="getannounce('NA','PM')"
                    >Normal Promotion</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      @click="getannounce('PA','AN')"
                    >Pop-up Announcement</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      @click="getannounce('NA','AN')"
                    >Normal Announcement</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-10">
                <div class="tab-content">
                  <div class="tab-pane active" id="Promotion">
                    <div class="card">
                      <div class="card-body">
                        <ul class="nav nav-pills ml-auto nav-pills-primary">
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              data-toggle="tab"
                              href="#Current"
                            >Current Using</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#History">History</a>
                          </li>
                          <li class="nav-item fr">
                            <a
                              class="nav-link active"
                              href="#"
                              data-toggle="modal"
                              data-target=".announcementpost"
                            >Add Post</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space">
                          <!-- /.tab-pane -->
                          <div class="tab-pane active" id="Current">
                            <div class="header text-center">
                              <h3 class="title">Timeline</h3>
                            </div>

                            <div class="row">
                              <div class="col-lg-12 col-sm-6">
                                <div class="card card-timeline card-plain">
                                  <div class="card-body">
                                    <ul class="timeline timeline-simple">
                                      <li
                                        class="timeline-inverted"
                                        v-for="(data,index) in announcementdata"
                                        :key="index"
                                      >
                                        <div class="timeline-badge danger">
                                          <i class="tim-icons icon-bag-16"></i>
                                        </div>
                                        <div class="timeline-panel text-left">
                                          <div class="timeline-heading">
                                            <span
                                              class="badge badge-info"
                                            >{{JSON.parse(data.message).title}}</span>
                                          </div>
                                          <div class="timeline-body">
                                            <p>Detail: {{ data.method}} ,{{JSON.parse(data.message).Promotion}}</p>
                                            <p>{{JSON.parse(data.message).msg}}</p>
                                            <hr />
                                            {{data.created_at | moment("calendar")}}
                                          </div>
                                          <div class="timeline-footer mr-5">
                                            <div class="dropdown">
                                              <button
                                                type="button"
                                                class="btn btn-round btn-info dropdown-toggle"
                                                data-toggle="dropdown"
                                                aria-expanded="false"
                                              >
                                                <i class="tim-icons icon-bullet-list-67"></i>
                                              </button>
                                              <div
                                                class="dropdown-menu"
                                                x-placement="bottom-start"
                                                style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;"
                                              >
                                                <a
                                                  class="dropdown-item"
                                                  :href="chat"
                                                  target="_blank"
                                                  @click="reply(data.AnouncementID)"
                                                >Reply</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                                <a class="dropdown-item" href="#">More info</a>
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
                          <!-- /.tab-pane -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="tab-pane" id="Promotion2">
                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                    <br />
                    <br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
                  </div>
                  <div class="tab-pane" id="Promotion3">
                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    <br />
                    <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                  </div>
                  <div class="tab-pane" id="Promotion4">
                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    <br />
                    <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                  </div>-->
                </div>
              </div>
            </div>
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
    <!-- Modal Balance Transfer -->

    <div
      class="modal fade balance-transfer"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">transfer Balance</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <p class="text-white text-right">Transfer Amount</p>
                  </div>
                  <div class="col-md-7">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Transfer Amount" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p class="text-white text-right">UserID</p>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Type here..." />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <p class="text-white text-right">Search for list</p>
                  </div>
                  <div class="col-md-4">
                    <select
                      class="selectpicker"
                      data-size="7"
                      data-style="btn btn-primary"
                      title="Single Select"
                    >
                      <option disabled selected>Single Option</option>
                      <option value="2">Foobar</option>
                      <option value="3">Is great</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p class="text-white text-right">UserID</p>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Type here..." />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <p class="text-white text-right">Search for list</p>
                  </div>
                  <div class="col-md-4">
                    <select
                      class="selectpicker"
                      data-size="7"
                      data-style="btn btn-primary"
                      title="Single Select"
                    >
                      <option disabled selected>Single Option</option>
                      <option value="2">Foobar</option>
                      <option value="3">Is great</option>
                    </select>
                  </div>
                </div>
                <hr />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Confirm</button>
          </div>
        </div>
      </div>
    </div>

    <!--/ Modal Balance Transfer -->

    <!--modal action record -->
    <div
      class="modal fade view-evidence"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">TransferID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card bg-dark text-white">
              <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
              <div class="card-img-overlay">
                <h4 class="card-title">Card title</h4>
                <p
                  class="card-text"
                >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
              </div>
            </div>
            <hr />
            <div class="card bg-dark text-white">
              <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
              <div class="card-img-overlay">
                <h4 class="card-title">Card title</h4>
                <p
                  class="card-text"
                >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
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
    <!--/modal View evidence -->

    <!--modal edit evidence-->
    <div
      class="modal fade edit-evidence"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">TransferID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="card bg-dark text-white">
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
                </div>
                <div class="card-footer">
                  <button
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Edit Evidence"
                    type="button"
                    class="btn btn-secondary btn-sm btn-icon"
                    data-dismiss="modal"
                  >
                    <i class="tim-icons icon-pencil"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-sm btn-icon"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Delete Evidence"
                  >
                    <i class="tim-icons icon-trash-simple"></i>
                  </button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card bg-dark text-white">
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
                </div>
                <div class="card-footer">
                  <button
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Edit Evidence"
                    type="button"
                    class="btn btn-secondary btn-sm btn-icon"
                    data-dismiss="modal"
                  >
                    <i class="tim-icons icon-pencil"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-sm btn-icon"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Delete Evidence"
                  >
                    <i class="tim-icons icon-trash-simple"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card bg-dark text-white">
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image" />
                </div>
                <div class="card-footer">
                  <button
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Edit Evidence"
                    type="button"
                    class="btn btn-secondary btn-sm btn-icon"
                    data-dismiss="modal"
                  >
                    <i class="tim-icons icon-pencil"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-sm btn-icon"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Delete Evidence"
                  >
                    <i class="tim-icons icon-trash-simple"></i>
                  </button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="assetsadmin/img/img-opacity.png" alt="..." />
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="..." />
                    </span>
                    <a
                      href="#pablo"
                      class="btn btn-danger btn-round fileinput-exists"
                      data-dismiss="fileinput"
                    >
                      <i class="fa fa-times"></i> Remove
                    </a>
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
    <!--/modal edit evidence -->

    <!-- msg -->
    <!-- msg -->
    <div
      class="modal fade announcementpost"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="form-horizontal" method="post" action="SaveAnnouncement">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Title</label>
                    <input type="text" v-model="title" class="form-control bg-dark" />
                    <select
                      class="selectpicker"
                      data-style="select-with-transition"
                      title="Type Announcement"
                      data-size="7"
                      v-model="typeAN"
                    >
                      <option value="AN">Announcement</option>
                      <option value="PM">Promotion</option>
                    </select>
                    <label for="exampleFormControlTextarea1">Type Announcement</label>
                    <select
                      class="selectpicker"
                      data-style="select-with-transition"
                      title="Mehod Announcement"
                      data-size="7"
                      v-model="method"
                    >
                      <option value="PA">Popup</option>
                      <option value="NA">Normal</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea
                      class="form-control bg-dark"
                      name="message"
                      rows="5"
                      v-model="message"
                    ></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button class="btn btn-primary" @click.prevent="postCheck">Post</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- UsaerTag -->
    <div
      class="modal fade"
      id="usertag"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="form-horizontal" method="post" action="SaveAnnouncement">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12">
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
                              placeholder="Search Mail TESTSETSE"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <div class="mailbox-controls">
                          <div class="float-left pt-0 pb-2 pl-3">
                            <!-- Check all button -->
                            <button
                              type="button"
                              class="btn btn-default btn-sm checkbox-toggle"
                              @click="Checkalluser()"
                            >
                              <i class="tim-icons icon-check-2"></i>
                            </button>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="btn btn-default btn-sm"
                                @click="ClearUsertag()"
                              >
                                <i class="tim-icons icon-trash-simple"></i>
                              </button>
                              <!-- <button type="button" class="btn btn-default btn-sm">
                                <i class="fa fa-reply"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-sm">
                                <i class="fa fa-share"></i>
                              </button>-->
                            </div>
                            <!-- /.btn-group -->
                            <!-- <button type="button" class="btn btn-default btn-sm">
                              <i class="tim-icons icon-refresh-02"></i>
                            </button>-->
                          </div>
                        </div>
                        <div class="table-responsive mailbox-messages">
                          <table class="table table-hover table-striped">
                            <tbody>
                              <tr
                                v-for="(data,index) in filteredResources"
                                v-if="index >= gamehistorystart && index <= gamehistoryend"
                              >
                                <td>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="clearCheck"
                                        value="option2"
                                        @click="UserTag(data.user_id)"
                                      />
                                      <span class="form-check-sign"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="mailbox-star">
                                  <a href="#">
                                    <i class="fa fa-star text-warning"></i>
                                  </a>
                                </td>

                                <td class="mailbox-name">
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target=".name_message"
                                  >{{data.name}}{{data.user_id}}</a>
                                </td>
                                <td class="mailbox-subject">
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target=".name_message"
                                  >{{data.email}}</a>
                                </td>
                                <td class="mailbox-attachment"></td>
                                <td class="mailbox-date">{{data.registerTime}}</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /. box -->
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item">
                    <select
                      class="selectpicker"
                      data-style="select-with-transition"
                      title="1"
                      data-size="7"
                    >
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
              <button type="button" @click.prevent="SaveAnnouncement" class="btn btn-primary">Done</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      gamehistorystart: 0,
      gamehistoryend: 9,
      gamehistorypagenum: 1,
      message: null,
      method: null,
      title: null,
      typeAN: null,
      chat: "/chat",
      announcementdata: [],
      methodSelection: "PA",
      typeSelection: "AN",
      typeAnnounce: null,
      getUserdata: [],
      userID: [],
      search: ""
    };
  },
  watch: {},
  mounted() {
    this.getannounce("PA", "AN");
    this.UserDetail();
  },
  filters: {
    formatDate(value) {
      let secound = new Date(value).getTime();
      return secound;
      return moment(String(value)).format("m/DD/YYYY hh:mm");
    }
  },
  computed: {
    filteredResources() {
      if (this.search) {
        return this.getUserdata.filter(username => {
          return username.name
            .toLowerCase()
            .includes(this.search.toLowerCase());
        });
      } else {
        return this.getUserdata;
      }
    }
  },
  methods: {
    reply(id) {
      localStorage.setItem("chatdata", id);
    },
    gamehistorypage(methods) {
      if (methods == "previous") {
        if (this.gamehistorystart > 0) {
          this.gamehistorystart -= 10;
          this.gamehistoryend -= 10;
          this.gamehistorypagenum -= 1;
        }
      } else {
        if (this.gamehistoryend < this.getUserdata.length) {
          this.gamehistorystart += 10;
          this.gamehistoryend += 10;
          this.gamehistorypagenum += 1;
        }
      }
    },
    getannounce(m1, m2) {
      axios.get("getannounce/" + m1 + "/" + m2).then(res => {
        console.log(res.data);
        this.announcementdata = res.data.data;
      });
    },
    SaveAnnouncement() {
      let vm = this;
      let data = {
        message: vm.message,
        method: vm.method,
        title: vm.title,
        typeAN: vm.typeAN,
        userID: vm.userID
      };
      // console.log(data);
      if (data.message == null) {
        this.$swal({
          type: "warning",
          title: "Please Fill in it",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success",
          html: "Please check the box that you fill in"
        });
      } else {
        // alert("Your are right");
        axios
          .post("/saveannounce", data)
          .then(res => {
            console.log(res.data);
            if (res.data.code == 200) {
              // this.cardinfo();
              // HIDE
              $(".announcementpost").modal("hide");
              this.$swal({
                type: "success",
                title: res.data.msg,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                html: "Please check the box that you fill in",
                timer: 1000
              });
              $("#usertag").modal("hide");
            }
            // if (res.data.code == 100) {
            //   this.$swal({
            //     type: "warning",
            //     title: res.data.msg,
            //     buttonsStyling: false,
            //     confirmButtonClass: "btn btn-success",
            //     html: "Please check the box that you fill in",
            //     timer: 1000
            //   });
            // }
          })
          .catch(er => {
            console.log(er.res);
          });
      }
    },
    UserDetail() {
      axios
        .get("/TaguserDetail")
        .then(res => {
          console.log("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
          console.log(res.data);
          console.log("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");

          this.getUserdata = res.data;
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    postCheck() {
      let vm = this;
      if (
        vm.title === null ||
        vm.typeAN === null ||
        vm.method === null ||
        vm.message === null
      ) {
        this.$swal({
          type: "warning",
          title: "Error",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success",
          text: "Please Complete the form!"
        });
      } else {
        $("#usertag").modal("show");
      }
    },
    UserTag(IDuser) {
      if (this.userID.includes(IDuser)) {
        this.userID.splice(IDuser);
        console.log(this.userID);
      } else {
        this.userID.push(IDuser);
        console.log("TTTTTTTTTTTTTTTTTTTTTTTTTTT");
        console.log(this.userID);
      }
    },
    Checkalluser() {
      $(".form-check-input").prop("checked", true);
      this.userID = "all";
      console.log("User is Check All");
    },
    ClearUsertag() {
      this.userID = [];
      $(".form-check-input").prop("checked", false);
      console.log(".prop('checked', false);");
    }
  }
};
</script>

<style>
.bootstrap-select.btn-group .dropdown-toggle .filter-option {
  color: rgb(217, 79, 212) !important;
}
.timeline-footer {
  display: flex;
  justify-content: flex-end !important;
}
</style>








