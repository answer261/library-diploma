<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-04-15 12:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:47:13 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-15 12:47:13 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-04-15 12:47:36 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-15 12:47:36 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-04-15 12:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:47:53 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-15 12:47:53 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-04-15 12:48:24 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-15 12:48:24 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-04-15 12:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:48:43 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-15 12:48:43 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
#8 C:\xamppSecond\htdocs\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('login', 'admin', false)
#9 C:\xamppSecond\htdocs\application\classes\controller\login.php(20): Kohana_Auth->login('login', 'admin')
#10 [internal function]: Controller_Login->action_login()
#11 C:\xamppSecond\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#15 {main}
2014-04-15 12:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:49:40 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-15 12:49:40 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
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
2014-04-15 12:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-15 12:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xamppSecond\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xamppSecond\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-15 12:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-15 12:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-15 12:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xamppSecond\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}