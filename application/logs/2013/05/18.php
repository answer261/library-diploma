<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-05-18 10:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/models was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-05-18 10:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/models was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-18 10:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-05-18 10:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-18 10:24:38 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 10:24:38 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/in...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/in...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(28): Kohana_View::factory('admin/models/in...')
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 10:29:13 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 10:29:13 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ad...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ad...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ad...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(67): Controller_Admin_Commonentity->addEditHandler('admin/models/ad...')
#4 [internal function]: Controller_Admin_Commonentity->action_add()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 10:29:29 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 10:29:29 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ad...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ad...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ad...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(67): Controller_Admin_Commonentity->addEditHandler('admin/models/ad...')
#4 [internal function]: Controller_Admin_Commonentity->action_add()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 10:51:40 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$brand_model ~ APPPATH\views\admin\models\index.php [ 14 ]
2013-05-18 10:51:40 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$brand_model ~ APPPATH\views\admin\models\index.php [ 14 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\models\index.php(14): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(59): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Modelsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-18 10:53:22 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 10:53:22 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ad...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ad...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ad...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(67): Controller_Admin_Commonentity->addEditHandler('admin/models/ad...')
#4 [internal function]: Controller_Admin_Commonentity->action_add()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 10:56:40 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 10:56:40 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ed...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ed...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ed...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(58): Controller_Admin_Commonentity->addEditHandler('admin/models/ed...', '10')
#4 [internal function]: Controller_Admin_Commonentity->action_edit()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 10:56:46 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 10:56:46 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ed...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ed...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ed...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(58): Controller_Admin_Commonentity->addEditHandler('admin/models/ed...', '8')
#4 [internal function]: Controller_Admin_Commonentity->action_edit()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 10:57:55 --- ERROR: View_Exception [ 0 ]: The requested view admin/brands/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 10:57:55 --- STRACE: View_Exception [ 0 ]: The requested view admin/brands/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/brands/ad...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/brands/ad...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/brands/ad...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(67): Controller_Admin_Commonentity->addEditHandler('admin/brands/ad...')
#4 [internal function]: Controller_Admin_Commonentity->action_add()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 10:57:59 --- ERROR: View_Exception [ 0 ]: The requested view admin/brands/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 10:57:59 --- STRACE: View_Exception [ 0 ]: The requested view admin/brands/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/brands/ad...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/brands/ad...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/brands/ad...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(67): Controller_Admin_Commonentity->addEditHandler('admin/brands/ad...')
#4 [internal function]: Controller_Admin_Commonentity->action_add()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 11:37:57 --- ERROR: View_Exception [ 0 ]: The requested view admin/brands/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 11:37:57 --- STRACE: View_Exception [ 0 ]: The requested view admin/brands/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/brands/ed...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/brands/ed...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/brands/ed...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(58): Controller_Admin_Commonentity->addEditHandler('admin/brands/ed...', '18')
#4 [internal function]: Controller_Admin_Commonentity->action_edit()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 11:45:43 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'Ford' for key 2 [ UPDATE `brands` SET `brand_name` = 'Ford' WHERE `brand_id` = 18 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 11:45:43 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'Ford' for key 2 [ UPDATE `brands` SET `brand_name` = 'Ford' WHERE `brand_id` = 18 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `brands`...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\common.php(74): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\brandsman.php(25): Model_Common->updateRecord(Array)
#3 [internal function]: Controller_Admin_Brandsman->action_update()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 11:46:06 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'Ford' for key 2 [ INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES (0, 'Ford') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 11:46:06 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'Ford' for key 2 [ INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES (0, 'Ford') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `br...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\common.php(60): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Brandsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 11:50:56 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 11:50:56 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/addform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ad...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ad...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ad...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(67): Controller_Admin_Commonentity->addEditHandler('admin/models/ad...')
#4 [internal function]: Controller_Admin_Commonentity->action_add()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 11:59:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\addform.php [ 6 ]
2013-05-18 11:59:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\addform.php [ 6 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\models\addform.php(6): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(58): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Modelsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-18 12:01:27 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 37 ]
2013-05-18 12:01:27 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 37 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(37): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Modelsman->action_add(Object(Controller_Admin_Modelsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-18 12:01:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 12:01:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\models.php(19): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(21): Model_Models->countRecordsByBrand(NULL)
#3 [internal function]: Controller_Admin_Modelsman->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 12:03:28 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 38 ]
2013-05-18 12:03:28 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 38 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(38): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Modelsman->action_add(Object(Controller_Admin_Modelsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-18 12:03:57 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 37 ]
2013-05-18 12:03:57 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 37 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(37): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Modelsman->action_add(Object(Controller_Admin_Modelsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-18 12:05:36 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 38 ]
2013-05-18 12:05:36 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 38 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(38): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Modelsman->action_add(Object(Controller_Admin_Modelsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-18 12:05:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\addform.php [ 6 ]
2013-05-18 12:05:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\addform.php [ 6 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\models\addform.php(6): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(58): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Modelsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-18 13:12:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\controller\admin\modelsman.php [ 43 ]
2013-05-18 13:12:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\controller\admin\modelsman.php [ 43 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Modelsman->action_add(Object(Controller_Admin_Modelsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-18 13:13:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\addform.php [ 6 ]
2013-05-18 13:13:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\addform.php [ 6 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\models\addform.php(6): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(58): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Modelsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-18 13:14:09 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 42 ]
2013-05-18 13:14:09 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\modelsman.php [ 42 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Modelsman->action_add(Object(Controller_Admin_Modelsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-18 13:21:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\classes\controller\admin\modelsman.php [ 31 ]
2013-05-18 13:21:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\classes\controller\admin\modelsman.php [ 31 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(31): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Modelsman->action_index(Object(Controller_Admin_Modelsman))
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-18 13:21:39 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`gul_db/models`, CONSTRAINT `models_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `models` (`model_id`, `model_name`, `brand_id`) VALUES (0, 'Camry', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 13:21:39 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`gul_db/models`, CONSTRAINT `models_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `models` (`model_id`, `model_name`, `brand_id`) VALUES (0, 'Camry', 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mo...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\common.php(60): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(53): Controller_Admin_Commonentity->action_register()
#4 [internal function]: Controller_Admin_Modelsman->action_register()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 13:25:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 13:25:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\models.php(19): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(27): Model_Models->countRecordsByBrand(NULL)
#3 [internal function]: Controller_Admin_Modelsman->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 13:26:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 13:26:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\models.php(19): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(27): Model_Models->countRecordsByBrand(NULL)
#3 [internal function]: Controller_Admin_Modelsman->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 13:28:02 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 13:28:02 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ed...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ed...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ed...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(58): Controller_Admin_Commonentity->addEditHandler('admin/models/ed...', '15')
#4 [internal function]: Controller_Admin_Commonentity->action_edit()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 13:28:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 13:28:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\models.php(19): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(28): Model_Models->countRecordsByBrand(NULL)
#3 [internal function]: Controller_Admin_Modelsman->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 13:29:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 13:29:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\models.php(19): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(28): Model_Models->countRecordsByBrand(NULL)
#3 [internal function]: Controller_Admin_Modelsman->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 13:33:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 13:33:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(*) AS count FROM models WHERE brand_id =  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\models.php(19): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\modelsman.php(32): Model_Models->countRecordsByBrand(NULL)
#3 [internal function]: Controller_Admin_Modelsman->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 13:41:54 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 13:41:54 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ed...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ed...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ed...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(58): Controller_Admin_Commonentity->addEditHandler('admin/models/ed...', '15')
#4 [internal function]: Controller_Admin_Commonentity->action_edit()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 13:43:04 --- ERROR: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-05-18 13:43:04 --- STRACE: View_Exception [ 0 ]: The requested view admin/models/editform could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/models/ed...')
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/models/ed...', NULL)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(47): Kohana_View::factory('admin/models/ed...')
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(58): Controller_Admin_Commonentity->addEditHandler('admin/models/ed...', '14')
#4 [internal function]: Controller_Admin_Commonentity->action_edit()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modelsman))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-18 13:51:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\editform.php [ 5 ]
2013-05-18 13:51:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\editform.php [ 5 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\models\editform.php(5): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(58): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Modelsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-18 13:54:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\editform.php [ 5 ]
2013-05-18 13:54:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: brand_id ~ APPPATH\views\admin\models\editform.php [ 5 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\models\editform.php(5): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(58): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Modelsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-18 13:58:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: model_id ~ APPPATH\views\admin\models\editform.php [ 6 ]
2013-05-18 13:58:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: model_id ~ APPPATH\views\admin\models\editform.php [ 6 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\models\editform.php(6): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(58): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Modelsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}
2013-05-18 20:16:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'lenhtg' in 'field list' [ SELECT `car_id`, `model_id`, `number_of_places`, `max_speed`, `engine_volume`, `gear_id`, `carcasstype_id`, `width`, `height`, `lenhtg`, `fueltype_id`, `fuel_consumption`, `weight`, `engine_number`, `carcass_number` FROM `cars` ORDER BY `car_id` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-18 20:16:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'lenhtg' in 'field list' [ SELECT `car_id`, `model_id`, `number_of_places`, `max_speed`, `engine_volume`, `gear_id`, `carcasstype_id`, `width`, `height`, `lenhtg`, `fueltype_id`, `fuel_consumption`, `weight`, `engine_number`, `carcass_number` FROM `cars` ORDER BY `car_id` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `car_id`...', true, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\common.php(35): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\commonentity.php(31): Model_Common->getRecordsRange(10, 0)
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Carsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-18 20:45:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: carcasstypes ~ APPPATH\views\admin\cars\addform.php [ 48 ]
2013-05-18 20:45:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: carcasstypes ~ APPPATH\views\admin\cars\addform.php [ 48 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\application\views\admin\cars\addform.php(48): Kohana_Core::error_handler('D:\usr\local\pr...', Array)
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#2 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\local\projects\ykbsdp\gul\application\views\admin\main.php(59): Kohana_View->__toString('D:\usr\local\pr...', Array)
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(61): include('D:\usr\local\pr...')
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Carsman))
#9 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#13 {main}