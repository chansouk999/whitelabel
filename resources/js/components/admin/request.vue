<template>
  <div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="tab-pane" id="gamehistory">
            <div class="tab-pane active" id="playerinfo">
              <!-- PLAYER INFO -->

              <div class="top-header-function">
                <span class="page-current">Current Page : Page 1</span>
                <span class="page-search">
                  <div class="input-group col-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-search"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="With Font Awesome Icons">
                  </div>
                </span>
              </div>
              <br>
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>PlayerID</th>
                    <th>Request Detail</th>
                    <th>Amount</th>
                    <th>Methods</th>
                    <th>Details</th>
                    <th>Reuqest Time</th>
                    <th>IP</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>Time</td>
                    <td>User</td>
                    <td>Amount</td>
                    <td>Currency</td>
                    <td>Methods</td>
                    <td>Assist Admin</td>
                    <td>Reference No</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" class="btn btn-success">Approve</button>
                      <button type="button" rel="tooltip" class="btn btn-success">Deny</button>, 
                      <button type="button" rel="tooltip" class="btn btn-success">View User</button>
                      <button type="button" rel="tooltip" class="btn btn-success">Message User</button>
                      <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success"
                      >Income</button>-->
                      <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success"
                      >Comission</button>-->
                      <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success"
                      >Action Record</button>-->
                    </td>
                  </tr>
                </tbody>
              </table>
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

