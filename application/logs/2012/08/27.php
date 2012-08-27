<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-08-27 16:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:28:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/bootstrap.php [ 130 ]
2012-08-27 16:28:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/bootstrap.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-27 16:28:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/bootstrap.php [ 130 ]
2012-08-27 16:28:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/bootstrap.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-27 16:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-27 16:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-27 16:28:31 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2012-08-27 16:28:31 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/html/iShop/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/iShop/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/html/iShop/application/classes/controller/template.php(16): Kohana_Session::instance()
#3 [internal function]: Controller_Template->before()
#4 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#8 /usr/share/pear/PHPUnit/Util/Fileloader.php(95): include_once('/var/www/html/i...')
#9 /usr/share/pear/PHPUnit/Util/Fileloader.php(79): PHPUnit_Util_Fileloader::load('/var/www/html/i...')
#10 /usr/share/pear/PHPUnit/TextUI/Command.php(867): PHPUnit_Util_Fileloader::checkAndLoad('/var/www/html/i...')
#11 /usr/share/pear/PHPUnit/TextUI/Command.php(620): PHPUnit_TextUI_Command->handleBootstrap('/var/www/html/i...')
#12 /usr/share/pear/PHPUnit/TextUI/Command.php(139): PHPUnit_TextUI_Command->handleArguments(Array)
#13 /usr/share/pear/PHPUnit/TextUI/Command.php(130): PHPUnit_TextUI_Command->run(Array, true)
#14 /usr/bin/phpunit(46): PHPUnit_TextUI_Command::main()
#15 {main}
2012-08-27 16:28:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2012-08-27 16:28:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/html/iShop/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/iShop/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/html/iShop/application/classes/controller/template.php(16): Kohana_Session::instance()
#3 [internal function]: Controller_Template->before()
#4 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#8 /usr/share/pear/PHPUnit/Util/Fileloader.php(95): include_once('/var/www/html/i...')
#9 /usr/share/pear/PHPUnit/Util/Fileloader.php(79): PHPUnit_Util_Fileloader::load('/var/www/html/i...')
#10 /usr/share/pear/PHPUnit/TextUI/Command.php(867): PHPUnit_Util_Fileloader::checkAndLoad('/var/www/html/i...')
#11 /usr/share/pear/PHPUnit/TextUI/Command.php(620): PHPUnit_TextUI_Command->handleBootstrap('/var/www/html/i...')
#12 /usr/share/pear/PHPUnit/TextUI/Command.php(139): PHPUnit_TextUI_Command->handleArguments(Array)
#13 /usr/share/pear/PHPUnit/TextUI/Command.php(130): PHPUnit_TextUI_Command->run(Array, true)
#14 /usr/bin/phpunit(46): PHPUnit_TextUI_Command::main()
#15 {main}
2012-08-27 16:29:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/bootstrap.php [ 129 ]
2012-08-27 16:29:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/bootstrap.php [ 129 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-27 16:30:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ DOCROOT/index.php [ 110 ]
2012-08-27 16:30:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ DOCROOT/index.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-27 16:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-27 16:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/iShop/index.php(111): Kohana_Request->execute()
#3 {main}
2012-08-27 16:30:26 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2012-08-27 16:30:26 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/html/iShop/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/iShop/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/html/iShop/application/classes/controller/template.php(16): Kohana_Session::instance()
#3 [internal function]: Controller_Template->before()
#4 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/iShop/index.php(111): Kohana_Request->execute()
#8 /usr/share/pear/PHPUnit/Util/Fileloader.php(95): include_once('/var/www/html/i...')
#9 /usr/share/pear/PHPUnit/Util/Fileloader.php(79): PHPUnit_Util_Fileloader::load('/var/www/html/i...')
#10 /usr/share/pear/PHPUnit/TextUI/Command.php(867): PHPUnit_Util_Fileloader::checkAndLoad('/var/www/html/i...')
#11 /usr/share/pear/PHPUnit/TextUI/Command.php(620): PHPUnit_TextUI_Command->handleBootstrap('/var/www/html/i...')
#12 /usr/share/pear/PHPUnit/TextUI/Command.php(139): PHPUnit_TextUI_Command->handleArguments(Array)
#13 /usr/share/pear/PHPUnit/TextUI/Command.php(130): PHPUnit_TextUI_Command->run(Array, true)
#14 /usr/bin/phpunit(46): PHPUnit_TextUI_Command::main()
#15 {main}
2012-08-27 16:35:41 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2012-08-27 16:35:41 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/html/iShop/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/iShop/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/html/iShop/application/classes/controller/home.php(14): Kohana_Session::instance()
#3 [internal function]: Controller_Home->action_index()
#4 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/iShop/index.php(111): Kohana_Request->execute()
#8 /usr/share/pear/PHPUnit/Util/Fileloader.php(95): include_once('/var/www/html/i...')
#9 /usr/share/pear/PHPUnit/Util/Fileloader.php(79): PHPUnit_Util_Fileloader::load('/var/www/html/i...')
#10 /usr/share/pear/PHPUnit/TextUI/Command.php(867): PHPUnit_Util_Fileloader::checkAndLoad('/var/www/html/i...')
#11 /usr/share/pear/PHPUnit/TextUI/Command.php(620): PHPUnit_TextUI_Command->handleBootstrap('/var/www/html/i...')
#12 /usr/share/pear/PHPUnit/TextUI/Command.php(139): PHPUnit_TextUI_Command->handleArguments(Array)
#13 /usr/share/pear/PHPUnit/TextUI/Command.php(130): PHPUnit_TextUI_Command->run(Array, true)
#14 /usr/bin/phpunit(46): PHPUnit_TextUI_Command::main()
#15 {main}
2012-08-27 16:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 16:52:08 --- ERROR: Exception [ 0 ]: Incorrect input data! ~ APPPATH/classes/controller/login.php [ 28 ]
2012-08-27 16:52:08 --- STRACE: Exception [ 0 ]: Incorrect input data! ~ APPPATH/classes/controller/login.php [ 28 ]
--
#0 [internal function]: Controller_Login->action_submit()
#1 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#2 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#5 {main}
2012-08-27 16:54:16 --- ERROR: Exception [ 0 ]: Incorrect input data! ~ APPPATH/classes/controller/login.php [ 28 ]
2012-08-27 16:54:16 --- STRACE: Exception [ 0 ]: Incorrect input data! ~ APPPATH/classes/controller/login.php [ 28 ]
--
#0 [internal function]: Controller_Login->action_submit()
#1 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#2 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#5 {main}
2012-08-27 16:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/item/alert("You are stupid!"); ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-27 16:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/item/alert("You are stupid!"); ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-27 17:13:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/products/info.php [ 32 ]
2012-08-27 17:13:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/products/info.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-27 17:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aco was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-27 17:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aco was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-27 17:40:02 --- ERROR: Exception [ 0 ]: Error with database ~ APPPATH/classes/controller/acp/products.php [ 122 ]
2012-08-27 17:40:02 --- STRACE: Exception [ 0 ]: Error with database ~ APPPATH/classes/controller/acp/products.php [ 122 ]
--
#0 [internal function]: Controller_ACP_Products->action_item()
#1 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ACP_Products))
#2 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#5 {main}