<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
<title>Whitlabel </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Fonts -->
   

   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
        <!-- Mystyle -->
        <link href="css/mystyle.css" rel="stylesheet" />
</head>

<body class="white-content">
    <div id="app">
            @if(auth()->check())
                <input type="hidden" class="checkuser" name="" value="true">
            @else
                <input type="hidden" class="checkuser" name="" value="false">
            @endif
        <app-lobby
        recommend_friends="@lang('home.recommend_friends')"
            message="@lang('home.message')"
            myaccount_tra="@lang('home.myaccount_tra')"
            myprivilege="@lang('home.myprivilege')"
            gamelobby="@lang('home.gamelobby')"
            recharge="@lang('home.recharge')"
            withdraw="@lang('home.withdraw')"
            currentlang="{{Lang::locale()}}"
            login="@lang('home.login')"
            register="@lang('home.register')"
            free_trial="@lang('home.free_trial')"
            stock1="@lang('home.stock1')"
            stock2="@lang('home.stock2')"
            stock3="@lang('home.stock3')"
            stock4="@lang('home.stock4')"
            stock5="@lang('home.stock5')"
            stock6="@lang('home.stock6')"
            us_stock="@lang('home.us_stock')"
            cryptocurrencies="@lang('home.cryptocurrencies')"
            chines_stock="@lang('home.chines_stock')"
            lobby="@lang('home.lobby')"
        ></app-lobby>
    </div>
   <!--   Core JS Files   -->
   <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../js/myscript.js"></script>
  <script src="../js/app.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.min.js"></script>
  <!--  Plugin for Sorting Tables -->
  <script src="../assets/js/plugins/jquery.tablesorter.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <link href=" https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.css" rel="stylesheet">

  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

</body>

</html>