<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-15 00:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 00:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 02:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 02:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 02:59:45 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-08-15 02:59:45 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /virt/homes/dragoinc/htdocs/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 /virt/homes/dragoinc/htdocs/application/classes/model/common.php(66): Kohana_Database_Query->execute()
#2 /virt/homes/dragoinc/htdocs/application/classes/controller/orders.php(48): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Orders->action_register()
#4 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-15 02:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 02:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 02:59:56 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-08-15 02:59:56 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /virt/homes/dragoinc/htdocs/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 /virt/homes/dragoinc/htdocs/application/classes/model/common.php(66): Kohana_Database_Query->execute()
#2 /virt/homes/dragoinc/htdocs/application/classes/controller/orders.php(48): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Orders->action_register()
#4 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-15 03:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 03:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 03:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 03:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 03:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 03:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 03:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant1/images/flash.swf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 03:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant1/images/flash.swf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 03:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant6/images/postheadericon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 03:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant6/images/postheadericon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 03:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 03:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 03:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 03:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 05:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css-dev/TrainingTaskScreenshot.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 05:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css-dev/TrainingTaskScreenshot.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 05:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL diplom/variant4/images was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 05:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL diplom/variant4/images was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 06:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/footer_t.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 06:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/footer_t.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 06:32:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 06:32:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 06:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/postquote.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 06:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/postquote.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 06:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant1/images/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 06:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant1/images/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 07:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new2/gallery/03.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 07:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new2/gallery/03.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 07:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css-dev/issues/solved - 2-Issue1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 07:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css-dev/issues/solved - 2-Issue1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 07:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL diplom/logo_files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 07:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL diplom/logo_files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 08:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: timedrive/images\preview.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 08:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: timedrive/images\preview.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 08:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/logo_files/shapka_1268996923_1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 08:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/logo_files/shapka_1268996923_1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 08:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/contact.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 08:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/contact.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 09:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant5/images/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 09:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant5/images/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:50:54 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-08-15 10:50:54 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /virt/homes/dragoinc/htdocs/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 /virt/homes/dragoinc/htdocs/application/classes/model/common.php(66): Kohana_Database_Query->execute()
#2 /virt/homes/dragoinc/htdocs/application/classes/controller/orders.php(48): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Orders->action_register()
#4 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-15 10:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 10:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 10:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/optg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/optg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/cars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/cars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/fueltypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/fueltypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/clients was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/clients was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/cars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/cars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/cars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/cars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/clients was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/clients was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/clients was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/clients was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/fueltypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/fueltypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/carcasstypes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/cars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/cars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/optg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/optg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/adm.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/adm.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/public/images/adm.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/public/images/adm.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/bg.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/bg.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/PIE.htc ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:38:50 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-08-15 11:38:50 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /virt/homes/dragoinc/htdocs/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 /virt/homes/dragoinc/htdocs/application/classes/model/common.php(66): Kohana_Database_Query->execute()
#2 /virt/homes/dragoinc/htdocs/application/classes/controller/orders.php(48): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Orders->action_register()
#4 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-15 11:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 11:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL diplom/logo_files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 11:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL diplom/logo_files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 11:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 11:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:35:17 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-08-15 12:35:17 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /virt/homes/dragoinc/htdocs/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 /virt/homes/dragoinc/htdocs/application/classes/model/common.php(66): Kohana_Database_Query->execute()
#2 /virt/homes/dragoinc/htdocs/application/classes/controller/orders.php(48): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Orders->action_register()
#4 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-15 12:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 12:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 12:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:07:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 13:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 13:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 14:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 14:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 14:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 14:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 15:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 15:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 15:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 15:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 15:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 15:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 15:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 15:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/pencil.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/pencil.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/search.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/search.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/brands/admin/clients ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/brands/admin/clients ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:26:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:26:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 16:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/exit.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 16:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/exit.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:02:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:02:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/clients/edit/admin/fueltypes ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/clients/edit/admin/fueltypes ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:10:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:10:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 17:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 17:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/clients/edit/admin/carcasstypes ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/clients/edit/admin/carcasstypes ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/clients/edit/admin/cars ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/clients/edit/admin/cars ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/cars/edit/admin/clients ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/cars/edit/admin/clients ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:29:47 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-08-15 18:29:47 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /virt/homes/dragoinc/htdocs/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 /virt/homes/dragoinc/htdocs/application/classes/model/common.php(66): Kohana_Database_Query->execute()
#2 /virt/homes/dragoinc/htdocs/application/classes/controller/orders.php(48): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Orders->action_register()
#4 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-15 18:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fdsfds was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 18:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fdsfds was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 18:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 18:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 18:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orders/dad was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2013-08-15 18:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orders/dad was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 18:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/places was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 18:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/places was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 18:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/places/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 18:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/places/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 18:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/places/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 18:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/places/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 18:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 18:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 18:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/main.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/main.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:34:57 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-08-15 19:34:57 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`dragoinc`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`order_id`, `baseequ_id`, `addequ_id`, `preorder`, `order_date`, `client_id`) VALUES (0, 0, 0, 1, CURDATE(), '7') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /virt/homes/dragoinc/htdocs/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 /virt/homes/dragoinc/htdocs/application/classes/model/common.php(66): Kohana_Database_Query->execute()
#2 /virt/homes/dragoinc/htdocs/application/classes/controller/orders.php(48): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Orders->action_register()
#4 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-15 19:34:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:34:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/main.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/main.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/404/main.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/msin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/msin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/images/sun.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 19:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 19:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 19:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 19:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:10:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:10:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/MAIN.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404/MAIN.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 20:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 20:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 20:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 20:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-15 20:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-15 20:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/image/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/image/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/image/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/image/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/image/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/image/sprites.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:21:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:21:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:21:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:21:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/brands/edit/admin/clients ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/brands/edit/admin/clients ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/brands/public/images/pencil.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/brands/public/images/pencil.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/brands/public/images/search.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/brands/public/images/search.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:23:21 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'test@test.te' for key 'client_email' [ UPDATE `clients` SET `client_surname` = 'Якубовський', `client_name` = 'Володимир', `client_fname` = 'Петрович', `client_address` = 'с. Пациків, вул. Центральна, 23', `client_phone` = '0679999999', `client_email` = 'test@test.te' WHERE `client_id` = 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-08-15 20:23:21 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'test@test.te' for key 'client_email' [ UPDATE `clients` SET `client_surname` = 'Якубовський', `client_name` = 'Володимир', `client_fname` = 'Петрович', `client_address` = 'с. Пациків, вул. Центральна, 23', `client_phone` = '0679999999', `client_email` = 'test@test.te' WHERE `client_id` = 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /virt/homes/dragoinc/htdocs/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `clients...', false, Array)
#1 /virt/homes/dragoinc/htdocs/application/classes/model/common.php(80): Kohana_Database_Query->execute()
#2 /virt/homes/dragoinc/htdocs/application/classes/controller/admin/clientsman.php(30): Model_Common->updateRecord(Array)
#3 [internal function]: Controller_Admin_Clientsman->action_update()
#4 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Clientsman))
#5 /virt/homes/dragoinc/htdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /virt/homes/dragoinc/htdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-15 20:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/blockcontentbullets.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/blockcontentbullets.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant2/images/postheadericon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant2/images/postheadericon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 20:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/footer_s.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 20:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/footer_s.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 21:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant2/images/contact.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 21:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant2/images/contact.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 21:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/footer_t.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 21:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/footer_t.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 21:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 21:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 21:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/post_h.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 21:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/post_h.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 22:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/footer_b.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 22:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/footer_b.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 22:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 22:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 22:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css-dev/issues/solved - 2-Issue1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 22:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css-dev/issues/solved - 2-Issue1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 22:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/header.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 22:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/header.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-15 23:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-15 23:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diplom/variant4/images/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /virt/homes/dragoinc/htdocs/index.php(109): Kohana_Request->execute()
#1 {main}