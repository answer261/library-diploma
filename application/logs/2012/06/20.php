<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-20 09:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-20 09:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-20 09:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL building was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-20 09:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL building was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\local\projects\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\local\projects\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\local\projects\kohana\index.php(109): Kohana_Request->execute()
#3 {main}