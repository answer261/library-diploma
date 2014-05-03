<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-04-01 10:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 10:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 10:28:15 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-01 10:28:26 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-01 10:29:33 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-01 10:29:33 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#2 C:\xamppSecond\htdocs\application\classes\model\common.php(22): Kohana_Database_Query->execute()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(27): Model_Common->countRecords()
#4 [internal function]: Controller_Admin_Commonentity->action_index()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-01 10:46:57 --- ERROR: Database_Exception [ 1146 ]: Table 'library.brands' doesn't exist [ SELECT COUNT(*) AS count FROM brands ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-01 10:46:57 --- STRACE: Database_Exception [ 1146 ]: Table 'library.brands' doesn't exist [ SELECT COUNT(*) AS count FROM brands ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(22): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(27): Model_Common->countRecords()
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-01 10:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 10:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 12:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 12:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 12:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 12:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 12:35:18 --- ERROR: Database_Exception [ 1146 ]: Table 'library.brands' doesn't exist [ SELECT COUNT(*) AS count FROM brands ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-01 12:35:18 --- STRACE: Database_Exception [ 1146 ]: Table 'library.brands' doesn't exist [ SELECT COUNT(*) AS count FROM brands ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(22): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(27): Model_Common->countRecords()
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-01 13:02:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\controller\admin\booksman.php [ 14 ]
2014-04-01 13:02:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\controller\admin\booksman.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-01 13:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:03:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\admin\booksman.php [ 15 ]
2014-04-01 13:03:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\admin\booksman.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-01 13:03:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\admin\books\index.php [ 37 ]
2014-04-01 13:03:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\admin\books\index.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-01 13:06:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\admin\books\index.php [ 36 ]
2014-04-01 13:06:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\admin\books\index.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-01 13:07:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: carcasstype ~ APPPATH\views\admin\books\index.php [ 36 ]
2014-04-01 13:07:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: carcasstype ~ APPPATH\views\admin\books\index.php [ 36 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\books\index.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 36, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-01 13:29:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Brands' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-01 13:29:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Brands' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-01 13:29:21 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$brand_id ~ APPPATH\views\admin\books\editform.php [ 6 ]
2014-04-01 13:29:21 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$brand_id ~ APPPATH\views\admin\books\editform.php [ 6 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\books\editform.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 6, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-01 13:47:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\books\editform.php [ 36 ]
2014-04-01 13:47:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\books\editform.php [ 36 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\books\editform.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 36, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-01 13:47:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\books\editform.php [ 36 ]
2014-04-01 13:47:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\books\editform.php [ 36 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\books\editform.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 36, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-01 13:47:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\books\editform.php [ 36 ]
2014-04-01 13:47:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\books\editform.php [ 36 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\books\editform.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 36, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-01 13:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/brands/update was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-01 13:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/brands/update was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-01 13:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/brands/update was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-01 13:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/brands/update was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-01 13:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/brands was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-01 13:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/brands was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-01 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-01 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-01 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}