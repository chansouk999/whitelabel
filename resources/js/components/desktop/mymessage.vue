<template>
  <div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-3">
          <div class="card card-nav-tabs">
            <div class="card-header bg-custome p-2 text-white">Featured</div>
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
                  <span class="badge badge-pill badge-custome float-right">65</span>
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
                        <input type="checkbox">
                      </td>
                      <td class="mailbox-star">
                        <a href="#">
                          <i class="fa fa-star text-warning"></i>
                        </a>
                      </td>
                      <td class="mailbox-name">
                        <a href="read-mail.html">Alexander Pierce</a>
                      </td>
                      <td class="mailbox-subject">
                        <b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
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
                <nav aria-label="..." class="mt-3">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
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
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
    </div>
    <button
      type="button"
      class="btn btn-lg btn-danger"
      data-toggle="popover"
      data-container="body"
      data-original-title="Popover Title"
      data-content="And here's some amazing content. It's very engaging. Right?"
      data-color="primary"
    >Click to toggle popover</button>
    <!-- /.content-wrapper -->
    <!-- start your code here! -->
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>

