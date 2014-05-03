<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-05 12:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-05 12:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-05 12:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/register was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-05 12:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/register was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-05 12:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-05 12:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-05 12:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-05 12:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-05 12:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-05 12:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-05 12:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/register was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-05 12:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/register was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-05 12:39:05 --- ERROR: Database_Exception [ 1292 ]: Incorrect date value: '%2012-%07-%05' for column 'pub_date' at row 1 [ INSERT INTO `news` (`title`, `authors`, `pub_date`, `pub_time`, `info`, `id`) VALUES ('Testing admin subsystem [News Manager]', 'Yurkovskiy', '%2012-%07-%05', '00:00:00', 'Pizdets!!!', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-05 12:39:05 --- STRACE: Database_Exception [ 1292 ]: Incorrect date value: '%2012-%07-%05' for column 'pub_date' at row 1 [ INSERT INTO `news` (`title`, `authors`, `pub_date`, `pub_time`, `info`, `id`) VALUES ('Testing admin subsystem [News Manager]', 'Yurkovskiy', '%2012-%07-%05', '00:00:00', 'Pizdets!!!', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ne...', false, Array)
#1 D:\usr\local\projects\kohana\application\classes\model\news.php(36): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\kohana\application\classes\controller\admin\newsman.php(47): Model_News->registerNews(Array)
#3 [internal function]: Controller_Admin_Newsman->action_register()
#4 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Newsman))
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-05 13:57:54 --- ERROR: ErrorException [ 4 ]: parse error, expecting `'('' ~ APPPATH\classes\controller\admin\newsman.php [ 74 ]
2012-07-05 13:57:54 --- STRACE: ErrorException [ 4 ]: parse error, expecting `'('' ~ APPPATH\classes\controller\admin\newsman.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2012-07-05 14:01:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\news\editform.php [ 17 ]
2012-07-05 14:01:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\news\editform.php [ 17 ]
--
#0 D:\usr\local\projects\kohana\application\views\news\editform.php(17): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\kohana\application\views\admin\main.php(57): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Newsman))
#9 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-05 14:03:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\news\editform.php [ 17 ]
2012-07-05 14:03:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\news\editform.php [ 17 ]
--
#0 D:\usr\local\projects\kohana\application\views\news\editform.php(17): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\kohana\application\views\admin\main.php(57): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Newsman))
#9 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-05 14:03:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\news\editform.php [ 17 ]
2012-07-05 14:03:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\news\editform.php [ 17 ]
--
#0 D:\usr\local\projects\kohana\application\views\news\editform.php(17): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\kohana\application\views\admin\main.php(57): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Newsman))
#9 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-05 14:04:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\news\editform.php [ 17 ]
2012-07-05 14:04:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\news\editform.php [ 17 ]
--
#0 D:\usr\local\projects\kohana\application\views\news\editform.php(17): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\kohana\application\views\admin\main.php(57): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Newsman))
#9 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-05 14:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-05 14:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}