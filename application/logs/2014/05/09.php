<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-05-09 17:26:29 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2014-05-09 17:26:29 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xamppSecond\htdocs\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(57): Kohana_Session::instance('native')
#3 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(17): Kohana_Auth::instance()
#5 [internal function]: Controller_Admin_Commonentity->before()
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#10 {main}
2014-05-09 17:26:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
2014-05-09 17:26:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\common.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 10, Array)
#1 [internal function]: Controller_Admin_Common->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 17:26:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
2014-05-09 17:26:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\common.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 10, Array)
#1 [internal function]: Controller_Admin_Common->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 17:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:27:23 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-09 17:27:23 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xamppSecond\htdocs\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#8 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('answer', 'admin', false)
#9 C:\xamppSecond\htdocs\application\classes\controller\login.php(20): Kohana_Auth->login('answer', 'admin')
#10 [internal function]: Controller_Login->action_login()
#11 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#15 {main}
2014-05-09 17:28:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
2014-05-09 17:28:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\common.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 10, Array)
#1 [internal function]: Controller_Admin_Common->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 17:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:28:27 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-09 17:28:27 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xamppSecond\htdocs\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#8 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('answer', 'admin', false)
#9 C:\xamppSecond\htdocs\application\classes\controller\login.php(20): Kohana_Auth->login('answer', 'admin')
#10 [internal function]: Controller_Login->action_login()
#11 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#15 {main}
2014-05-09 17:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:29:14 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-09 17:29:14 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xamppSecond\htdocs\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#8 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('user', 'user', false)
#9 C:\xamppSecond\htdocs\application\classes\controller\login.php(20): Kohana_Auth->login('user', 'user')
#10 [internal function]: Controller_Login->action_login()
#11 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#15 {main}
2014-05-09 17:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:30:52 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-09 17:30:52 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xamppSecond\htdocs\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xamppSecond\htdocs\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xamppSecond\htdocs\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#8 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 C:\xamppSecond\htdocs\application\classes\controller\login.php(20): Kohana_Auth->login('admin', 'admin')
#10 [internal function]: Controller_Login->action_login()
#11 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#15 {main}
2014-05-09 17:32:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
2014-05-09 17:32:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\common.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 10, Array)
#1 [internal function]: Controller_Admin_Common->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 17:33:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
2014-05-09 17:33:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\common.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 10, Array)
#1 [internal function]: Controller_Admin_Common->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 17:36:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\commonentity.php [ 17 ]
2014-05-09 17:36:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\commonentity.php [ 17 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 17, Array)
#1 [internal function]: Controller_Admin_Commonentity->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:39:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
2014-05-09 17:39:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\common.php [ 10 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\common.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 10, Array)
#1 [internal function]: Controller_Admin_Common->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 17:40:11 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_Main contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin_Commonentity::prepareMainData, Controller_Admin_Commonentity::action_update) ~ APPPATH\classes\controller\admin\main.php [ 5 ]
2014-05-09 17:40:11 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_Main contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin_Commonentity::prepareMainData, Controller_Admin_Commonentity::action_update) ~ APPPATH\classes\controller\admin\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 17:41:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_first ~ APPPATH\classes\controller\admin\common.php [ 11 ]
2014-05-09 17:41:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_first ~ APPPATH\classes\controller\admin\common.php [ 11 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\common.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 11, Array)
#1 [internal function]: Controller_Admin_Common->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 17:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:41:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_first ~ APPPATH\views\admin\main.php [ 71 ]
2014-05-09 17:41:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_first ~ APPPATH\views\admin\main.php [ 71 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 71, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 17:42:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_first ~ APPPATH\views\admin\main.php [ 71 ]
2014-05-09 17:42:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_first ~ APPPATH\views\admin\main.php [ 71 ]
--
#0 C:\xamppSecond\htdocs\application\views\admin\main.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xamppSecond\...', 71, Array)
#1 C:\xamppSecond\htdocs\system\classes\kohana\view.php(61): include('C:\xamppSecond\...')
#2 C:\xamppSecond\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xamppSecond\...', Array)
#3 C:\xamppSecond\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 17:44:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\admin\common.php [ 9 ]
2014-05-09 17:44:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\admin\common.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 17:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 17:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-09 17:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}