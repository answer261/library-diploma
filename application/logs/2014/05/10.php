<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-05-10 13:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/models/index/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 13:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/models/index/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:44:05 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2014-05-10 15:44:05 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xamppSecond\htdocs\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(57): Kohana_Session::instance('native')
#3 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(17): Kohana_Auth::instance()
#5 [internal function]: Controller_Admin_Commonentity->before()
#6 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#7 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#10 {main}
2014-05-10 15:44:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\commonentity.php [ 17 ]
2014-05-10 15:44:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\commonentity.php [ 17 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\admin\commonentity.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xamppSecond\...', 17, Array)
#1 [internal function]: Controller_Admin_Commonentity->before()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Booksman))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 15:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:44:37 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:44:37 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:45:07 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:45:07 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:48:06 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:48:06 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:48:44 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:48:44 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:49:02 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:49:02 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:49:42 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:49:42 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:50:05 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:50:05 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:50:19 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:50:19 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:51:30 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:51:30 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:52:04 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\controller\login.php [ 20 ]
2014-05-10 15:52:04 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\controller\login.php [ 20 ]
--
#0 C:\xamppSecond\htdocs\application\classes\controller\login.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xamppSecond\...', 20, Array)
#1 [internal function]: Controller_Login->action_login()
#2 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 15:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:52:34 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:52:34 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:53:22 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:53:22 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:53:47 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:53:47 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:54:55 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:54:55 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:55:10 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-05-10 15:55:10 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-05-10 15:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 17:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 17:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 17:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/1.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 17:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 17:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/3.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 17:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/4.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 17:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/5.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 17:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/6.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 18:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 18:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 18:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 18:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 18:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 18:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 18:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 18:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 18:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-10 18:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/forms.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}