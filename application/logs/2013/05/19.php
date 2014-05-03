<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-05-19 12:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/cars was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-05-19 12:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/cars was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-19 12:33:27 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$brand_id ~ APPPATH\views\admin\optg\editform.php [ 6 ]
2013-05-19 12:33:27 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$brand_id ~ APPPATH\views\admin\optg\editform.php [ 6 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\optg\editform.php(6): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(60): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Optionsgroupsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-19 12:37:16 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'Обшивка салону' for key 2 [ INSERT INTO `options_groups` (`optg_id`, `optg_name`) VALUES (0, 'Обшивка салону') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-19 12:37:16 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'Обшивка салону' for key 2 [ INSERT INTO `options_groups` (`optg_id`, `optg_name`) VALUES (0, 'Обшивка салону') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `op...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Optionsgroupsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-19 12:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/options/index/1 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-05-19 12:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/options/index/1 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-19 13:22:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin_Optionsman::$oprg_id ~ APPPATH\classes\controller\admin\optionsman.php [ 31 ]
2013-05-19 13:22:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin_Optionsman::$oprg_id ~ APPPATH\classes\controller\admin\optionsman.php [ 31 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\optionsman.php(31): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Optionsman->action_index(Object(Controller_Admin_Optionsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-19 13:23:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\options\addform.php [ 5 ]
2013-05-19 13:23:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\options\addform.php [ 5 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\options\addform.php(5): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(60): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Optionsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-19 13:27:04 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$model_id ~ APPPATH\views\admin\options\editform.php [ 6 ]
2013-05-19 13:27:04 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$model_id ~ APPPATH\views\admin\options\editform.php [ 6 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\options\editform.php(6): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(60): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Optionsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-19 14:14:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin_Baseequsman::$optg_id ~ APPPATH\classes\controller\admin\baseequsman.php [ 26 ]
2013-05-19 14:14:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin_Baseequsman::$optg_id ~ APPPATH\classes\controller\admin\baseequsman.php [ 26 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\baseequsman.php(26): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Baseequsman->action_index(Object(Controller_Admin_Baseequsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-19 15:01:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: optgModel ~ APPPATH\views\admin\baseequs\index.php [ 13 ]
2013-05-19 15:01:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: optgModel ~ APPPATH\views\admin\baseequs\index.php [ 13 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\baseequs\index.php(13): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(60): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Baseequsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-19 15:01:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: optgModel ~ APPPATH\views\admin\baseequs\index.php [ 13 ]
2013-05-19 15:01:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: optgModel ~ APPPATH\views\admin\baseequs\index.php [ 13 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\baseequs\index.php(13): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(60): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Baseequsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}