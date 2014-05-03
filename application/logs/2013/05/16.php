<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-05-16 09:50:38 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_Main contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin_Common::prepareMainData, Controller_Admin_Common::action_update) ~ APPPATH\classes\controller\admin\main.php [ 5 ]
2013-05-16 09:50:38 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_Main contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin_Common::prepareMainData, Controller_Admin_Common::action_update) ~ APPPATH\classes\controller\admin\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2013-05-16 09:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-05-16 09:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-16 09:53:11 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Admin_Common' not found ~ APPPATH\classes\controller\admin\main.php [ 5 ]
2013-05-16 09:53:11 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Admin_Common' not found ~ APPPATH\classes\controller\admin\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2013-05-16 09:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-05-16 09:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-16 09:56:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Clients' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2013-05-16 09:56:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Clients' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Clients')
#1 {main}
2013-05-16 09:56:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: register ~ APPPATH\views\admin\clients\index.php [ 42 ]
2013-05-16 09:56:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: register ~ APPPATH\views\admin\clients\index.php [ 42 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\clients\index.php(42): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(61): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Clientsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-16 18:23:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Common::action_index() ~ APPPATH\classes\controller\brands.php [ 11 ]
2013-05-16 18:23:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Common::action_index() ~ APPPATH\classes\controller\brands.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-16 18:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/countries was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-05-16 18:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/countries was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-16 18:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/brands was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-05-16 18:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/brands was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-16 18:27:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH\views\admin\brands\index.php [ 25 ]
2013-05-16 18:27:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH\views\admin\brands\index.php [ 25 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\brands\index.php(25): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(56): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Brandsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-16 18:27:53 --- ERROR: View_Exception [ 0 ]: The requested view admin/brands/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-16 18:27:53 --- STRACE: View_Exception [ 0 ]: The requested view admin/brands/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/brands/ed...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/brands/ed...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/brands/ed...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(58): Controller_Admin_Commonentity->addEditHandler('admin/brands/ed...', '2')
#4 [internal function]: Controller_Admin_Commonentity->action_edit()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-16 18:58:13 --- ERROR: View_Exception [ 0 ]: The requested view admin/brands/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-16 18:58:13 --- STRACE: View_Exception [ 0 ]: The requested view admin/brands/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/brands/ed...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/brands/ed...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/brands/ed...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(58): Controller_Admin_Commonentity->addEditHandler('admin/brands/ed...', '8')
#4 [internal function]: Controller_Admin_Commonentity->action_edit()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}