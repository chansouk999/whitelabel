<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-3 text-left">
        <p class="pl-5">Current Page : 1</p>
      </div>
      <div class="col-md-5 text-right">
        <button
          class="btn btn-link"
          id="announcement"
          data-toggle="modal"
          data-target=".announcement"
        >
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade announcement"
          tabindex="-1"
          role="dialog"
          aria-labelledby="announcement"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  placeholder="WebID/currency/adminID/transferID"
                />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
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
                              class="nav-link"
                              href="#"
                              data-toggle="modal"
                              data-target=".announcementpost"
                            >Add Post</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space">
                          <div class="tab-pane active" id="Current">


                            <div class="row">
                  <div class="col-6 bg-card-admin">
                    <div class="row">
                    
                      <div class="col-md-6"  v-for="data in announcementdata" >
                        <div class="info-area info-horizontal">
                          <div class="icon icon-light mt-0">
                            <i class="tim-icons icon-wifi mt-3"></i>
                          </div>
                          <div class="description">
                            <h3 class="info-title">{{JSON.parse(data.message).title}}</h3>
                            <p class="description">Detail: {{ data.method}} ,{{JSON.parse(data.message).Promotion}}</p>
                            <p>{{JSON.parse(data.message).msg}}</p>
                            
                          </div>
                        </div>
                        <div class="d-flex justify-content-lg-between ps-custome">
                          <button type="button" class="btn btn-warning btn-sm btn-icon">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-sm btn-icon">
                            <i class="tim-icons icon-trash-simple"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6"></div>
                </div>



                            
                            <ul class="timeline timeline-simple">
                              <li class="timeline-inverted">
                                <div class="timeline-badge danger">
                                  <i class="tim-icons icon-bag-16"></i>
                                </div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <span class="badge badge-danger"></span>
                                  </div>
                                  <div class="timeline-body">
                                    
                                  </div>
                                 
                                </div>
                              </li>
                            </ul>
                          </div>
                          
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
                  </div> -->
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
                    <select name class="form-control bg-dark" id v-model="typeAN">
                      <option value="AN">Announcement</option>
                      <option value="PM">Promotion</option>
                    </select>
                    <label for="exampleFormControlTextarea1">Type Announcement</label>
                    <select name class="form-control bg-dark" id v-model="method">
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
              <button
                type="button"
                class="btn btn-primary"
                @click.prevent="SaveAnnouncement"
              >Save changes</button>
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
      message: null,
      method: null,
      title: null,
      typeAN: null,
      announcementdata: [],
      methodSelection: "PA",
      typeSelection: "AN",
      typeAnnounce: null
    };
  },
  watch: {},
  mounted() {
    this.getannounce("PA", "AN");
  },
  methods: {
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
        typeAN: vm.typeAN
      };
      console.log(data);
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
    }
  }
};
</script>

<style scoped>
</style>

