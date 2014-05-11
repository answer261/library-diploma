<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<!-- Main Global Page Template [Admin] -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo "{$title}"; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>public/css/framework.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>public/css/main.css">
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<link rel="shortcut icon" href="<?php echo URL::base();?>public/images/favicon.ico">
		<script type="text/javascript" src="<?php echo URL::base();?>public/js/main_adm.js"></script>
		<script type="text/javascript" src="<?php echo URL::base();?>public/js/classEditor.js"></script>
		<script type="text/javascript" src="<?php echo URL::base();?>public/js/row_editor.js"></script>
		<script type="text/javascript" src="<?php echo URL::base();?>public/js/ajax.js"></script>
		<script type="text/javascript" src="<?php echo URL::base();?>public/js/validation.js"></script>
		<script type="text/javascript" src="<?php echo URL::base();?>public/js/history.js"></script>
		<!--[if lte IE 7]>
			<script>var ieCapt = true;</script>
		<![endif]-->
	</head>

	<body>	
		<div id="parser" style="display:none"></div>

		<!-- Wrapper -->
		<div class='wrapper' id="wrapper">
				
			<!-- Header -->
			<div class='header'>
				<div class="row">
					<div class='cloud'>
						<a href='<?php echo URL::site('admin')?>' class='logo'></a>
						<div class='contacts'>
							<div class="phonenumber">
								<span class='code'>(066)</span>
								<span class='number'>666-66-66</span>
							</div>
							<div class='contact'>
								<span >Зв'яжіться з нами</span>
							</div>
						</div>
					</div>
				</div>
					
				<!-- /Navigation -->
				<div class='wrapp-menu  no-fall'>
					<div class="row row-grad">                     
							<ul class="nav">
								<li><a href='<?php echo URL::site('user/orders/new')?>' target="_self"><i class="icon_brands"></i>Замовити книжку</a></li>

							</ul>
							<ul class='add-menu'>
								<li><a class='icon_home' href='<?php echo URL::site('../')?>' target="_self"></a></li>
								<li><a class='icon_signout' href='<?php echo URL::site('logout')?>' target="_self"></a></li>
							</ul>
	    
					</div>
				</div>
				<!-- /Navigation -->
		
	    	</div>
	    	<!-- Header -->

	    	<!-- Content -->
			<div class='content' id="content">  	    
				<div class="content-wrap text-center">
					<?php echo $content ?>
	   			</div>
			</div>
			<!-- Content -->
	    
		    <!-- Footer -->
		    <div class='footer'>
		        <div class='footer-text row-grad'>
		            <span>2013. Developed by Web UI team.</span>
		        </div>
		    </div>
		    <!-- Footer -->

		</div>
		<!-- Wrapper -->

	</body>
	<!-- Main Global Page Template [Admin] -->
</html>