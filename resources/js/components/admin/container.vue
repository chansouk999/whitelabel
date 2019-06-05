<template>
  <div>
    <app-aside></app-aside>
    <div class="main-panel">
      <app-navbar></app-navbar>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-icon" data-background-color="green">
                  <i class="material-icons">language</i>
                </div>
                <div class="card-content">
                  <h4 class="card-title">Global Sales by Top Locations</h4>
                  <div class="row">
                    <div class="card card-nav-tabs card-plain">
                      <div class="card-header card-header bg-dark">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="nav-tabs-navigation">
                          <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="nav-item">
                                <a
                                  class="nav-link active"
                                  href="#playerinfo"
                                  data-toggle="tab"
                                >Player info</a>
                              </li>
                              <li class="nav-item">
                                <a
                                  class="nav-link"
                                  href="#gamehistory"
                                  data-toggle="tab"
                                >Game History</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#gameresult" data-toggle="tab">Game Result</a>
                              </li>
                              <li class="nav-item">
                                <a
                                  class="nav-link"
                                  href="#withdrawtopup"
                                  data-toggle="tab"
                                >Withdraw top-up</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#admininfo" data-toggle="tab">Admin info</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#timeline" data-toggle="tab">TimeLine</a>
                              </li>
                              <li class="nav-item">
                                <a
                                  class="nav-link"
                                  href="#>adminplayerrecord"
                                  data-toggle="tab"
                                >Player record</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#agentinfo" data-toggle="tab">Agent Info</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#shhinfo" data-toggle="tab">SH Info</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#finance" data-toggle="tab">Finance</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#request" data-toggle="tab">Request</a>
                              </li>
                              <li class="nav-item">
                                <a
                                  class="nav-link"
                                  href="#announcement"
                                  data-toggle="tab"
                                >Announcement</a>
                              </li>
                              <li class="nav-item">
                                <a
                                  class="nav-link"
                                  href="#managerecord"
                                  data-toggle="tab"
                                >Manage Record</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="tab-content text-center">
                          <div class="tab-pane active" id="playerinfo">
                            <div class="row">
                              <div class="col-md-6 text-left">
                                <p class="pl-5">Current Page : Page {{ userdetailpg.currentpage }}</p>
                              </div>
                              <div class="col-md-6">
                                <form class="navbar-form navbar-right m-0 pr-5" role="search">
                                  <div class="form-group form-search is-empty m-1">
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Search"
                                      v-model="searchuserdetail"
                                      @keyup.enter="userdata(userdetailpg.path+'?search='+searchuserdetail,method='search')"
                                    >
                                    <span class="material-input"></span>
                                  </div>
                                  <button
                                    type="submit"
                                    class="btn btn-white btn-round btn-just-icon"
                                  >
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                  </button>
                                </form>
                              </div>
                            </div>
                            <br>
                            <!-- PLAYER INFO -->
                            <div class="row">
                              <div class="col-md-7 col-lg-7">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th class="text-center">#</th>
                                      <th>PlayerID</th>
                                      <th>Name</th>
                                      <th>Balance</th>
                                      <th>Currency</th>
                                      <th>online hour</th>
                                      <th>Language</th>
                                      <th>Total rolling</th>
                                      <th>Available Rolling</th>
                                      <th>Online Status</th>
                                      <th>Register Time</th>
                                      <th>Register IP</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="tr-loader" v-if="loading == true">
                                      <td colspan="13">
                                        <div class="cover-load">
                                          <div class="lds-ring">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr class="tr-loader" v-if="loading_text == true">
                                      <td colspan="13">
                                        <div class="cover-load">NO DATA IN THIS PAGE</div>
                                      </td>
                                    </tr>
                                    <tr
                                      v-for="(data,index) in userdetail"
                                      class="userdeteail"
                                      v-if="loading == false"
                                    >
                                      <td class="text-center">{{ index+1 }}</td>
                                      <td>{{data.user_id}}</td>
                                      <td>{{data.name}}</td>
                                      <td>{{data.userBalance}}</td>
                                      <td>{{data.totalOnlineHour}}</td>
                                      <td>{{data.id}}</td>
                                      <td>{{data.userBalance}}</td>
                                      <td>{{data.userBalance}}</td>
                                      <td>{{data.userBalance}}</td>
                                      <td>{{data.userStatus}}</td>
                                      <td>{{data.created_at}}</td>
                                      <td>{{data.accessIP}}</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="col-md-5 col-lg-5">
                                <button
                                  type="button"
                                  rel="tooltip"
                                  class="btn btn-primary"
                                >Game History</button>
                                <button
                                  type="button"
                                  rel="tooltip"
                                  class="btn btn-primary"
                                >Top-up History</button>
                                <button
                                  type="button"
                                  rel="tooltip"
                                  class="btn btn-primary"
                                >Withdraw History</button>
                                <button
                                  type="button"
                                  rel="tooltip"
                                  class="btn btn-primary"
                                >Access Record</button>
                                <button
                                  type="button"
                                  rel="tooltip"
                                  class="btn btn-primary"
                                >Action Record</button>
                              </div>
<<<<<<< HEAD
                            </div>
                            <!-- PLAYER INFO -->
                            <nav aria-label="...">
                              <ul class="pagination">
                                <li class="page-item">
                                  <select
                                    class="browser-default custom-select"
                                    v-model="userdetailselectpage"
                                    @change="userdata(userdetailselectpage,method='listpage')"
                                  >
                                    <option
                                      selected
                                      v-for="page in userdetailpg.last_page"
                                      :value="page"
                                    >{{ page }}</option>
                                  </select>
                                </li>
                                <li class="page-item">
                                  <span
                                    class="page-link"
                                    @click="userdata(userdetailpg.prev_page_url,method='previous')"
                                  >Previous</span>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">{{ userdetailpg.currentpage - 1 }}</a>
                                </li>
                                <li class="page-item active">
                                  <span class="page-link">
                                    {{userdetailpg.currentpage}}
                                    <span
                                      class="sr-only"
                                    >{{userdetailpg.currentpage}}</span>
                                  </span>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">{{ userdetailpg.currentpage + 1 }}</a>
                                </li>
                                <li class="page-item">
                                  <a
                                    class="page-link"
                                    href="#"
                                    @click="userdata(userdetailpg.next_page_url,method='next')"
                                  >Next</a>
                                </li>
                              </ul>
                            </nav>
                          </div>

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
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="With Font Awesome Icons"
                                    >
                                  </div>
=======
                              </td>
                        </tr>
                        <tr  v-for="(data,index) in userdetail" class="userdeteail"  v-if="loading == false">
                          <td class="text-center">{{ index+1 }}</td>
                          <td>{{data.user_id}}</td>
                          <td>{{data.name}}</td>
                          <td>{{data.userBalance}}</td>
                          <td>{{data.currency}}</td>
                          <td>{{data.totalOnlineHour}}</td>
                          <td>{{data.lang}}</td>
                          <td>{{data.TotalRolling}}</td>
                          <td>{{data.AvailableRolling}}</td>
                          <td>{{data.userStatus}}</td>
                          <td>{{data.created_at}}</td>
                          <td>{{data.accessIP}}</td>
                          <td class="td-actions">
                            <button type="button" rel="tooltip" class="btn btn-success ml-2">Game History</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Top-up History</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Withdraw History</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Access Record</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Action Record</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- PLAYER INFO -->
                    <nav aria-label="...">
                        <ul class="pagination">
                          <li class="page-item">
                            
                            <select class="browser-default custom-select" v-model="userdetailselectpage" @change="userdata(userdetailselectpage,method='listpage')">
                              <option selected v-for="page in userdetailpg.last_page" :value="page">{{ page }}</option>
                            </select>
                          </li>
                          <li class="page-item">

                            <span class="page-link" @click="userdata(userdetailpg.prev_page_url,method='previous')">Previous</span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">{{ userdetailpg.currentpage - 1 }}</a></li>
                          <li class="page-item active">
                            <span class="page-link">
                              {{userdetailpg.currentpage}}
                              <span class="sr-only">{{userdetailpg.currentpage}}</span>
                            </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">{{ userdetailpg.currentpage + 1 }}</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" @click="userdata(userdetailpg.next_page_url,method='next')" >Next</a>
                          </li>
                        </ul>
                      </nav>

                  </div>


                  
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
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
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
<<<<<<< HEAD
                                    <td>&euro; 99,225</td>-->
                                    <td class="td-actions">
                                      <!-- <button type="button" rel="tooltip" class="btn btn-success">Game History</button> -->
                                      <button
                                        type="button"
                                        rel="tooltip"
                                        class="btn btn-success"
                                      >View Player</button>
                                      <button
                                        type="button"
                                        rel="tooltip"
                                        class="btn btn-success"
                                      >View Game Result</button>
                                      <!-- <button
=======
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <!-- <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td> -->
                          <td class="td-actions">
                            <!-- <button type="button" rel="tooltip" class="btn btn-success ml-2">Game History</button> -->
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >View Player</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >View Game Result</button>
                            <!-- <button
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Access Record</button>
                            <button
                              type="button"
                              rel="tooltip"
<<<<<<< HEAD
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
=======
                              class="btn btn-success ml-2"
                            >Action Record</button> -->
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
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <span class="page-link">
                              2
                              <span class="sr-only">(current)</span>
                            </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                  </div>
                    
                  </div>
                  <div class="tab-pane" id="gameresult">




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
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                            </div>
                          </div>
                          <div class="tab-pane" id="gameresult">
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
                                      <input
                                        type="text"
                                        class="form-control"
                                        placeholder="With Font Awesome Icons"
                                      >
                                    </div>
                                  </span>
                                </div>
                                <br>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th class="text-center">#</th>
                                      <th>gameID</th>
                                      <th>Game Result</th>
                                      <th>Number of Bets</th>
                                      <th>Number of Players</th>
                                      <th>Total Cash In</th>
                                      <th>Result Out Time</th>
                                      <!-- <th>Payout Status</th>
                                      <th>Bet Place Time</th>-->
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
<<<<<<< HEAD
                                      <td>&euro; 99,225</td>-->
                                      <td class="td-actions">
                                        <!-- <button type="button" rel="tooltip" class="btn btn-success">Game History</button> -->
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >View Detail</button>
                                        <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success"
                                        >View Game Result</button>-->
                                        <!-- <button
=======
                          <td>&euro; 99,225</td>
                          <!-- <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td> -->
                          <td class="td-actions">
                            <!-- <button type="button" rel="tooltip" class="btn btn-success ml-2">Game History</button> -->
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >View Detail</button>
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >View Game Result</button> -->
                            <!-- <button
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Access Record</button>
                            <button
                              type="button"
                              rel="tooltip"
<<<<<<< HEAD
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
=======
                              class="btn btn-success ml-2"
                            >Action Record</button> -->
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
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <span class="page-link">
                              2
                              <span class="sr-only">(current)</span>
                            </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                  </div>
                  </div>
                   
                   


                  </div>
                  <div class="tab-pane" id="withdrawtopup">



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
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="withdrawtopup">
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
                                      <input
                                        type="text"
                                        class="form-control"
                                        placeholder="With Font Awesome Icons"
                                      >
                                    </div>
                                  </span>
                                </div>
                                <br>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th class="text-center">#</th>
                                      <th>Time</th>
                                      <th>UserID</th>
                                      <th>Event</th>
                                      <th>Referrence</th>
                                      <th>Balance</th>
                                      <th>Amount</th>
                                      <th>Balance After Event</th>
                                      <th>Details</th>
                                      <th>Served By</th>
                                      <!-- <th>Online Status</th>
                          <th>Register Time</th>
<<<<<<< HEAD
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
                                      <td>&euro; 99,225</td>
                                      <td>&euro; 99,225</td>
                                      <!-- <td>&euro; 99,225</td> -->
                                      <td class="td-actions">
                                        <!-- <button type="button" rel="tooltip" class="btn btn-success">Game History</button> -->
                                        <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success"
                                        >View Detail</button>-->
                                        <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success"
                                        >View Game Result</button>-->
                                        <!-- <button
=======
                          <th>Register IP</th> -->
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
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <!-- <td>&euro; 99,225</td> -->
                          <td class="td-actions">
                            <!-- <button type="button" rel="tooltip" class="btn btn-success ml-2">Game History</button> -->
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >View Detail</button> -->
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >View Game Result</button> -->
                            <!-- <button
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Access Record</button>
                            <button
                              type="button"
                              rel="tooltip"
<<<<<<< HEAD
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
=======
                              class="btn btn-success ml-2"
                            >Action Record</button> -->
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
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <span class="page-link">
                              2
                              <span class="sr-only">(current)</span>
                            </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                  </div>
                  </div>
                    
                    



                  </div>
                  <div class="tab-pane" id="admininfo">




                    
                   





                  </div>
                  <div class="tab-pane" id="timeline">
                    <p>timeLine</p>
                  </div>
                  <div class="tab-pane" id="adminplayerrecord">
                    <p>adminplayerrecord</p>
                  </div>
                  <div class="tab-pane" id="agentinfo">



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
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="admininfo">
                            <p>admininfo</p>
                          </div>
                          <div class="tab-pane" id="timeline">
                            <p>timeLine</p>
                          </div>
                          <div class="tab-pane" id="adminplayerrecord">
                            <p>adminplayerrecord</p>
                          </div>
                          <div class="tab-pane" id="agentinfo">
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
                                      <input
                                        type="text"
                                        class="form-control"
                                        placeholder="With Font Awesome Icons"
                                      >
                                    </div>
                                  </span>
                                </div>
                                <br>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th class="text-center">#</th>
                                      <th>AgentID</th>
                                      <th>Type</th>
                                      <th>Join In Time</th>
                                      <th>Number Of Player Below</th>
                                      <th>etails</th>
                                      <th>Request IP</th>
                                      <th>IP</th>
                                      <!-- <th>Total Income</th>
                          <th>Bank Account</th>
                          <th>Name</th>
                          <th>Province</th>
                          <th>City</th>
                                      <th>Branch</th>-->
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
                                      <!-- <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
<<<<<<< HEAD
                                      <td>&euro; 99,225</td>-->
                                      <td class="td-actions">
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >Approve</button>
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >Deny</button>
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >View User</button>
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >Messager User</button>
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
=======
                          <!-- <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td>
                          <td>&euro; 99,225</td> -->
                          <td class="td-actions">
                            <button type="button" rel="tooltip" class="btn btn-success ml-2">Approve</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Deny</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >View User</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Messager User</button>
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Action Record</button> -->
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
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <span class="page-link">
                              2
                              <span class="sr-only">(current)</span>
                            </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                  </div>
                  </div>
                   
                   



                  </div>
                  <div class="tab-pane" id="finance">
                   
                   

<div class="tab-pane" id="gamehistory">

                     <div class="tab-pane active" id="playerinfo">
                    <!-- PLAYER INFO -->
                    
                  <div class="top-header-function">
                    <span class="page-current">Current Page : Page 1</span>
                    <button class="btn bg-dark">Make Balance Transfer</button>
                    <span class="page-search">
                      <div class="input-group col-6">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa fa-search"></i>
                                </span>
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                              </div>
                            </div>
<<<<<<< HEAD
                          </div>
                          <div class="tab-pane" id="finance">
                            <div class="tab-pane" id="gamehistory">
                              <div class="tab-pane active" id="playerinfo">
                                <!-- PLAYER INFO -->

                                <div class="top-header-function">
                                  <span class="page-current">Current Page : Page 1</span>
                                  <button class="btn bg-dark">Make Balance Transfer</button>
                                  <span class="page-search">
                                    <div class="input-group col-6">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="fa fa-search"></i>
                                        </span>
                                      </div>
                                      <input
                                        type="text"
                                        class="form-control"
                                        placeholder="With Font Awesome Icons"
                                      >
                                    </div>
                                  </span>
                                </div>
                                <br>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th class="text-center">#</th>
                                      <th>AgentID</th>
                                      <th>Type</th>
                                      <th>Join In Time</th>
                                      <th>Number Of Player Below</th>
                                      <th>Sub-Agent</th>
                                      <th>Balance</th>
                                      <th>Percenatge</th>
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
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >View Evidence</button>
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >Edit Evidence</button>
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
=======
                    </span>
                  </div><br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th>AgentID</th>
                          <th>Type</th>
                          <th>Join In Time</th>
                          <th>Number Of Player Below</th>
                          <th>Sub-Agent</th>
                          <th>Balance</th>
                          <th>Percenatge</th>
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
                            <button type="button" rel="tooltip" class="btn btn-success ml-2">View Evidence</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Edit Evidence</button>
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Income</button> -->
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Comission</button> -->
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Action Record</button> -->
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
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <span class="page-link">
                              2
                              <span class="sr-only">(current)</span>
                            </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                  </div>
                  </div>



                  </div>
                  <div class="tab-pane" id="shhinfo">
                    <p>shhinfo</p>
                  </div>
                  <div class="tab-pane" id="request">



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
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                              </div>
                            </div>
<<<<<<< HEAD
                          </div>
                          <div class="tab-pane" id="shhinfo">
                            <p>shhinfo</p>
                          </div>
                          <div class="tab-pane" id="request">
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
                                      <input
                                        type="text"
                                        class="form-control"
                                        placeholder="With Font Awesome Icons"
                                      >
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
                                      <th>etails</th>
                                      <th>Balance</th>
                                      <th>Percenatge</th>
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
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >View Evidence</button>
                                        <button
                                          type="button"
                                          rel="tooltip"
                                          class="btn btn-success"
                                        >Edit Evidence</button>
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
                          <div class="tab-pane" id="announcement">
                            <p>announcement</p>
                          </div>
                          <div class="tab-pane" id="managerecord">
                            <p>managerecord</p>
                          </div>
                        </div>
                      </div>
                    </div>
=======
                    </span>
                  </div><br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th>PlayerID</th>
                          <th>Request Detail</th>
                          <th>Amount</th>
                          <th>Methods</th>
                          <th>etails</th>
                          <th>Balance</th>
                          <th>Percenatge</th>
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
                            <button type="button" rel="tooltip" class="btn btn-success ml-2">View Evidence</button>
                            <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Edit Evidence</button>
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Income</button> -->
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Comission</button> -->
                            <!-- <button
                              type="button"
                              rel="tooltip"
                              class="btn btn-success ml-2"
                            >Action Record</button> -->
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
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <span class="page-link">
                              2
                              <span class="sr-only">(current)</span>
                            </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                  </div>
                  </div>
                    
                    



                  </div>
                  <div class="tab-pane" id="announcement">
                    <p>announcement</p>
                  </div>
                  <div class="tab-pane" id="managerecord">
                    <p>managerecord</p>
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <app-footer></app-footer>
      <app-setting></app-setting>
    </div>
  </div>
</template>
<script>
import aside from "./asides";
import navbar from "./navbar";
import footer from "./footers";
import setting from "./setting";
export default {
  data() {
    return {
      loading_text: false,
      loading: null,
      userdetail: [],
      userdetailpg: [],
      userdetailselectpage: null,
      searchuserdetail: null
    };
  },
  components: {
    "app-aside": aside,
    "app-navbar": navbar,
    "app-footer": footer,
    "app-setting": setting
  },
  mounted() {
    this.userdata();
  },
  methods: {
    userdata(pagenum, method) {
      this.loading = true;
      this.loading_text = false;
      let url = "";
      if (this.searchuserdetail == null) {
        if (method == "listpage") {
          url = "/getdata?page=" + pagenum;
        } else if (method == "previous" || method == "next") {
          url = pagenum;
        } else {
          url = "/getdata";
        }
      } else {
        if (method == "listpage") {
          url = "/getdata?page=" + pagenum + "&search=" + this.searchuserdetail;
        } else {
          url = pagenum;
        }
      }
      axios
        .get(url)
        .then(res => {
          console.log(res.data.userdata);
          if (res.data.userdata == "") {
            alert("ok");
          }
          this.userdetail = res.data.userdata.data;
          this.userdetailpg = {
            currentpage: res.data.userdata.current_page,
            next_page_url: res.data.userdata.next_page_url,
            path: res.data.userdata.path,
            last_page_url: res.data.userdata.last_page_url,
            per_page: res.data.userdata.per_page,
            last_page: res.data.userdata.last_page,
            prev_page_url: res.data.userdata.prev_page_url,
            per_page: res.data.userdata.per_page
          };
        })
        .catch(er => {
          console.log(er.res);
        });
    },

    gamehistory(pagenum, method) {
      this.loading = true;
      this.loading_text = false;
      let url = "";
      if (this.searchuserdetail == null) {
        if (method == "listpage") {
          url = "/getdata?page=" + pagenum;
        } else if (method == "previous" || method == "next") {
          url = pagenum;
        } else {
          url = "/getdata";
        }
      } else {
        if (method == "listpage") {
          url = "/getdata?page=" + pagenum + "&search=" + this.searchuserdetail;
        } else {
          url = pagenum;
        }
      }
      axios
        .get(url)
        .then(res => {
          console.log(res.data.userdata);
          if (res.data.userdata == "") {
            alert("ok");
          }
          this.userdetail = res.data.userdata.data;
          this.userdetailpg = {
            currentpage: res.data.userdata.current_page,
            next_page_url: res.data.userdata.next_page_url,
            path: res.data.userdata.path,
            last_page_url: res.data.userdata.last_page_url,
            per_page: res.data.userdata.per_page,
            last_page: res.data.userdata.last_page,
            prev_page_url: res.data.userdata.prev_page_url,
            per_page: res.data.userdata.per_page
          };
        })
        .catch(er => {
          console.log(er.res);
        });
    }
  },
  watch: {
    userdetail(e) {
      this.loading = false;
      // console.log(e)
    }
  }
};
</script>
<style scoped>
.tr-loader {
}
.tr-loader td {
}
.cover-load {
  margin-top: 40px;
}
.lds-ring {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 51px;
  height: 51px;
  margin: 6px;
  border: 6px solid #343a40;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #343a40 transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
