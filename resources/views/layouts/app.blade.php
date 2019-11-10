<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('/gentelella')}}/images/favicon.ico" type="image/ico">
    
        <title>ICARUS</title>
    
        <!-- Bootstrap -->
        <link href="{{ asset('/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('/gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('/gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('/gentelella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
        
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ asset('/gentelella/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    
        <!-- Custom Theme Style -->
        <link href="{{ asset('/gentelella/build/css/custom.min.css') }}" rel="stylesheet">
      </head>
<body class="nav-md">

    {{-- @include('layouts.menu-lateral') --}}
    {{-- @include('layouts.barra-topo') --}}
    {{-- @yield('content') --}}
    
    <div class="container body">
            <div class="main_container">
              <div class="col-md-3 left_col">
                    @include('layouts.menu-lateral')
              </div>
      
              <!-- top navigation -->
              <div class="top_nav">
                <div class="nav_menu">
                        @include('layouts.barra-topo')
                </div>
              </div>
              <!-- /top navigation -->
      
              <!-- page content -->
              <div class="right_col" role="main" style="min-height: 1704px;">
                @yield('content')
              </div>
              <!-- /page content -->
      
              <!-- footer content -->
              <footer>
                <div class="pull-right">
                  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
              </footer>
              <!-- /footer content -->
            </div>
          </div>

    

    <!-- jQuery -->
    <script src="{{asset('/gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{asset('/gentelella/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{asset('/gentelella/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{asset('/gentelella/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{asset('/gentelella/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{asset('/gentelella/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{asset('/gentelella/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{asset('/gentelella/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{asset('/gentelella/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{asset('/gentelella/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('/gentelella/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{asset('/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('/gentelella/build/js/custom.min.js') }}"></script>
    <script>
        $(document).ready(function(){

            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat'
            });

            $('input').on('ifChecked', function(event){
                //alert( 'Aqui vai a chamada para Inserção da linha' );
            });

            $('input').on('ifUnchecked', function(event){
                //alert( 'Aqui vai a chamada para Exclusão da linha' );
            });
        });
    </script>
    
</body>
</html>
