<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
        
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        *{
            color:white;
        }
    </style>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:50px;">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            @if(session()->has('loginError'))
            <div class="text-center m-b-md custom-login">
                <h3>{{ session('loginError') }}</h3>
            </div>
            @endif
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>Mohon Untuk Regist Terlebih Dahulu !</h3>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('/register') }}" method="post" id="loginForm">
                          @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">NIP</label>
                                <input type="text" placeholder="Masukan NIP" title="Masukan NIP Anda" required="" value=""  name="nip" id="nip" class="form-control @error('nip') is-invalid @enderror">
                                <span class="help-block small">Masukan NIP anda</span>
                                @error('nip')
                                <span class="btn btn-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label class="control-label" for="Nama">Nama</label>
                              <input type="text" placeholder="Masukan Nama Anda" title="Masukan Nama Anda" required="" value=""  name="nama" id="nip" class="form-control @error('nama') is-invalid @enderror">
                              <span class="help-block small">Masukan Nama anda</span>
                              @error('nama')
                              <span class="btn btn-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label class="control-label" for="Nama">NO HP</label>
                              <input type="number" placeholder="Masukan No Hp Anda" title="Masukan Nama Anda" required="" value=""  name="no_hp" id="nip" class="form-control @error('nip') is-invalid @enderror">
                              <span class="help-block small">Masukan Nomor HP</span>
                              @error('no_hp')
                              <span class="btn btn-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="email" placeholder="example@gmail.com" title="Masukan Email Anda" required="" value=""  name="email" id="username" class="form-control @error('email') is-invalid @enderror">
                                <span class="help-block small">Masukan Email anda</span>
                                @error('email')
                                <span class="btn btn-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Masukan Password Anda !</span>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Submit</button>
                            <a class="btn btn-default btn-block" href="{{ url('login') }}">Login</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>

<!-- jquery
============================================ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- wow JS
============================================ -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- price-slider JS
============================================ -->
<script src="{{ asset('js/jquery-price-slider.js') }}"></script>
<!-- meanmenu JS
============================================ -->
<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
<!-- owl.carousel JS
============================================ -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- sticky JS
============================================ -->
<script src="{{ asset('js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
============================================ -->
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
<!-- metisMenu JS
============================================ -->
<script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
<!-- sparkline JS
============================================ -->
<script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
<!-- calendar JS
============================================ -->
<script src="{{ asset('js/calendar/moment.min.js') }}"></script>
<script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/calendar/fullcalendar-active.js') }}"></script>
<!-- float JS
============================================ -->
<script src="{{ asset('js/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('js/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('js/flot/curvedLines.js') }}"></script>
<script src="{{ asset('js/flot/flot-active.js') }}"></script>
<!-- plugins JS
============================================ -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- main JS
============================================ -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">


</html>