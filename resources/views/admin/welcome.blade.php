<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="apple-touch-icon" sizes="76x76" href="../assetsadmin/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assetsadmin/img/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
  <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
  <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
  <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
  <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  <!-- Bootstrap core CSS     -->
  <link href="../assetsadmin/css/bootstrap.min.css" rel="stylesheet" />
  <!--  Material Dashboard CSS    -->
  <link href="../assetsadmin/css/material-dashboard.css" rel="stylesheet" />
  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="../assetsadmin/css/demo.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="../assetsadmin/css/font-awesome.css" rel="stylesheet" />
  <link href="../assetsadmin/css/google-roboto-300-700.css" rel="stylesheet" />
</head>

<body>
  <div id="app" class="wrapper">
    @if(auth()->check())
    <input type="hidden" class="checkuser" name="" value="true">
    @else
    <input type="hidden" class="checkuser" name="" value="false">
    @endif
    <app-containeradmin></app-containeradmin>
  </div>
  <!--   Core JS Files   -->
  
  <script src="../js/app.js"></script>
  <script src="../assetsadmin/js/jquery-3.1.1.min.js" type="text/javascript"></script>
  <script src="../assetsadmin/js/jquery-ui.min.js" type="text/javascript"></script>
  <script src="../assetsadmin/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assetsadmin/js/material.min.js" type="text/javascript"></script>
  <script src="../assetsadmin/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assetsadmin/js/jquery.validate.min.js"></script>
  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src="../assetsadmin/js/moment.min.js"></script>
  <!--  Charts Plugin -->
  <script src="../assetsadmin/js/chartist.min.js"></script>
  <!--  Plugin for the Wizard -->
  <script src="../assetsadmin/js/jquery.bootstrap-wizard.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assetsadmin/js/bootstrap-notify.js"></script>
  <!--   Sharrre Library    -->
  <script src="../assetsadmin/js/jquery.sharrre.js"></script>
  <!-- DateTimePicker Plugin -->
  <script src="../assetsadmin/js/bootstrap-datetimepicker.js"></script>
  <!-- Vector Map plugin -->
  <script src="../assetsadmin/js/jquery-jvectormap.js"></script>
  <!-- Sliders Plugin -->
  <script src="../assetsadmin/js/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!--<script src="../assetsadmin/js/jquery.select-bootstrap.js"></script>-->
  <!-- Select Plugin -->
  <script src="../assetsadmin/js/jquery.select-bootstrap.js"></script>
  <!--  DataTables.net Plugin    -->
  <script src="../assetsadmin/js/jquery.datatables.js"></script>
  <!-- Sweet Alert 2 plugin -->
  <script src="../assetsadmin/js/sweetalert2.js"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assetsadmin/js/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin    -->
  <script src="../assetsadmin/js/fullcalendar.min.js"></script>
  <!-- TagsInput Plugin -->
  <script src="../assetsadmin/js/jquery.tagsinput.js"></script>
  <!-- Material Dashboard javascript methods -->
  <script src="../assetsadmin/js/material-dashboard.js"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assetsadmin/js/demo.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      // Javascript method's body can be found in assetsadmin/js/demos.js
      demo.initDashboardPageCharts();

      demo.initVectorMap();
    });
  </script>

</body>

</html>