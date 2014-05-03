<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-04-19 11:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 11:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 11:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 11:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 11:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 11:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 11:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 11:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 11:28:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Brands' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-19 11:28:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Brands' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-19 11:36:07 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\booksman.php [ 38 ]
2014-04-19 11:36:07 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\booksman.php [ 38 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\booksman.php(38): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xamppSecond\...', 38, Array)
#1 [internal function]: Controller_Admin_Booksman->action_index()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-04-19 11:37:17 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\booksman.php [ 38 ]
2014-04-19 11:37:17 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\booksman.php [ 38 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\booksman.php(38): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xamppSecond\...', 38, Array)
#1 [internal function]: Controller_Admin_Booksman->action_index()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-04-19 11:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 11:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 11:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 11:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 11:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 11:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 11:50:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_categories' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-19 11:50:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_categories' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-19 11:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 11:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 11:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 11:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 11:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 11:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 11:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 11:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 11:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 11:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 11:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 11:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 11:51:39 --- ERROR: Database_Exception [ 1146 ]: Table 'new_library.base_equipment' doesn't exist [ SELECT `baseequ_id`, `car_id`, `baseequ_name`, `baseequ_price` FROM `base_equipment` ORDER BY `baseequ_id` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-19 11:51:39 --- STRACE: Database_Exception [ 1146 ]: Table 'new_library.base_equipment' doesn't exist [ SELECT `baseequ_id`, `car_id`, `baseequ_name`, `baseequ_price` FROM `base_equipment` ORDER BY `baseequ_id` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `baseequ...', true, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(42): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\orders.php(14): Model_Common->getRecords()
#3 [internal function]: Controller_Orders->action_new()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 11:52:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_categories' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-04-19 11:52:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_categories' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-19 11:54:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/categories/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-04-19 11:54:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/categories/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/categorie...')
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/categorie...', NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(29): Kohana_View::factory('admin/categorie...')
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 11:57:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'categories_id' in 'field list' [ SELECT `categories_id`, `categories_name` FROM `categories` ORDER BY `categories_id` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-19 11:57:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'categories_id' in 'field list' [ SELECT `categories_id`, `categories_name` FROM `categories` ORDER BY `categories_id` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', true, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(35): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(32): Model_Common->getRecordsRange(10, 0)
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 11:58:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'categories_id' in 'field list' [ SELECT `categories_id`, `categories_name` FROM `categories` ORDER BY `categories_id` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-19 11:58:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'categories_id' in 'field list' [ SELECT `categories_id`, `categories_name` FROM `categories` ORDER BY `categories_id` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', true, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(35): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(32): Model_Common->getRecordsRange(10, 0)
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 11:58:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: acounts ~ APPPATH\views\admin\categories\index.php [ 23 ]
2014-04-19 11:58:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: acounts ~ APPPATH\views\admin\categories\index.php [ 23 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\categories\index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 23, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(70): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-19 12:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 12:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 12:01:59 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `categories` (`category_id`, `category_name`) VALUES (0, 0, '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-19 12:01:59 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `categories` (`category_id`, `category_name`) VALUES (0, 0, '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(77): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 12:02:31 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `categories` (`category_id`, `category_name`) VALUES (0, 0, '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-19 12:02:31 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `categories` (`category_id`, `category_name`) VALUES (0, 0, '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(77): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 12:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 12:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 12:02:42 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `categories` (`category_id`, `category_name`) VALUES (0, 0, '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-19 12:02:42 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `categories` (`category_id`, `category_name`) VALUES (0, 0, '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(77): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 12:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 12:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 12:04:27 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\categories\editform.php [ 9 ]
2014-04-19 12:04:27 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\categories\editform.php [ 9 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\categories\editform.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 9, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(70): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-19 12:19:05 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\categories\editform.php [ 9 ]
2014-04-19 12:19:05 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$accrec_id ~ APPPATH\views\admin\categories\editform.php [ 9 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\categories\editform.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 9, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(70): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-19 12:23:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: acount ~ APPPATH\views\admin\categories\editform.php [ 9 ]
2014-04-19 12:23:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: acount ~ APPPATH\views\admin\categories\editform.php [ 9 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\categories\editform.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 9, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(70): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-19 12:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 12:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 12:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/category/update/4 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 12:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/category/update/4 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 12:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 12:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 12:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 12:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 12:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 12:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 12:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 12:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 13:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:06:36 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:06:36 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(76): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Commonentity->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:07:16 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:07:16 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(76): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Commonentity->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:07:24 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:07:24 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(76): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Commonentity->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:15:53 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:15:53 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(76): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Commonentity->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:18:01 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:18:01 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(76): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Commonentity->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:18:28 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:18:28 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(76): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Commonentity->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:19:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:19:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(76): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Commonentity->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:19:12 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:19:12 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(76): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Commonentity->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:24:21 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES (0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-19 13:24:21 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES (0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(77): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 13:27:10 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:27:10 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(23): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(35): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Users->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:34:10 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$category_id ~ APPPATH\views\admin\users\editform.php [ 7 ]
2014-04-19 13:34:10 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$category_id ~ APPPATH\views\admin\users\editform.php [ 7 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\users\editform.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 7, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-19 13:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/admin/users ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/admin/users ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/admin/users ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/admin/users ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 13:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 13:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 13:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 13:38:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 13:38:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 13:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 13:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 13:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 13:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 13:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-19 13:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/categories was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-19 13:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:40:28 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:40:28 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(24): Kohana_ORM->save()
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(36): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Users->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 13:47:06 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '6-2' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('6', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-19 13:47:06 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '6-2' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('6', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(35): Controller_Admin_Users->prepareMainData()
#4 [internal function]: Controller_Admin_Users->action_register()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-19 13:52:10 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-04-19 13:52:10 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(27): Kohana_ORM->save()
#3 [internal function]: Controller_Admin_Users->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-04-19 13:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 13:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:02:05 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$category_id ~ APPPATH\views\admin\users\editform.php [ 7 ]
2014-04-19 14:02:05 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$category_id ~ APPPATH\views\admin\users\editform.php [ 7 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\users\editform.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 7, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-19 14:07:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\admin\users\editform.php [ 18 ]
2014-04-19 14:07:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\admin\users\editform.php [ 18 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\users\editform.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 18, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-04-19 14:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:15:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:15:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:17:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:17:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:37:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: model_brands ~ APPPATH\classes\controller\admin\booksman.php [ 54 ]
2014-04-19 14:37:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: model_brands ~ APPPATH\classes\controller\admin\booksman.php [ 54 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\booksman.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 54, Array)
#1 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(57): Controller_Admin_Booksman->addEditHandler('admin/books/edi...', '3')
#2 [internal function]: Controller_Admin_Commonentity->action_edit()
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2014-04-19 14:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 14:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 14:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 15:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 15:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 15:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 15:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 15:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 15:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 15:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 15:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 15:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 15:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-19 15:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-19 15:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}