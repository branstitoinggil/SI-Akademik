<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SI AKADEMIK</title>
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

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <h3>SI AKADEMIK</h3>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<h2>User</h2>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="{{ url('tu/dashboard') }}">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Dashboard</span>
								</a>
                        </li>
                        <li>
                            <a href="{{ url('tu/kelola_dosen') }}" aria-expanded="false"><i class="icon nalika-user icon-wrap"></i> <span class="mini-click-non">Data Dosen</span></a>
                        </li>
                        <li>
                            <a  href="{{ url('tu/kelola_mahasiswa') }}" aria-expanded="false"><i class="icon nalika-user icon-wrap"></i> <span class="mini-click-non">Data Mahasiswa</span></a>
                        </li>
                        <li>
                            <a  href="{{ url('tu/kelola_matkul') }}" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Data Matkul</span></a>
                        </li>
                        <li>
                            <a  href="{{ url('tu/kelola_nilai') }}" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Data Nilai</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                        <i class="icon nalika-menu-task"></i>
                                                    </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            <div class="header-top-menu tabl-d-n hd-search-rp">
                                                <div class="breadcome-heading">
                                                    <form role="search" class="" hidden>
                                                        <input type="text" placeholder="Search..." class="form-control">
                                                        <a href=""><i class="fa fa-search"></i></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                <i class="icon nalika-user"></i>
                                                                <span class="admin-name">Akun</span>
                                                                <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                            </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                            <li>
                                                                <form action="{{ url('/logout') }}" method="post">
                                                                    @csrf
                                                                    <button type="submit" style="background-color: #1B2A47;"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul class="collapse dropdown-header-top">
                                                    <li><a href="index.html">Dashboard v.1</a></li>
                                                    <li><a href="index-1.html">Dashboard v.2</a></li>
                                                    <li><a href="index-3.html">Dashboard v.3</a></li>
                                                    <li><a href="product-list.html">Product List</a></li>
                                                    <li><a href="product-edit.html">Product Edit</a></li>
                                                    <li><a href="product-detail.html">Product Detail</a></li>
                                                    <li><a href="product-cart.html">Product Cart</a></li>
                                                    <li><a href="product-payment.html">Product Payment</a></li>
                                                    <li><a href="analytics.html">Analytics</a></li>
                                                    <li><a href="widgets.html">Widgets</a></li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="demo" class="collapse dropdown-header-top">
                                                    <li><a href="mailbox.html">Inbox</a>
                                                    </li>
                                                    <li><a href="mailbox-view.html">View Mail</a>
                                                    </li>
                                                    <li><a href="mailbox-compose.html">Compose Mail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="others" class="collapse dropdown-header-top">
                                                    <li><a href="file-manager.html">File Manager</a></li>
                                                    <li><a href="contacts.html">Contacts Client</a></li>
                                                    <li><a href="projects.html">Project</a></li>
                                                    <li><a href="project-details.html">Project Details</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="500.html">500 Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                    <li><a href="google-map.html">Google Map</a>
                                                    </li>
                                                    <li><a href="data-maps.html">Data Maps</a>
                                                    </li>
                                                    <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                    </li>
                                                    <li><a href="x-editable.html">X-Editable</a>
                                                    </li>
                                                    <li><a href="code-editor.html">Code Editor</a>
                                                    </li>
                                                    <li><a href="tree-view.html">Tree View</a>
                                                    </li>
                                                    <li><a href="preloader.html">Preloader</a>
                                                    </li>
                                                    <li><a href="images-cropper.html">Images Cropper</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                    <li><a href="bar-charts.html">Bar Charts</a>
                                                    </li>
                                                    <li><a href="line-charts.html">Line Charts</a>
                                                    </li>
                                                    <li><a href="area-charts.html">Area Charts</a>
                                                    </li>
                                                    <li><a href="rounded-chart.html">Rounded Charts</a>
                                                    </li>
                                                    <li><a href="c3.html">C3 Charts</a>
                                                    </li>
                                                    <li><a href="sparkline.html">Sparkline Charts</a>
                                                    </li>
                                                    <li><a href="peity.html">Peity Charts</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                    <li><a href="static-table.html">Static Table</a>
                                                    </li>
                                                    <li><a href="data-table.html">Data Table</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="formsmob" class="collapse dropdown-header-top">
                                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                    </li>
                                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                    </li>
                                                    <li><a href="password-meter.html">Password Meter</a>
                                                    </li>
                                                    <li><a href="multi-upload.html">Multi Upload</a>
                                                    </li>
                                                    <li><a href="tinymc.html">Text Editor</a>
                                                    </li>
                                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                    </li>
                                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                    </li>
                                                    <li><a href="password-meter.html">Password Meter</a>
                                                    </li>
                                                    <li><a href="multi-upload.html">Multi Upload</a>
                                                    </li>
                                                    <li><a href="tinymc.html">Text Editor</a>
                                                    </li>
                                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                                    <li><a href="login.html">Login</a>
                                                    </li>
                                                    <li><a href="register.html">Register</a>
                                                    </li>
                                                    <li><a href="lock.html">Lock</a>
                                                    </li>
                                                    <li><a href="password-recovery.html">Password Recovery</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
            </div>