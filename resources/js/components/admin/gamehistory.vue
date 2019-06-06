<template>
  <div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="tab-pane active" id="playerinfo">
            <!-- PLAYER INFO -->

            <div class="top-header-function">
              <span class="page-current">Current Page : Page 1sfsf</span>
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
                  <th>Reference</th>
                  <th>PlayerID</th>
                  <th>gameID</th>
                  <th>Bet Amount</th>
                  <th>Payout</th>
                  <th>Rolling</th>
                  <th>Payout Status</th>
                  <th>Bet Place Time</th>
                  <!-- <th>Online Status</th>
                          <th>Register Time</th>
                  <th>Register IP</th>-->
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>bet id</td>
                  <td>Develop</td>
                  <td>2013</td>
                  <td>&euro; 99,225</td>
                  <td>&euro; 99,225</td>
                  <td>&euro; 99,225</td>
                  <td>&euro; 99,225</td>
                  <td>&euro; 99,225</td>
                  <!-- <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                  <td>&euro; 99,225</td>-->
                  <td class="td-actions">
                    <!-- <button type="button" rel="tooltip" class="btn btn-success">Game History</button> -->
                    <button type="button" rel="tooltip" class="btn btn-success">View Player</button>
                    <button type="button" rel="tooltip" class="btn btn-success">View Game Result</button>
                    <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Access Record</button>
                            <button
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
</template>
<script>
export default {};
</script>

<style scoped>
</style>

