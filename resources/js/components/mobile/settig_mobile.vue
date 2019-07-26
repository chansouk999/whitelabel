<template>
  <div>
    <div class="fixed-plugin navbar-toggle">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"></i>
        </a>
        <ul class="dropdown-menu">
          <li class="header-title">Change Language</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors text-center">
                <div class="row justify-content-center">
                  <div class="w-20">
                    <a href="locale/en">
                      <span class="badge filter flag-icon flag-icon-us"></span>
                    </a>
                  </div>
                  <div class="w-20">
                    <a href="locale/ch">
                      <span class="badge filter flag-icon flag-icon-ch"></span>
                    </a>
                  </div>
                  <div class="w-20">
                    <a href="locale/th">
                      <span class="badge filter flag-icon flag-icon-th"></span>
                    </a>
                  </div>
                  <div class="w-20">
                    <a href="locale/la">
                      <span class="badge filter flag-icon flag-icon-la"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="button-container mt-4 pb-0 d-flex justify-content-center">
            <a href="#" class="btn btn-warning btn-ms">在线咨询</a>
            <span v-if="checkuser == 'true'">
              <a href="javascript:void(0);" @click="logout()" class="btn btn-warning btn-ms">logout</a>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      checkuser: document.querySelector(".checkuser").getAttribute("value")
    };
  },
//   props: ["logout"],
  methods: {
    logout() {
      this.$swal({
        title: "Log Out?",
        text: "Do you want to log out",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, Log out!",
        cancelButtonText: "No, keep it",
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false,
        allowOutsideClick: false
      })
        .then(res => {
          console.log(res);
          // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
          if (res.dismiss === "cancel") {
            swal({
              title: "Cancelled",
              text: "Your keep going to play :)",
              type: "error",
              confirmButtonClass: "btn btn-warning",
              buttonsStyling: false
            }).catch(swal.noop);
          } else {
            window.location.href = "/logout"; //Will logout
            swal({
              title: "Success!",
              text: "We hope to see you as soon.",
              type: "success",
              confirmButtonClass: "btn btn-success",
              buttonsStyling: false
            }).catch(swal.noop);
          }
        })
        .catch(swal.noop);
      // console.log("Your Click log out");
    }
  }
};
$(document).on('click', '.navbar-toggle', function() {
    var $toggle = $(this);

    if (blackDashboard.misc.navbar_menu_visible == 1) {
        $html.removeClass('nav-open');
        blackDashboard.misc.navbar_menu_visible = 0;
        setTimeout(function() {
            $toggle.removeClass('toggled');
            $('.bodyClick').remove();
        }, 550);

    } else {
        setTimeout(function() {
            $toggle.addClass('toggled');
        }, 580);

        var div = '<div class="bodyClick"></div>';
        $(div).appendTo('body').click(function() {
            $html.removeClass('nav-open');
            blackDashboard.misc.navbar_menu_visible = 0;
            setTimeout(function() {
                $toggle.removeClass('toggled');
                $('.bodyClick').remove();
            }, 550);
        });

        $html.addClass('nav-open');
        blackDashboard.misc.navbar_menu_visible = 1;
    }
});

</script>
<style scoped>
</style>
