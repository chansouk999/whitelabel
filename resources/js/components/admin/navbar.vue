<template>
  <div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-minimize d-inline">
            <button
              class="minimize-sidebar btn btn-link btn-just-icon"
              rel="tooltip"
              data-original-title="Sidebar toggle"
              data-placement="right"
            >
              <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
              <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
            </button>
          </div>
          <div class="navbar-toggle d-inline">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navigation"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto">
            <li class="search-bar input-group">
              <button
                class="btn btn-link"
                id="search-button"
                data-toggle="modal"
                data-target="#searchModal"
              >
                <i class="tim-icons icon-zoom-split"></i>
                <span class="d-lg-none d-md-block">Search</span>
              </button>
            </li>
            <li class="dropdown nav-item">
              <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <div class="notification d-none d-lg-block d-xl-block"></div>
                <i class="tim-icons icon-sound-wave"></i>
                <p class="d-lg-none">Notifications</p>
              </a>
              <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                <li class="nav-link">
                  <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                </li>
                <li class="nav-link">
                  <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                </li>
                <li class="nav-link">
                  <a
                    href="javascript:void(0)"
                    class="nav-item dropdown-item"
                  >Your friend Michael is in town</a>
                </li>
                <li class="nav-link">
                  <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                </li>
                <li class="nav-link">
                  <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <div class="photo">
                  <img src="assetsadmin/img/mike.jpg" alt="Profile Photo">
                </div>
                <b class="caret d-none d-lg-block d-xl-block"></b>
                <p class="d-lg-none">Log out</p>
              </a>
              <ul class="dropdown-menu dropdown-navbar">
                <li class="nav-link">
                  <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                </li>
                <li class="nav-link">
                  <a
                    href="javascript:void(0)"
                    data-toggle="modal"
                    data-target="#password"
                    class="nav-item dropdown-item"
                  >Settings</a>
                </li>
                <li class="dropdown-divider"></li>
                <li class="nav-link">
                  <a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a>
                </li>
              </ul>
            </li>
            <li class="separator d-lg-none"></li>
          </ul>
        </div>
      </div>
    </nav>
    <div
      class="modal modal-search fade"
      id="searchModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="searchModal"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <input type="text" class="form-control"  placeholder="SEARCH">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Change password -->

    <div
      class="modal fade modal-primary"
      id="password"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <div class="card card-login card-plain">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>

              <div class="header header-primary text-center">
                <div class="modal-profile">
                  <img src="assetsadmin/img/emilyz.jpg" alt="...">
                </div>
              </div>
            </div>
            <div class="modal-body">
              <form class="form" method action>
                <div class="card-content">
                  <div class="input-group no-border form-control-lg">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                      </div>
                    </div>
                    <input
                      type="text"
                      name="current_password"
                      id="current_password"
                      class="form-control"
                      placeholder="Current Password..."
                    >
                  </div>

                  <div class="input-group no-border form-control-lg">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </div>
                    </div>
                    <input
                      type="password"
                      name="new_password"
                      id="new_password"
                      placeholder="New Password"
                      class="form-control"
                    >
                  </div>

                  <div class="input-group no-border form-control-lg">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </div>
                    </div>
                    <input
                      type="password"
                      name="confirm_password"
                      id="confirm_password"
                      placeholder="Confirm Password"
                      class="form-control"
                    >
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer text-center pt-4">
              <a href="#pablo" class="btn btn-neutral btn-round btn-lg btn-block">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Change password -->
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>
