 <template>
  <div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <ul class="nav nav-pills nav-pills-primary flex-column text-capitalize">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#bankinfo">Bank card information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#usagerule">Usage Rule Settiing</a>
              </li>
              <!--  <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link6">Options</a>
              </li>-->
            </ul>
          </div>
          <div class="col-md-10">
            <div class="tab-content">
              <div class="tab-pane active" id="bankinfo">
                <div class="row">
                  <div class="col-6 bg-card-admin">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="cover atvImg">
                          <div class="atvImg-layer">
                            <img src="assets/img/visa-bg.jpg" alt />
                          </div>
                          <div class="atvImg-layer">
                            <img src="assets/img/visa.png" alt />
                            <div class="d-flex justify-content-between">
                              <h2 class="crs">1232512356</h2>
                              <div class="addreess">
                                <p class="text-white">LAOS</p>
                                <p class="text-white">registerCity</p>
                              </div>
                              <div class="user_id">user_id</div>
                              <!-- <p>{{data.user_id}}</p> -->
                              <br />
                              <div class="d-flex justify-content-between">
                                <p class="card-userName">userName.</p>
                                <p class="card-bankAccount">bankAccount</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="info-area info-horizontal">
                          <div class="icon icon-light mt-0">
                            <i class="tim-icons icon-wifi mt-3"></i>
                          </div>
                          <div class="description">
                            <h3 class="info-title">Details</h3>
                            <p class="description">Added by ::</p>
                            <p class="description">Last Edit ::</p>
                            <p class="description">Last Edit by ::</p>
                            <p class="description">Usage ::</p>
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
              </div>
              <div class="tab-pane" id="usagerule">
                <div class="row">
                  <div class="col-lg-3 col-md-6">
                    <div class="card card-pricing card-warning card-raised card-white">
                      <div class="card-body">
                        <h1 class="card-title">mid</h1>
                        <img class="card-img" src="/../assets/img/card-warning.png" alt="Image" />
                        <ul class="list-group">
                          <li class="list-group-item">200 messages</li>
                          <li class="list-group-item">130 emails</li>
                          <li class="list-group-item">24/7 Support</li>
                        </ul>
                        <div class="card-prices">
                          <h3 class="text-on-front">
                            <span>$</span>72
                          </h3>
                          <h5 class="text-on-back">72</h5>
                          <p class="plan">Medium plan</p>
                        </div>
                      </div>
                      <div class="card-footer text-center mb-3 mt-3">
                        <button
                          class="btn btn-round btn-just-icon btn-warning"
                          data-toggle="modal"
                          data-target="#addcard"
                        >Add</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addcard"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-cutome-admin">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-3">
                <div class="btn-group bootstrap-select open">
                  <button
                    type="button"
                    class="dropdown-toggle btn btn-primary"
                    data-toggle="dropdown"
                    role="button"
                    title="Foobar"
                    aria-expanded="false"
                  >
                    <span class="filter-option pull-left">Foobar</span>&nbsp;
                    <span class="bs-caret">
                      <span class="caret"></span>
                    </span>
                  </button>
                  <div
                    class="dropdown-menu open"
                    role="combobox"
                    x-placement="bottom-start"
                    style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;"
                  >
                    <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                      <li data-original-index="1" class="disabled">
                        <a
                          tabindex="-1"
                          class
                          data-tokens="null"
                          role="option"
                          href="#"
                          aria-disabled="true"
                          aria-selected="false"
                        >
                          <span class="text">Single Option</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="2" class="selected">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="true"
                        >
                          <span class="text">Foobar</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="3">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Is great</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <select
                    class="selectpicker"
                    data-size="7"
                    data-style="btn btn-primary"
                    title="Single Select"
                    tabindex="-98"
                  >
                    <option class="bs-title-option" value>Single Select</option>
                    <option disabled selected>Single Option</option>
                    <option value="2">Foobar</option>
                    <option value="3">Is great</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-3">
                <div class="btn-group bootstrap-select show-tick">
                  <button
                    type="button"
                    class="dropdown-toggle btn btn-info"
                    data-toggle="dropdown"
                    role="button"
                    title="Paris"
                    aria-expanded="false"
                  >
                    <span class="filter-option pull-left">Paris</span>&nbsp;
                    <span class="bs-caret">
                      <span class="caret"></span>
                    </span>
                  </button>
                  <div
                    class="dropdown-menu open"
                    role="combobox"
                    x-placement="bottom-start"
                    style="max-height: 275px; overflow: hidden; position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;"
                  >
                    <ul
                      class="dropdown-menu inner"
                      role="listbox"
                      aria-expanded="false"
                      style="max-height: 259px; overflow-y: auto;"
                    >
                      <li data-original-index="0" class="disabled">
                        <a
                          tabindex="-1"
                          class
                          data-tokens="null"
                          role="option"
                          href="#"
                          aria-disabled="true"
                          aria-selected="false"
                        >
                          <span class="text">Multiple Options</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="1" class="selected">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="true"
                        >
                          <span class="text">Paris</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="2">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Bucharest</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="3">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Rome</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="4">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">New York</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="5">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Miami</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="6">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Piatra Neamt</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="7">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Paris</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="8">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Bucharest</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="9">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Rome</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="10">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">New York</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="11">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Miami</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="12">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Piatra Neamt</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="13">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Paris</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="14">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Bucharest</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="15">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Rome</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="16">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">New York</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="17">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Miami</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                      <li data-original-index="18">
                        <a
                          tabindex="0"
                          class
                          data-tokens="null"
                          role="option"
                          aria-disabled="false"
                          aria-selected="false"
                        >
                          <span class="text">Piatra Neamt</span>
                          <span class="tim-icons icon-check-2 check-mark"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <select
                    class="selectpicker"
                    data-style="btn btn-info"
                    multiple
                    title="Choose City"
                    data-size="7"
                    tabindex="-98"
                  >
                    <option disabled>Multiple Options</option>
                    <option value="2">Paris</option>
                    <option value="3">Bucharest</option>
                    <option value="4">Rome</option>
                    <option value="5">New York</option>
                    <option value="6">Miami</option>
                    <option value="7">Piatra Neamt</option>
                    <option value="8">Paris</option>
                    <option value="9">Bucharest</option>
                    <option value="10">Rome</option>
                    <option value="11">New York</option>
                    <option value="12">Miami</option>
                    <option value="13">Piatra Neamt</option>
                    <option value="14">Paris</option>
                    <option value="15">Bucharest</option>
                    <option value="16">Rome</option>
                    <option value="17">New York</option>
                    <option value="18">Miami</option>
                    <option value="19">Piatra Neamt</option>
                  </select>
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
  </div>
</template>
 <script>
export default {};
</script>
 
 <style scoped>
</style>
 