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
          data-target="#MakenewAgent"
        >Make new Agent</button>
      </div>
      <div class="col-md-4 text-right">
        <button class="btn btn-link" id="agent-info" data-toggle="modal" data-target=".agent-info">
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade agent-info"
          tabindex="-1"
          role="dialog"
          aria-labelledby="agent-info"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  id="agent-info"
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
              <th>AgentID</th>
              <th>Type</th>
              <th>Join in time</th>
              <th>Number of player below</th>
              <th>sub-agent</th>
              <th>Balance</th>
              <th>Precentage</th>
              <th>total income</th>
              <th>Bank Account</th>
              <th>Name</th>
              <th>Province</th>
              <th>City</th>
              <th>Branch</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>genID</td>
              <td>TypeID</td>
              <td>DATATIME</td>
              <td>e.g 100</td>
              <td>e.g 12</td>
              <td>e.g $200</td>
              <td>e.g 6%</td>
              <td>e.g $967.76</td>
              <td>Bank account number</td>
              <td>name on card</td>
              <td>register province</td>
              <td>city</td>
              <td>Branch</td>
              <td class="td-actions">
                <span data-toggle="modal" data-target=".sub-agent">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Sub Agent"
                    class="btn btn-info btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-trophy"></i>
                  </button>
                </span>
                <span data-toggle="modal" data-target=".player">
                  <button
                    type="button"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Player"
                    class="btn btn-danger btn-sm btn-icon"
                  >
                    <i class="tim-icons icon-video-66"></i>
                  </button>
                </span>
              </td>
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

    <!-- Modal view player-->
    <div
      class="modal fade sub-agent"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Player userID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="card-header">User name:</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Language :
                  <span class="text-warning">Chinese</span>
                </li>
                <li class="list-group-item">
                  Balance :
                  <span class="text-warning">$496.33</span>
                </li>
                <li class="list-group-item">
                  Total rolling :
                  <span class="text-warning">$1565.84</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal view game result-->
    <div
      class="modal fade player"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">GamID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="card-header">User name:</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Game ResultT :
                  <span class="text-warning">e.g 33</span>
                </li>
                <li class="list-group-item">
                  Total bets :
                  <span class="text-warning">e.g 777</span>
                </li>
                <li class="list-group-item">
                  Total number of player :
                  <span class="text-warning">e.g 588</span>
                </li>
                <li class="list-group-item">
                  Incom detai9300.78ls :
                  <span class="text-warning">e.g $</span>
                </li>
                <li class="list-group-item">
                  Result time :
                  <span class="text-warning">e.g 20/02/2019 19:29:43</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Maek new agent -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="MakenewAgent"
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
                      <label class="col-md-3 col-form-label">Bank Account</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="bankaccount"
                            class="form-control"
                            placeholder="Bank Account..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Provice</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="Provice"
                            class="form-control"
                            placeholder="Provice..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">City</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="city"
                            class="form-control"
                            placeholder="City..."
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Branch</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input
                            type="email"
                            name="branch"
                            class="form-control"
                            placeholder="Branch..."
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

