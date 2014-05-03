<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-27 13:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/login/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-27 13:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/login/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-27 13:21:52 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2012-06-27 13:21:52 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 D:\usr\local\projects\kohana\modules\auth\classes\kohana\auth\file.php(40): Kohana_Auth->hash('admin')
#1 D:\usr\local\projects\kohana\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_File->_login('admin', 'admin', false)
#2 D:\usr\local\projects\kohana\application\classes\controller\admin\login.php(19): Kohana_Auth->login('admin', 'admin')
#3 [internal function]: Controller_Admin_Login->action_login()
#4 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-27 13:26:20 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2012-06-27 13:26:20 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 D:\usr\local\projects\kohana\modules\auth\classes\kohana\auth\file.php(40): Kohana_Auth->hash('admin')
#1 D:\usr\local\projects\kohana\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_File->_login('admin', 'admin', false)
#2 D:\usr\local\projects\kohana\application\classes\controller\admin\login.php(19): Kohana_Auth->login('admin', 'admin')
#3 [internal function]: Controller_Admin_Login->action_login()
#4 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-27 13:32:31 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2012-06-27 13:32:31 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 D:\usr\local\projects\kohana\modules\auth\classes\kohana\auth\file.php(40): Kohana_Auth->hash('admin')
#1 D:\usr\local\projects\kohana\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_File->_login('admin', 'admin', false)
#2 D:\usr\local\projects\kohana\application\classes\controller\admin\login.php(20): Kohana_Auth->login('admin', 'admin')
#3 [internal function]: Controller_Admin_Login->action_login()
#4 D:\usr\local\projects\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#8 {main}