<?php defined('SYSPATH') or die('No direct script access.'); ?>
le to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:15:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:15:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:15:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:15:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:15:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:15:45 --- ERROR: Database_Exception [ 1146 ]: Table 'library.clients' doesn't exist [ SELECT COUNT(*) AS count FROM clients ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 11:15:45 --- STRACE: Database_Exception [ 1146 ]: Table 'library.clients' doesn't exist [ SELECT COUNT(*) AS count FROM clients ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(22): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(27): Model_Common->countRecords()
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Clientsman))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 11:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_acounts' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 11:52:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_acounts' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 11:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 11:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 11:52:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: brandsModel ~ APPPATH\views\admin\acounts\index.php [ 18 ]
2014-04-02 11:52:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: brandsModel ~ APPPATH\views\admin\acounts\index.php [ 18 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 18, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 11:53:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\addform.php [ 5 ]
2014-04-02 11:53:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\addform.php [ 5 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\addform.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 5, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 12:00:35 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\acounts\index.php [ 23 ]
2014-04-02 12:00:35 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\acounts\index.php [ 23 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\index.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 23, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 12:02:14 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\acounts\index.php [ 23 ]
2014-04-02 12:02:14 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\acounts\index.php [ 23 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\index.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 23, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 12:02:19 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\acounts\index.php [ 23 ]
2014-04-02 12:02:19 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\acounts\index.php [ 23 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\index.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 23, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 12:03:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\editform.php [ 19 ]
2014-04-02 12:03:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\editform.php [ 19 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\editform.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 19, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 12:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 12:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 12:05:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\addform.php [ 5 ]
2014-04-02 12:05:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\addform.php [ 5 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\addform.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 5, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 12:13:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\addform.php [ 5 ]
2014-04-02 12:13:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\addform.php [ 5 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\addform.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 5, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 12:13:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\addform.php [ 5 ]
2014-04-02 12:13:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: car_id ~ APPPATH\views\admin\acounts\addform.php [ 5 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\acounts\addform.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 5, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 12:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 12:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 12:15:01 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`library`.`account_records`, CONSTRAINT `account_records_ibfk_1` FOREIGN KEY (`binv_number`) REFERENCES `books_inv_numbers` (`binv_number`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `account_records` (`accrec_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 1, 3, '2012-03-02', '2012-03-07') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 12:15:01 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`library`.`account_records`, CONSTRAINT `account_records_ibfk_1` FOREIGN KEY (`binv_number`) REFERENCES `books_inv_numbers` (`binv_number`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `account_records` (`accrec_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 1, 3, '2012-03-02', '2012-03-07') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ac...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 12:15:09 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`library`.`account_records`, CONSTRAINT `account_records_ibfk_1` FOREIGN KEY (`binv_number`) REFERENCES `books_inv_numbers` (`binv_number`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `account_records` (`accrec_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 1, 1, '2012-03-02', '2012-03-07') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 12:15:09 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`library`.`account_records`, CONSTRAINT `account_records_ibfk_1` FOREIGN KEY (`binv_number`) REFERENCES `books_inv_numbers` (`binv_number`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `account_records` (`accrec_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 1, 1, '2012-03-02', '2012-03-07') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ac...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Acounts))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 12:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 12:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 17:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 17:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-02 17:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-02 17:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-02 17:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-02 17:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-02 17:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-02 17:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-02 17:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-02 17:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-02 17:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/invnumbers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-02 17:51:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:51:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 17:52:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-02 17:52:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_Invnumbers' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-02 18:00:58 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$0 ~ APPPATH\views\admin\invnumbers\editform.php [ 8 ]
2014-04-02 18:00:58 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$0 ~ APPPATH\views\admin\invnumbers\editform.php [ 8 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\invnumbers\editform.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 8, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-02 18:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:02:28 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 1, 21) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 18:02:28 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 1, 21) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 18:02:40 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 1, 21) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 18:02:40 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 1, 21) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 18:02:49 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 2, 21) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 18:02:49 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 2, 21) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:03:28 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 2, 321) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 18:03:28 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 2, 321) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 18:04:37 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 321321321, 3) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 18:04:37 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 321321321, 3) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 18:07:25 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 321321321, 3) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 18:07:25 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 321321321, 3) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 18:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-02 18:07:42 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 3432432, 3) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-02 18:07:42 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 3432432, 3) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-02 18:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-02 18:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}