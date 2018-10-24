<!DOCTYPE html>
<head>
<title>Login Sistem Lentera Hati</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sistem Lentera Hati" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url('assetsadmin/'); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assetsadmin/'); ?>css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('assetsadmin/'); ?>css/font.css" type="text/css"/>
<link href="<?php echo base_url('assetsadmin/'); ?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url('assetsadmin/'); ?>js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>LOGIN LENTERA HATI</h2>
		<form action="<?php echo site_url('login/proses'); ?>" method="post">
			<input type="text" autofocus class="ggg" name="username" placeholder="USERNAME" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p><a href="<?php echo site_url('Home'); ?>">Kunjungi Website</a></p>
</div>
</div>
<script src="<?php echo base_url('assetsadmin/'); ?>js/bootstrap.js"></script>
<script src="<?php echo base_url('assetsadmin/'); ?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url('assetsadmin/'); ?>js/scripts.js"></script>
<script src="<?php echo base_url('assetsadmin/'); ?>js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url('assetsadmin/'); ?>js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url('assetsadmin/'); ?>js/jquery.scrollTo.js"></script>
</body>
</html>
