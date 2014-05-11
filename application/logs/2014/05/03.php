<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-05-03 12:40:17 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-0' for key 'user_id' [ INSERT INTO `book_orders` (`order_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 1, 0, '2014-04-15', '2014-04-27') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-03 12:40:17 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-0' for key 'user_id' [ INSERT INTO `book_orders` (`order_id`, `user_id`, `binv_number`, `start_date`, `end_date`) VALUES (0, 1, 0, '2014-04-15', '2014-04-27') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Orders))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 12:41:22 --- ERROR: View_Exception [ 0 ]: The requested view user/orders/new could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-05-03 12:41:22 --- STRACE: View_Exception [ 0 ]: The requested view user/orders/new could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\view.php(137): Kohana_View->set_filename('user/orders/new')
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(30): Kohana_View->__construct('user/orders/new', NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(33): Kohana_View::factory('user/orders/new')
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Orders))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 12:45:38 --- ERROR: View_Exception [ 0 ]: The requested view user/orders/new could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-05-03 12:45:38 --- STRACE: View_Exception [ 0 ]: The requested view user/orders/new could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\view.php(137): Kohana_View->set_filename('user/orders/new')
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(30): Kohana_View->__construct('user/orders/new', NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(33): Kohana_View::factory('user/orders/new')
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Orders))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 12:48:11 --- ERROR: View_Exception [ 0 ]: The requested view user/orders/new could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-05-03 12:48:11 --- STRACE: View_Exception [ 0 ]: The requested view user/orders/new could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\view.php(137): Kohana_View->set_filename('user/orders/new')
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(30): Kohana_View->__construct('user/orders/new', NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(33): Kohana_View::factory('user/orders/new')
#3 [internal function]: Controller_Admin_Commonentity->action_index()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Orders))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 12:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/orders/registered was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-05-03 12:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/orders/registered was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-03 12:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/orders/registered/10 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 12:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/orders/registered/10 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 12:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/orders/registered was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-05-03 12:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/orders/registered was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-03 12:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/orders/registered was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2014-05-03 12:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/orders/registered was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-03 13:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:04:01 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-05-03 13:04:01 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(29): Kohana_ORM->save()
#3 [internal function]: Controller_Admin_Users->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 13:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:04:53 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-05-03 13:04:53 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(29): Kohana_ORM->save()
#3 [internal function]: Controller_Admin_Users->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 13:05:55 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-05-03 13:05:55 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(29): Kohana_ORM->save()
#3 [internal function]: Controller_Admin_Users->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 13:06:59 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2014-05-03 13:06:59 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\users.php(29): Kohana_ORM->save()
#3 [internal function]: Controller_Admin_Users->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 13:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-05-03 13:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-03 13:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-05-03 13:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-03 13:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-05-03 13:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-03 13:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-05-03 13:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-03 13:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:15:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:15:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:15:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: model_baseequs ~ APPPATH\classes\controller\orders.php [ 20 ]
2014-05-03 13:16:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: model_baseequs ~ APPPATH\classes\controller\orders.php [ 20 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\orders.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 20, Array)
#1 [internal function]: Controller_Orders->action_new()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orders))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-03 13:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:27:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\user\commonentity.php [ 17 ]
2014-05-03 13:27:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\user\commonentity.php [ 17 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\user\commonentity.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 17, Array)
#1 C:\xamppSecond\htdocs\application\classes\controller\user\orders.php(13): Controller_User_Commonentity->before()
#2 [internal function]: Controller_User_Orders->before()
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_User_Orders))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-03 13:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 13:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 13:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 14:37:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Orders::getCCOrdersRange() ~ APPPATH\classes\controller\admin\ordersman.php [ 23 ]
2014-05-03 14:37:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Orders::getCCOrdersRange() ~ APPPATH\classes\controller\admin\ordersman.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-03 14:40:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Orders::getOrdersRange() ~ APPPATH\classes\controller\admin\ordersman.php [ 23 ]
2014-05-03 14:40:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Orders::getOrdersRange() ~ APPPATH\classes\controller\admin\ordersman.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-03 14:41:50 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$order_date ~ APPPATH\views\admin\orders\index.php [ 25 ]
2014-05-03 14:41:50 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$order_date ~ APPPATH\views\admin\orders\index.php [ 25 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\orders\index.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xamppSecond\...', 25, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xamppSecond\htdocs\application\views\admin\main.php(77): Kohana_View->__toString()
#5 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#6 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#7 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Ordersman))
#10 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-03 15:02:03 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'publisher_id' [ INSERT INTO `books` (`book_id`, `category_id`, `book_title`, `authors`, `isbn_code`, `pages`, `publisher_id`, `pub_date`, `language_code`, `udk_codes`, `bbk_codes`, `author_code`) VALUES (0, 4, 'книга 2', 'автор', 321321321, 321, 2, '2014-04-16', 'UA', 2321, 2321321, 321) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-03 15:02:03 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'publisher_id' [ INSERT INTO `books` (`book_id`, `category_id`, `book_title`, `authors`, `isbn_code`, `pages`, `publisher_id`, `pub_date`, `language_code`, `udk_codes`, `bbk_codes`, `author_code`) VALUES (0, 4, 'книга 2', 'автор', 321321321, 321, 2, '2014-04-16', 'UA', 2321, 2321321, 321) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 15:03:55 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'publisher_id' [ INSERT INTO `books` (`book_id`, `category_id`, `book_title`, `authors`, `isbn_code`, `pages`, `publisher_id`, `pub_date`, `language_code`, `udk_codes`, `bbk_codes`, `author_code`) VALUES (0, 4, 'книга 2', 'автор', 321321321, 321, 2, '2014-04-16', 'UA', 2321, 2321321, 321) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-03 15:03:55 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'publisher_id' [ INSERT INTO `books` (`book_id`, `category_id`, `book_title`, `authors`, `isbn_code`, `pages`, `publisher_id`, `pub_date`, `language_code`, `udk_codes`, `bbk_codes`, `author_code`) VALUES (0, 4, 'книга 2', 'автор', 321321321, 321, 2, '2014-04-16', 'UA', 2321, 2321321, 321) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 15:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:04:26 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'publisher_id' [ INSERT INTO `books` (`book_id`, `category_id`, `book_title`, `authors`, `isbn_code`, `pages`, `publisher_id`, `pub_date`, `language_code`, `udk_codes`, `bbk_codes`, `author_code`) VALUES (0, 2, 'gregre', 'gre', 543534, 432, 2, '2014-04-16', 'ua', 423423, 423423, 433) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-03 15:04:26 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'publisher_id' [ INSERT INTO `books` (`book_id`, `category_id`, `book_title`, `authors`, `isbn_code`, `pages`, `publisher_id`, `pub_date`, `language_code`, `udk_codes`, `bbk_codes`, `author_code`) VALUES (0, 2, 'gregre', 'gre', 543534, 432, 2, '2014-04-16', 'ua', 423423, 423423, 433) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 15:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 15:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 15:57:11 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '' for key 'category_name' [ INSERT INTO `categories` (`category_id`, `category_name`) VALUES (0, '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-03 15:57:11 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '' for key 'category_name' [ INSERT INTO `categories` (`category_id`, `category_name`) VALUES (0, '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 C:\xamppSecond\htdocs\application\classes\model\common.php(66): Kohana_Database_Query->execute()
#2 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(81): Model_Common->registerRecord(Array)
#3 [internal function]: Controller_Admin_Commonentity->action_register()
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 16:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:04:40 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 7, 4423) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-03 16:04:40 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 7, 4423) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2014-05-03 16:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:46:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: model_publishers ~ APPPATH\classes\controller\admin\invnumbers.php [ 48 ]
2014-05-03 16:46:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: model_publishers ~ APPPATH\classes\controller\admin\invnumbers.php [ 48 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\invnumbers.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 48, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\core.php(496): require('C:\xamppSecond\...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-03 16:46:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_Booksman' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-05-03 16:46:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_Booksman' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-03 16:46:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_Booksman' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2014-05-03 16:46:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_Booksman' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-03 16:47:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: model_books ~ APPPATH\classes\controller\admin\invnumbers.php [ 42 ]
2014-05-03 16:47:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: model_books ~ APPPATH\classes\controller\admin\invnumbers.php [ 42 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\invnumbers.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 42, Array)
#1 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(68): Controller_Admin_Invnumbers->addEditHandler('admin/invnumber...')
#2 [internal function]: Controller_Admin_Commonentity->action_add()
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Invnumbers))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-03 16:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:56:19 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 3213, 6) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-05-03 16:56:19 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `books_inv_numbers` (`binv_number`, `book_id`) VALUES (0, 3213, 6) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2014-05-03 16:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 16:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 16:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 17:07:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Invnumbers::getRecordUpdt() ~ APPPATH\classes\controller\admin\invnumbers.php [ 39 ]
2014-05-03 17:07:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Invnumbers::getRecordUpdt() ~ APPPATH\classes\controller\admin\invnumbers.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-03 17:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 17:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 19:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 19:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 19:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 19:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 19:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 19:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 19:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 19:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 19:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 19:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 19:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 19:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 19:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 19:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-03 19:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-03 19:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}