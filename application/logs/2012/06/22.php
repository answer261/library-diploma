<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-22 08:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-22 08:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-22 08:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-22 08:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-22 08:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-22 08:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-22 08:35:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_News' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2012-06-22 08:35:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_News' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('News')
#1 {main}
2012-06-22 08:39:07 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$building_id ~ APPPATH\views\news\index.php [ 13 ]
2012-06-22 08:39:07 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$building_id ~ APPPATH\views\news\index.php [ 13 ]
--
#0 D:\usr\local\projects\kohana\application\views\news\index.php(13): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\kohana\application\views\main.php(56): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#9 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-22 20:26:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Pagination::route_params() ~ APPPATH\classes\controller\news.php [ 12 ]
2012-06-22 20:26:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Pagination::route_params() ~ APPPATH\classes\controller\news.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}