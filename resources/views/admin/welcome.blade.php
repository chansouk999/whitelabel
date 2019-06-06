<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../assetsadmin/img/apple-icon.png') }}" />
  <link rel="icon" type="image/png" href="{{ asset('../assetsadmin/img/favicon.png') }}" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Admin | Whitelabel</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <link href="{{ asset('../assetsadmin/css/main.css') }}" rel="stylesheet" />
  <!-- Bootstrap core CSS     -->
  <link href="{{asset('../assetsadmin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <!--  Material Dashboard CSS    -->
  <link href="{{asset('../assetsadmin/css/material-dashboard.css')}}" rel="stylesheet" />
  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="{{asset('../assetsadmin/css/demo.css')}}" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="{{asset('../assetsadmin/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{asset('../assetsadmin/css/google-roboto-300-700.css')}}" rel="stylesheet" />
</head>

<body>
  <div id="app">
    @if(auth()->check())
    <input type="hidden" class="checkuser" name="" value="true">
    @else
    <input type="hidden" class="checkuser" name="" value="false">
    @endif
    <app-containeradmin></app-containeradmin>
  </div>
  <script src="../js/app.js"></script>
  <!--   Core JS Files   -->
  <script src="{{asset('../assetsadmin/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('../assetsadmin/js/jquery-ui.min.j')}}s" type="text/javascript"></script>
  <script src="{{asset('../assetsadmin/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('../assetsadmin/js/material.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('../assetsadmin/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{asset('../assetsadmin/js/jquery.validate.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src="{{asset('../assetsadmin/js/moment.min.js')}}" type="text/javascript"></script>
  <!--  Charts Plugin -->
  <script src="{{asset('../assetsadmin/js/chartist.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the Wizard -->
  <script src="{{asset('../assetsadmin/js/jquery.bootstrap-wizard.js')}}" type="text/javascript"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('../assetsadmin/js/bootstrap-notify.js')}}" type="text/javascript"></script>
  <!--   Sharrre Library    -->
  <script src="{{asset('../assetsadmin/js/jquery.sharrre.js')}}" type="text/javascript"></script>
  <!-- DateTimePicker Plugin -->
  <script src="{{asset('../assetsadmin/js/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!-- Vector Map plugin -->
  <script src="{{asset('../assetsadmin/js/jquery-jvectormap.js')}}" type="text/javascript"></script>
  <!-- Sliders Plugin -->
  <script src="{{asset('../assetsadmin/js/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!--<script src="assetsadmin/js/jquery.select-bootstrap.js"></script>-->
  <!-- Select Plugin -->
  <script src="{{asset('../assetsadmin/js/jquery.select-bootstrap.js')}}" type="text/javascript"></script>
  <!--  DataTables.net Plugin    -->
  <script src="{{asset('../assetsadmin/js/jquery.datatables.js')}}" type="text/javascript"></script>
  <!-- Sweet Alert 2 plugin -->
  <script src="{{asset('../assetsadmin/js/sweetalert2.js')}}" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{asset('../assetsadmin/js/jasny-bootstrap.min.js')}}" type="text/javascript"></script>
  <!--  Full Calendar Plugin    -->
  <script src="{{asset('../assetsadmin/js/fullcalendar.min.js')}}" type="text/javascript"></script>
  <!-- TagsInput Plugin -->
  <script src="{{asset('../assetsadmin/js/jquery.tagsinput.js')}}" type="text/javascript"></script>
  <!-- Material Dashboard javascript methods -->
  <script src="{{asset('../assetsadmin/js/material-dashboard.js')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('../assetsadmin/js/demo.js')}}"  type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>

</body>

</html>