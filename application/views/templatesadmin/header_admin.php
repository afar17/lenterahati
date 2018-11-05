<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url('assetsadmin/'); ?>css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url('assetsadmin/'); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assetsadmin/'); ?>css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('assetsadmin/'); ?>css/font.css" type="text/css"/>
<link href="<?php echo base_url('assetsadmin/'); ?>css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url('assetsadmin/'); ?>css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo base_url('assetsadmin/'); ?>css/monthly.css">
<link rel="stylesheet" href="<?php echo base_url('assetsadmin/ui-lightness/jquery-ui.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assetsadmin/ui-lightness/jquery.ui.theme.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assetsadmin/css/sweetalert2.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/toastr.min.css'); ?>">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo base_url("assetsadmin/js/jquery2.0.3.min.js"); ?>"></script>
<script src="<?php echo base_url("assetsadmin/js/raphael-min.js"); ?>"></script>
<script src="<?php echo base_url("assetsadmin/js/morris.js"); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.PrintArea.js');?>"></script>
<script src="<?php echo base_url('assets/js/html2canvas.js');?>"></script>
<script src="https://js.pusher.com/4.3/pusher.min.js"></script>

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a  class="logo">
        ADMIN YLH
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-users"></i>
                <span class="badge bg-info" id="jumlahNotif">3</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
            </ul>
        </li>
        
        <!-- inbox dropdown end -->
       <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-warning" id="jumlahNotif">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Pesan Masuk</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?php echo site_url('login/signout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="<?php echo site_url('admin/dashboard'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
               
                <li>
                    <a href="<?php echo site_url('admin/galeri'); ?>">
                        <i class="fa fa-picture-o"></i>
                        <span>Galeri </span>
                    </a>
                </li>
				
                <li>
                    <a href="<?php echo site_url('info'); ?>">
                        <i class="fa fa-newspaper-o"></i>
                        <span>Informasi </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo site_url('admin'); ?>">
                        <i class="fa fa-child"></i>
                        <span>Penerimaan Siswa Baru (PSB)</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo site_url('admin/pendaftar'); ?>">Laporan Pendaftar</a></li>
                        <li><a href="<?php echo site_url('admin/pengumuman'); ?>">Pengumuman</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="sub">
                        <li>
							<a href="<?php echo site_url('users/daftar'); ?>">
								<i class="fa fa-users"></i>
								<span>Data User </span>
							</a>
						</li>
                        <li>
							<a href="<?php echo site_url('sekolah'); ?>">
								<i class="fa fa-home"></i>
								<span>Data Sekolah </span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('quota_tk'); ?>">
								<i class="fa fa-home"></i>
								<span>Quota TK </span>
							</a>
						</li>
                    </ul>
                </li>
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->