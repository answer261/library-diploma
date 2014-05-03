<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-19 09:01:56 --- ERROR: Database_Exception [ 1146 ]: Table 'gul_db.fueltypes' doesn't exist [ SELECT COUNT(*) AS count FROM fueltypes ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-19 09:01:56 --- STRACE: Database_Exception [ 1146 ]: Table 'gul_db.fueltypes' doesn't exist [ SELECT COUNT(*) AS count FROM fueltypes ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\gul\application\classes\model\fueltypes.php(14): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\gul\application\classes\controller\fueltypes.php(8): Model_Fueltypes->countFuelTypes()
#3 [internal function]: Controller_Fueltypes->action_index()
#4 D:\usr\local\projects\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Fueltypes))
#5 D:\usr\local\projects\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-19 09:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-04-19 09:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\local\projects\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\gul\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-19 09:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-04-19 09:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\local\projects\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\gul\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-19 10:01:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Brands::countBrands() ~ APPPATH\classes\controller\brands.php [ 8 ]
2013-04-19 10:01:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Brands::countBrands() ~ APPPATH\classes\controller\brands.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-19 10:34:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Carcasstypes::countBrands() ~ APPPATH\classes\controller\carcasstypes.php [ 8 ]
2013-04-19 10:34:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Carcasstypes::countBrands() ~ APPPATH\classes\controller\carcasstypes.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-19 10:34:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Carcasstypes::countBrands() ~ APPPATH\classes\controller\carcasstypes.php [ 8 ]
2013-04-19 10:34:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Carcasstypes::countBrands() ~ APPPATH\classes\controller\carcasstypes.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-19 10:34:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '->tableName}' at line 1 [ SELECT COUNT(*) AS count FROM {$this->tableName} ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-19 10:34:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '->tableName}' at line 1 [ SELECT COUNT(*) AS count FROM {$this->tableName} ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\local\projects\gul\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\usr\local\projects\gul\application\classes\model\carcasstypes.php(16): Kohana_Database_Query->execute()
#2 D:\usr\local\projects\gul\application\classes\controller\carcasstypes.php(8): Model_Carcasstypes->countCarcasstypes()
#3 [internal function]: Controller_Carcasstypes->action_index()
#4 D:\usr\local\projects\gul\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Carcasstypes))
#5 D:\usr\local\projects\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\gul\index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-19 10:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-04-19 10:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\local\projects\gul\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\gul\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\gul\index.php(109): Kohana_Request->execute()
#3 {main}