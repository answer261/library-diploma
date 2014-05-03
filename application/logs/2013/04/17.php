<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-17 11:10:40 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kzone'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2013-04-17 11:10:40 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kzone'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\local\projects\kzone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\local\projects\kzone\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#2 D:\usr\local\projects\kzone\application\classes\model\news.php(14): Kohana_Database_Query->execute()
#3 D:\usr\local\projects\kzone\application\classes\controller\news.php(8): Model_News->countNews()
#4 [internal function]: Controller_News->action_index()
#5 D:\usr\local\projects\kzone\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#6 D:\usr\local\projects\kzone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\kzone\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\kzone\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-17 12:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-04-17 12:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\local\projects\kzone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kzone\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kzone\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-17 12:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-17 12:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\kzone\index.php(109): Kohana_Request->execute()
#1 {main}