<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-10 08:05:04 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$pub_date ~ APPPATH\views\news\index.php [ 42 ]
2012-07-10 08:05:04 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$pub_date ~ APPPATH\views\news\index.php [ 42 ]
--
#0 D:\usr\local\projects\kohana\application\views\news\index.php(42): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\kohana\application\views\main.php(58): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#9 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-10 08:09:57 --- ERROR: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\news\index.php [ 48 ]
2012-07-10 08:09:57 --- STRACE: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\news\index.php [ 48 ]
--
#0 D:\usr\local\projects\kohana\application\views\news\index.php(48): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\kohana\application\views\main.php(58): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\kohana\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#9 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-10 13:13:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-10 13:13:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 13:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-10 13:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-10 13:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-10 13:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#1 {main}