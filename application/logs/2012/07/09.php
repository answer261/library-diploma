<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-09 07:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-09 07:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 07:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-09 07:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 07:42:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/news/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-09 07:42:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/news/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/news/edit...')
#1 D:\usr\local\projects\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/news/edit...', NULL)
#2 D:\usr\local\projects\kohana\application\classes\controller\admin\newsman.php(34): Kohana_View::factory('admin/news/edit...')
#3 [internal function]: Controller_Admin_Newsman->action_edit()
#4 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Newsman))
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 08:02:29 --- ERROR: Database_Exception [ 1292 ]: Incorrect time value: 'CURTIME()' for column 'pub_time' at row 1 [ INSERT INTO `news` (`title`, `authors`, `pub_date`, `pub_time`, `info`, `id`) VALUES ('Time Testing', 'Yurkovskiy', '2012-07-09', 'CURTIME()', '\n	Fucking test\n', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 08:02:29 --- STRACE: Database_Exception [ 1292 ]: Incorrect time value: 'CURTIME()' for column 'pub_time' at row 1 [ INSERT INTO `news` (`title`, `authors`, `pub_date`, `pub_time`, `info`, `id`) VALUES ('Time Testing', 'Yurkovskiy', '2012-07-09', 'CURTIME()', '\n	Fucking test\n', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ne...', false, Array)
#1 D:\usr\local\projects\kohana\application\classes\model\news.php(54): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\kohana\application\classes\controller\admin\newsman.php(67): Model_News->registerNews(Array)
#3 [internal function]: Controller_Admin_Newsman->action_register()
#4 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Newsman))
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 08:06:50 --- ERROR: Database_Exception [ 1292 ]: Incorrect time value: '1341810410' for column 'pub_time' at row 1 [ INSERT INTO `news` (`title`, `authors`, `pub_date`, `pub_time`, `info`, `id`) VALUES ('Time Testing', 'Yurkovskiy', '2012-07-09', 1341810410, '\n	Article with current time\n', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 08:06:50 --- STRACE: Database_Exception [ 1292 ]: Incorrect time value: '1341810410' for column 'pub_time' at row 1 [ INSERT INTO `news` (`title`, `authors`, `pub_date`, `pub_time`, `info`, `id`) VALUES ('Time Testing', 'Yurkovskiy', '2012-07-09', 1341810410, '\n	Article with current time\n', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ne...', false, Array)
#1 D:\usr\local\projects\kohana\application\classes\model\news.php(54): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\kohana\application\classes\controller\admin\newsman.php(67): Model_News->registerNews(Array)
#3 [internal function]: Controller_Admin_Newsman->action_register()
#4 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Newsman))
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 08:18:44 --- ERROR: ErrorException [ 1 ]: Call to undefined function CURTIME() ~ APPPATH\classes\controller\admin\newsman.php [ 64 ]
2012-07-09 08:18:44 --- STRACE: ErrorException [ 1 ]: Call to undefined function CURTIME() ~ APPPATH\classes\controller\admin\newsman.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 08:19:46 --- ERROR: Database_Exception [ 1292 ]: Incorrect time value: 'CURTIME()' for column 'pub_time' at row 1 [ INSERT INTO `news` (`title`, `authors`, `pub_date`, `pub_time`, `info`, `id`) VALUES ('Time Testing #100500', 'Yurkovskiy', '2012-07-09', 'CURTIME()', '\n	TESTING!!!\n', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 08:19:46 --- STRACE: Database_Exception [ 1292 ]: Incorrect time value: 'CURTIME()' for column 'pub_time' at row 1 [ INSERT INTO `news` (`title`, `authors`, `pub_date`, `pub_time`, `info`, `id`) VALUES ('Time Testing #100500', 'Yurkovskiy', '2012-07-09', 'CURTIME()', '\n	TESTING!!!\n', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ne...', false, Array)
#1 D:\usr\local\projects\kohana\application\classes\model\news.php(54): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\kohana\application\classes\controller\admin\newsman.php(67): Model_News->registerNews(Array)
#3 [internal function]: Controller_Admin_Newsman->action_register()
#4 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Newsman))
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 08:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 08:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 08:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-09 08:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 12:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmw was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 12:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmw was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 12:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmw was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 12:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmw was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 12:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmwz8 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 12:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmwz8 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 12:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmwz8 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 12:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmwz8 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 12:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/kohana.if.ua/public/images/bmwz8 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-09 12:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/kohana.if.ua/public/images/bmwz8 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 12:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/kohana.if.ua/public/images/bmwz8 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-09 12:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/kohana.if.ua/public/images/bmwz8 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 12:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmwz8 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 12:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/bmwz8 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}