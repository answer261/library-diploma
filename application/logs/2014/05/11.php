<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-05-11 15:16:57 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`new_library`.`book_orders`, CONSTRAINT `book_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `book_orders` (`order_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 0, 0, '2014-05-09', '2014-05-23') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-11 15:16:57 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`new_library`.`book_orders`, CONSTRAINT `book_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `book_orders` (`order_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 0, 0, '2014-05-09', '2014-05-23') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\user\commonentity.php(82): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_User_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Orders))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-11 15:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:17:52 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`new_library`.`book_orders`, CONSTRAINT `book_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `book_orders` (`order_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 0, 0, '2014-05-13', '2014-05-15') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-11 15:17:52 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`new_library`.`book_orders`, CONSTRAINT `book_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `book_orders` (`order_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 0, 0, '2014-05-13', '2014-05-15') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\user\commonentity.php(82): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_User_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Orders))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-11 15:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 15:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-11 15:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}