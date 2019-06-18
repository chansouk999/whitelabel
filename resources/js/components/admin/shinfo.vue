<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-4 text-left">
        <p class="pl-5">Current Page : Page</p>
      </div>
      <div class="col-md-4">
        <button
          class="btn btn-primary btn-round"
          data-toggle="modal"
          data-target="#shareholder"
        >Make shareholder</button>
      </div>
      <div class="col-md-4 text-right">
        <button class="btn btn-link" id="shinfo" data-toggle="modal" data-target=".shinfo">
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade shinfo"
          tabindex="-1"
          role="dialog"
          aria-labelledby="shinfo"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  id="shinfo"
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
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>shareholderID</th>
              <th>Nmae</th>
              <th>Access Permission</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>ShareholderID</td>
              <td>Shareholder name</td>
              <td>admin page permission</td>
            </tr>
          </tbody>
        </table>
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
    <!-- Modal -->
    <div
      class="modal fade"
      id="shareholder"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form class="form-horizontal" method="post" action>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Make new agent</h5>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <label class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Name...">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">ACCESS PERMISSION</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="accesspermission"
                            class="form-control"
                            placeholder="ACCESS PERMISSION..."
                          >
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Save & Continue</button>
            </div>
          </form>
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

