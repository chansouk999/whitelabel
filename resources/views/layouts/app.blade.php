<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Larave') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
 <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" /> <!-- CSS Files -->
  <link href="{{asset('../assetsadmin/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('../assetsadmin/css/main.css')}}" rel="stylesheet" />
</head>

<body class="login-page register-page">
  <div class="container">
    <div class="row mt-50">
      <div class="col-md-12">
        <div class="card card-testimonial">
          <div class="card-header card-header-avatar">
            <a href="#pablo">
              <img class="img img-raised" src="../assets/img/user_type.png" alt="Card image">
            </a>
          </div>
          <div class="card-body">
            <h2 class=" text-capitalize">
              Please choose your account type to login
            </h2>
          </div>
        </div>
      </div>
    </div>






    @if(!Auth::guard('shareholders')->check())

    <div class="row">
      <div class="col-md-4">
        <div class="card card-testimonial">
          <div class="card-header card-header-avatar">
            <a href="{{url('/shareholder/login')}}">
              <img class="img img-raised" src="../assets/img/Shareholder.png" alt="Card image">
            </a>
          </div>
          <div class="card-body">
            <p class="card-description">
              Shareholder account
            </p>
            <div class="icon icon-warning">
              <i class="fa fa-quote-right"></i>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{url('/shareholder/login')}}" class="btn btn-warning">
              <i class="tim-icons icon-lock-circle"></i> Login
            </a>
          </div>
        </div>
      </div>
      @else
      <div class="row">
            <div class="col-md-4">
              <div class="card card-testimonial">
                <div class="card-header card-header-avatar">
                  <a href="{{url('/shareholder/login')}}">
                    <img class="img img-raised" src="../assets/img/Shareholder.png" alt="Card image">
                  </a>
                </div>
                <div class="card-body">
                  <p class="card-description">
                    Shareholder
                  </p>
                  <div class="icon icon-warning">
                    <i class="fa fa-quote-right"></i>
                  </div>
                </div>
                <div class="card-footer">
                        <a onclick="linkTo('shareholder')" class="btn btn-success" style="color:aliceblue">
                          <i class="tim-icons icon-lock-circle"></i>  {{Auth::guard('shareholders')->user()->name}} is Logged
                        </a>
                      </div>
              </div>
            </div>
            @endif
















            @if(!Auth::guard('agents')->check())
      <div class="col-md-4">
        <div class="card card-testimonial">
          <div class="card-header card-header-avatar">
            <a href="/administrator/agent">
              <img class="img img-raised" src="../assets/img/agent.png" alt="Card image">
            </a>
          </div>
          <div class="card-body">
            <p class="card-description">
              Agent Account
            </p>
            <div class="icon icon-warning">
              <i class="fa fa-quote-right"></i>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{url('/agent/login')}}" class="btn btn-warning">
              <i class="tim-icons icon-lock-circle"></i> Login
            </a>
          </div>
        </div>
      </div>
      @else
      <div class="col-md-4">
            <div class="card card-testimonial">
              <div class="card-header card-header-avatar">
                <a href="/administrator/agent">
                  <img class="img img-raised" src="../assets/img/agent.png" alt="Card image">
                </a>
              </div>
              <div class="card-body">
                <p class="card-description">
                  Agent Account
                </p>
                <div class="icon icon-warning">
                  <i class="fa fa-quote-right"></i>
                </div>
              </div>
              <div class="card-footer">
                    <a  class="btn btn-success " onclick="linkTo('agent')" style="color:aliceblue">
                      <i class="tim-icons icon-lock-circle"></i>  {{Auth::guard('agents')->user()->name}} is Logged
                    </a>
                  </div>
            </div>
          </div>

        @endif















      @if(!Auth::guard('administrator')->check())
      <div class="col-md-4">
        <div class="card card-testimonial">
          <div class="card-header card-header-avatar">
            <a href="/administrator/login">
              <img class="img img-raised" src="../assets/img/admin.png" alt="Card image">
            </a>
          </div>
          <div class="card-body">
            <p class="card-description">
              Admin Account
            </p>
            <div class="icon icon-warning">
              <i class="fa fa-quote-right"></i>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{url('/administrator/login')}}" class="btn btn-warning">
              <i class="tim-icons icon-lock-circle"></i> Login
            </a>
          </div>
        </div>
      </div>
      @else
      <div class="col-md-4">
            <div class="card card-testimonial">
              <div class="card-header card-header-avatar">
                <a href="/administrator/login">
                  <img class="img img-raised" src="../assets/img/admin.png" alt="Card image">
                </a>
              </div>
              <div class="card-body">
                <p class="card-description">
                         Administrator
                </p>
                <div class="icon icon-warning">
                  <i class="fa fa-quote-right"></i>
                </div>
              </div>
              <div class="card-footer">
                <a onclick="linkTo('administrator')" class="btn btn-success" style="color:aliceblue">
                  <i class="tim-icons icon-lock-circle"></i>  {{Auth::guard('administrator')->user()->name}} is Logged
                </a>
              </div>
            </div>
          </div>
      @endif


    </div>
  </div>
  <main>
    @yield('content')
  </main>
  <!--   Core JS Files   -->
  <script src="../assetsadmin/js/core/jquery.min.js"></script>
  <script src="../assetsadmin/js/core/popper.min.js"></script>
  <script src="../assetsadmin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assetsadmin/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assetsadmin/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assetsadmin/js/plugins/sweetalert2.min.js"></script>
  <!--  Plugin for Sorting Tables -->
  <script src="../assetsadmin/js/plugins/jquery.tablesorter.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assetsadmin/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assetsadmin/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assetsadmin/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assetsadmin/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="../assetsadmin/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assetsadmin/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assetsadmin/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assetsadmin/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assetsadmin/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assetsadmin/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <script src="../assetsadmin/js/core/bootstrap.min.js"></script>

  <!-- Chart JS -->
  <script src="../assetsadmin/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assetsadmin/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assetsadmin/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assetsadmin/demo/demo.js"></script>
  <script>
      function linkTo(link){
         window.history.replaceState({}, document.title, "/" + link);
        location.reload()
      }
    $(document).ready(function() {


      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {


      demo.checkFullPageBackgroundImage();
    });
  </script>
</body>

</html>
