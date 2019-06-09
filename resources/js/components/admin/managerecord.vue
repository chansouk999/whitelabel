<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-3 text-left">
        <p class="pl-5">Current Page : 1</p>
      </div>
      <div class="col-md-2 text-center d-flex">
        <div class="form-check mr-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value>
            Player
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value>
            To Agent
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
      </div>
      <div class="col-md-5 text-right">
        <button
          class="btn btn-link"
          id="manage_record"
          data-toggle="modal"
          data-target=".manage_record"
        >
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade manage_record"
          tabindex="-1"
          role="dialog"
          aria-labelledby="manage_record"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  id="withdraw"
                  placeholder="WebID/currency/adminID/transferID"
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
    <div class="row">
      <div class="col-md-3">
        <div class="card card-nav-tabs">
          <div class="card-header bg-primary p-2 text-white">Featured</div>
          <ul class="list-group list-group-flush text-left">
            <li class="list-group-item">
              <a href>
                <i class="fa fa-inbox"></i>Inbox
              </a>
            </li>
            <li class="list-group-item">
              <a href>
                <i class="tim-icons icon-send"></i>Sent
              </a>
            </li>
            <li class="list-group-item">
              <a href>
                <i class="fa fa-file-text-o"></i> Drafts
              </a>
            </li>
            <li class="list-group-item">
              <a href>
                <i class="fa fa-filter"></i> Junk
                <span class="badge badge-pill badge-primary float-right">65</span>
              </a>
            </li>

            <li class="list-group-item">
              <a href>
                <i class="tim-icons icon-trash-simple"></i> Trash
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-primary card-outline">
          <div class="card m-0">
            <div class="card-body pb-0">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tim-icons icon-zoom-split"></i>
                  </div>
                </div>
                <input type="text" class="form-control" placeholder="Search Mail">
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-controls">
              <div class="float-left pt-0 pb-2 pl-3">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                  <i class="tim-icons icon-check-2"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="tim-icons icon-trash-simple"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fa fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fa fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="tim-icons icon-refresh-02"></i>
                </button>
              </div>
            </div>
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="inlineCheckbox2"
                            value="option2"
                          >
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
                      <a href="#" data-toggle="modal" data-target=".name_message">Alexander Pierce</a>
                    </td>
                    <td class="mailbox-subject">
                      <a href="#" data-toggle="modal" data-target=".name_message">
                        <b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                      </a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">5 mins ago</td>
                  </tr>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer p-0">
            <div class="mailbox-controls">
              <!-- PLAYER INFO -->
              <nav aria-label="..." class="d-flex justify-content-center">
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
              <!-- /.float-right -->
            </div>
          </div>
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>

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
                      <input type="text" class="form-control" placeholder="Transfer Amount">
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
                      <input type="text" class="form-control" placeholder="Type here...">
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
                      <input type="text" class="form-control" placeholder="Type here...">
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
                <hr>
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
              <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
              <div class="card-img-overlay">
                <h4 class="card-title">Card title</h4>
                <p
                  class="card-text"
                >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
              </div>
            </div>
            <hr>
            <div class="card bg-dark text-white">
              <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
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
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
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
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
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
                  <img class="card-img" src="assetsadmin/img/img01.png" alt="Card image">
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
                    <img src="assetsadmin/img/img-opacity.png" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="...">
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

    <!-- Modal -->
    <div
      class="modal fade name_message"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLongTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">...</div>
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

