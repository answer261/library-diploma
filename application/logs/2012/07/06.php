<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-06 07:49:05 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-06 07:49:05 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#2 D:\usr\local\projects\kohana\application\classes\model\news.php(14): Kohana_Database_Query->execute()
#3 D:\usr\local\projects\kohana\application\classes\controller\news.php(8): Model_News->countNews()
#4 [internal function]: Controller_News->action_index()
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 07:49:31 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-06 07:49:31 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#2 D:\usr\local\projects\kohana\application\classes\model\news.php(14): Kohana_Database_Query->execute()
#3 D:\usr\local\projects\kohana\application\classes\controller\admin\newsman.php(13): Model_News->countNews()
#4 [internal function]: Controller_Admin_Newsman->action_index()
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Newsman))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 09:00:38 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-06 09:00:38 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\local\projects\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#2 D:\usr\local\projects\kohana\application\classes\model\news.php(14): Kohana_Database_Query->execute()
#3 D:\usr\local\projects\kohana\application\classes\controller\admin\newsman.php(13): Model_News->countNews()
#4 [internal function]: Controller_Admin_Newsman->action_index()
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Newsman))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#9 {main}