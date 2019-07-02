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
              <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link5">Settings</a>
              </li>
              <li class="nav-item">
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
                        <div class="card card-register card-white">
                          <div class="card-header">
                            <img
                              class="card-img"
                              src="/../assets/img/card-primary.png"
                              alt="Card image"
                            />
                            <h4 class="card-title">Register</h4>
                          </div>
                          <div class="card-body">
                            <form class="form">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                  </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Full Name" />
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                  </div>
                                </div>
                                <input type="text" placeholder="Email" class="form-control" />
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                  </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Password" />
                              </div>
                            </form>
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
 