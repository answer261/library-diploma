<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf8" />
        <meta name="author" content="12345" />
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="../../public/css/framework.css">
        <link rel="stylesheet" href="../../public/css/main.css">
        <link rel="stylesheet" href="../../public/css/error_404.css">
        <script type="text/javascript" src="../../public/js/404.js"></script>
    </head>
 
    <body>

        <!-- Wrapper -->
    	<div id='wrapper'>

            <!-- Header -->
            <div id='header' class='header'>
    	        <div class="row">
    	            <div class='cloud'>
    	                <div class="wrap-logo width-50">
    	                    <a class='logo' href='<?php echo URL::site('../')?>'></a>
    	                </div>
    	                <div class='contacts width-50'>
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

                <!-- Navigation -->
    	        <div class='wrapp-menu'>
    	            <div class="row row-grad">                     
    	                    <ul class="nav">
    	                        <li id="about"><a href='<?php echo URL::site('')?>' target="_self"><i class="icon_home"></i>Головна</a></li>
    	                        <li id="info"><a href='<?php echo URL::site('info')?>' target="_self"><i class="icon_info"></i>Інформація</a></li>
    	                        <li id="contact"><a href='<?php echo URL::site('contact')?>' target="_self"><i class="icon_contacts"></i>Контакти</a></li>
    	                        <li id="orders"><a href='<?php echo URL::site('orders/new')?>' target="_self"><i class="icon_basket"></i>Замовлення</a></li>
    	                    </ul>
    	                    <ul class='add-menu'>
    	                       <li>
                                    <a title="Admin section" target="_self" href="/admin"><i class="icon_signin"></i></a>
                                </li>
    	                    </ul>                       
    	            </div>
    	        </div>
                <!-- /Navigation -->

    	    </div>
            <!-- /Header -->

            <!-- Content -->
            <div id="content" class='content'>
                <div id='sun' name='movedDown'></div>
                <div id='moon' name='movedUp'></div>
                <div id='headerSky'>
                    <div id='cloud1' name='movedRight'></div>
                    <div id='cloud2' name='movedLeft'></div>
                </div>
                <div id='road'>
                    <div id='car1' name='movedLeft'>
                        <div id='car1wheel1' name='rotate'></div>
                        <div id='car1wheel2' name='rotate'></div>
                    </div>
                    <div id='car2' name='movedRight'>
                        <div id='car2wheel1' name='rotate'></div>
                        <div id='car2wheel2' name='rotate'></div>
                    </div>
                    <div id='sign'>
                        <p class='er404'><?php echo $content ?></p>
                        <p class='wrongWay'><?php echo $content2 ?></p>
                    </div>
                </div>
                <div id='ground'></div>
                <div id='ground2'>
                    <div id='cactus'></div>
                </div>
            </div>
            <!-- /Content -->

            <!-- MobileMessage -->
            <div id='msg' class="addhref">
                <div class="sign_container">
                    <p class='msg_text1'><?php echo $content ?></p>
                    <p class='msg_text2'><?php echo $content2 ?></p>
                </div>
            </div>
            <!-- /MobileMessage -->

            <!-- Footer -->
            <div id='footer' class='footer'>      
    	        <div class='footer-text row-grad'>
    	            <span>2013. Developed by Web UI team.</span>
    	        </div>
       		</div>
            <!-- Footer -->

        </div> 
        <!-- wrapper -->
         
    </body>

</html>