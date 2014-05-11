<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <!-- Main Global Page Template -->
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title><?php echo "{$title}"; ?></title>
    	<link rel="shortcut icon" href="<?php echo URL::base();?>../../public/images/favicon.ico">
    	<link rel="stylesheet" type="text/css" href="../../public/css/preload.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src='<?php echo URL::base();?>../public/js/script.js'type="text/javascript"></script>
        <script src='<?php echo URL::base();?>../public/js/slider.js'type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo URL::base();?>../../public/js/row_editor.js"></script>
    	<script src='<?php echo URL::base();?>../../public/js/classEditor.js'type="text/javascript"></script>
    	<script type="text/javascript" src="<?php echo URL::base();?>../../public/js/validation.js"></script>
       	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
        <script type="text/javascript" src="<?php echo URL::base();?>../../public/js/ajax.js"></script>
        <script type="text/javascript" src="<?php echo URL::base();?>../../public/js/history.js"></script>
        <!--[if lte IE 7]>
            <script>var ieCapt = true;</script>
        <![endif]-->
    </head>

    <body>
        <!--Preloader-->
        <div id="pagepreloader">
            <noscript>
                <div id="nojavascript">
                    <span class='attention'></span>
                    <span class='attention_text'>Attention you have disabled JavaScript</span>
                </div>
            </noscript>
        </div>
        <!-- Wrapper -->
        <div class='wrapper'>

        <!-- Header -->
        <div class='header'>
        <div class="row">
            <div class='cloud'>
                <div class="wrap-logo width-50">
                    <a class='logo' href='<?php echo URL::site('../')?>'></a>
                </div>
                <div class='contacts width-50'>
                    <div class="phonenumber">
                        <span class='code'>(066)</span>
                        <span class='number'>471-45-17</span>
                    </div>
                    <div class='contact'>
                        <span >Зв'яжіться з нами</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class='wrapp-menu'>
            <div class="row row-grad">                     
                    <ul class="nav">
                        <li><a target="_self"><i class="icon_home"></i>Головна</a></li>
                        <li id="info"><a target="_self"><i class="icon_info"></i>Інформація</a></li>
                        <li id="contact"><a target="_self"><i class="icon_contacts"></i>Контакти</a></li>
                        <li><a href="user/orders/new"><i class="icon_basket"></i>Замовити книжку</a></li>
                    </ul>
                    <ul class='add-menu'>
    			<li><a href='<?php echo URL::site('admin')?>' target="_self" title="Admin section"><i class="icon_signin"></i></a></li>
                    </ul>                       
            </div>
        </div>

         <!-- /Navigation -->

        </div> 
        <!-- /Header -->   
    	    
    	    <!-- Content -->
    	    <div id='content' class="content">
    	    	<?php echo $content ?>
    	    </div>
    	    <!-- /Content -->
    	    
    	    <div style="clear: left;"></div> 
        
        <!-- Footer -->
        <div class='footer'>
            <div class='footer-text row-grad'>
                <span>2014. Yurii Lytvynenko</span>
            </div>
        </div> 
        <!-- /Footer -->

        </div>
        <!-- wrapper -->

    </body>
    <!-- /Main Global Page Template -->
</html>