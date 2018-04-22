<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Tabungan Santri</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/logo.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{!! asset('assets/plugins/bootstrap/css/bootstrap.css') !!}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{!! asset('assets/plugins/node-waves/waves.css') !!}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{!! asset('assets/plugins/animate-css/animate.css') !!}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{!! asset('assets/plugins/morrisjs/morris.css') !!}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{!! asset('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{!! asset('assets/css/themes/all-themes.css') !!}" rel="stylesheet" />
    <script type="text/javascript">
        function showClass() {
            var a1 = parseInt(2018);
            var a2 = parseInt({{Session::get('tahunAjaranMasuk')}});
            var result = 0;
            result = a1 - a2;
            kelas.value = result;
        }
    </script>
</head>
<body class="theme-blue">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <img src="assets/images/logo.jpg" class="navbar-left" height="12%" width="12%">
                <a class="navbar-brand" href="index.html">&nbsp; &nbsp; DAARUL MUGHNI AL - MAALIKI</a>
            </div>
           	<div class="nav navbar-nav navbar-right navbar-header">
                <p class="navbar-brand">SANTRI SAVING APPLICATION (User Area)</p>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->	
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    @if(Session::get('gender') == "Putra")
                        <img src="assets/images/user/putra.jpg" width="100" height="100" alt="User">
                    @else
                        <img src="assets/images/user/putri.jpg" width="100" height="100" alt="User">
                    @endif
                </div>
                <div class="info-container">
                    <div class="email" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('nim')}}</div>
                    <div class="name">{{Session::get('name')}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="/tabungan_dm/public/logoutUser"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            @php
            $nim=Session::get('nim');
            $user=App\UserModel::where('nim','=',$nim)->get()->first();
            @endphp
            <div class="menu">
                <ul class="list">
                    <li class="header">CURRENT BALANCE : {{$user->saldo}}</li>
                    <li class="active">
                        <a href="{{ url('home_user') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                </ul>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    <b>Copyright&copy; Zhd - 2018.</b>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
    	@yield('content')
    </section>


	<!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>

    <!-- JAVASCRIPT TABLE -->

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>

</body>
</html>