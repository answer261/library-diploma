<!DOCTYPE html>
<html>
<!-- Main Global Page Template [Admin] -->
<head>

<meta http-equiv="Content-Language" content="uk" />
<meta name="GENERATOR" content="Zend Studio" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $description?>">
<title><?php echo "{$title}"; ?></title>

<?php foreach ($styles as $style): ?>
<link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>public/css/<?php echo $style ?>.css">
<?php endforeach; ?>
<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>public/css/ie-logform.css">
<![endif]-->
<link rel="shortcut icon" href="<?php echo URL::base();?>public/images/favicon.ico">
<script src="<?php echo URL::base();?>public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base();?>public/js/jquery.js" type="text/javascript"></script>
</head>

<body>


 	    <div class="wrapp">
	    <!-- Content -->
	   
	    <div class="form-place" id="form">
		 <a href="/.." class='log-logo'></a>
	    	<?php echo $content ?>
	    </div>
	    <!-- /Content -->
	    </div>


<!-- /Container -->
</body>
<!-- /Main Global Page Template -->
</html>