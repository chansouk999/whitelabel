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
              <div class="col-2">
                <div class="btn-group bootstrap-select show-tick">
                  <label for="exampleFormControlSelect2">Level</label>
                  <select
                    class="selectpicker"
                    data-style="btn btn-info"
                    multiple
                    title="Level"
                    data-size="7"
                    tabindex="-98"
                  >
                    <option value="15">In</option>
                    <option value="16">under</option>
                    <option value="17">above</option>
                    <option value="18">not in</option>
                  </select>
                </div>
              </div>
              <div class="col-1">
                <div class="btn-group bootstrap-select show-tick">
                  <label for="exampleFormControlSelect2"></label>
                  <select
                    class="selectpicker"
                    data-style="btn btn-info"
                    multiple
                    title="1"
                    data-size="7"
                    tabindex="-98"
                  >
                    <option value="15">1</option>
                    <option value="16">2</option>
                    <option value="17">3</option>
                    <option value="18">4</option>
                  </select>
                </div>
              </div>
              <div class="col-2">
                <div class="btn-group bootstrap-select show-tick">
                  <label for="exampleFormControlSelect2">Localted</label>
                  <select
                    class="selectpicker"
                    data-style="btn btn-info"
                    multiple
                    title="in or in"
                    data-size="7"
                    tabindex="-98"
                  >   
                    <option value="15">in</option>
                    <option value="16">in or in</option>
                    <option value="17">in and not in</option>
                  </select>
                </div>
              </div>
              <div class="col-2">
                <div class="btn-group bootstrap-select show-tick">
                  <label for="exampleFormControlSelect2"></label>
                  <select
                    class="selectpicker"
                    data-style="btn btn-info"
                    multiple
                    title="Thailand"
                    data-size="7"
                    tabindex="-98"
                  >
                    <option value="15">China</option>
                    <option value="16">USA</option>
                    <option value="17">Thailand</option>
                  </select>
                </div>
              </div>
              <div class="col-2">
                <div class="btn-group bootstrap-select show-tick">
                  <label for="exampleFormControlSelect2"></label>
                  <select
                    class="selectpicker"
                    data-style="btn btn-info"
                    multiple
                    title="China"
                    data-size="7"
                    tabindex="-98"
                  >
                    <option value="15">China</option>
                    <option value="16">USA</option>
                    <option value="17">Thailand</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <div class="btn-group bootstrap-select show-tick">
                  <label for="exampleFormControlSelect2">Amoute</label>
                  <select
                    class="selectpicker"
                    data-style="btn btn-info"
                    multiple
                    title="ranges from to"
                    data-size="7"
                    tabindex="-98"
                  >
                    <option value="15">Reach</option>
                    <option value="16">Above</option>
                    <option value="17">Equal to</option>
                    <option value="17">Other than</option>
                    <option value="17">ranges from to</option>
                  </select>
                </div>
              </div>
              <div class="col-2">
              <div class="btn-group bootstrap-select show-tick">
                <label for="exampleFormControlSelect2"></label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  multiple
                  title="$ 100"
                  data-size="7"
                  tabindex="-98"
                >
                  <option value="15">$ 100</option>
                  <option value="15">$ 200</option>
                  <option value="15">$ 300</option>
                </select>
              </div>
            </div>
            <div class="col-2">
              <div class="btn-group bootstrap-select show-tick">
                <label for="exampleFormControlSelect2"></label>
                <select
                  class="selectpicker"
                  data-style="btn btn-info"
                  multiple
                  title="$ 100"
                  data-size="7"
                  tabindex="-98"
                >
                  <option value="15">$ 100</option>
                  <option value="15">$ 200</option>
                  <option value="15">$ 300</option>
                </select>
              </div>
            </div>
          </div>
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
 