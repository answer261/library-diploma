<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-05-15 11:26:07 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'gul'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2013-05-15 11:26:07 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'gul'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\model\brands.php(16): Kohana_Database_Query->execute()
#3 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\brands.php(8): Model_Brands->countBrands()
#4 [internal function]: Controller_Brands->action_index()
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Brands))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#9 {main}
2013-05-15 11:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-05-15 11:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-15 11:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-05-15 11:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-15 11:28:54 --- ERROR: Database_Exception [ 1146 ]: Table 'gul_db.news' doesn't exist [ SELECT COUNT(*) AS count FROM news ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-05-15 11:28:54 --- STRACE: Database_Exception [ 1146 ]: Table 'gul_db.news' doesn't exist [ SELECT COUNT(*) AS count FROM news ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\ykbsdp\gul\application\classes\model\news.php(14): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\ykbsdp\gul\application\classes\controller\admin\newsman.php(13): Model_News->countNews()
#3 [internal function]: Controller_Admin_Newsman->action_index()
#4 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Newsman))
#5 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-15 17:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-05-15 17:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\ykbsdp\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\ykbsdp\gul\index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-15 18:08:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Brands::countRecords() ~ APPPATH\classes\controller\frontcontroller.php [ 11 ]
2013-05-15 18:08:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Brands::countRecords() ~ APPPATH\classes\controller\frontcontroller.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-15 18:11:15 --- ERROR: ErrorException [ 1 ]: Call to protected method Model_Common::countRecords() from context 'Controller_Frontcontroller' ~ APPPATH\classes\controller\frontcontroller.php [ 11 ]
2013-05-15 18:11:15 --- STRACE: ErrorException [ 1 ]: Call to protected method Model_Common::countRecords() from context 'Controller_Frontcontroller' ~ APPPATH\classes\controller\frontcontroller.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}