<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-08-26 09:46:28 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'reGative'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-08-26 09:46:28 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'reGative'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/iShop/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#2 /var/www/html/iShop/application/classes/model/product.php(137): Kohana_Database_Query->execute()
#3 /var/www/html/iShop/application/classes/controller/template.php(15): Model_Product->get_random_product_with_discount()
#4 [internal function]: Controller_Template->before()
#5 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-26 09:47:44 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'piemums' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-08-26 09:47:44 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'piemums' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('piemums')
#1 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /var/www/html/iShop/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#3 /var/www/html/iShop/application/classes/model/product.php(137): Kohana_Database_Query->execute()
#4 /var/www/html/iShop/application/classes/controller/template.php(15): Model_Product->get_random_product_with_discount()
#5 [internal function]: Controller_Template->before()
#6 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#7 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-26 09:50:44 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'piemums' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-08-26 09:50:44 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'piemums' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('piemums')
#1 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /var/www/html/iShop/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#3 /var/www/html/iShop/application/classes/model/product.php(137): Kohana_Database_Query->execute()
#4 /var/www/html/iShop/application/classes/controller/template.php(15): Model_Product->get_random_product_with_discount()
#5 [internal function]: Controller_Template->before()
#6 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#7 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-26 09:56:41 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'piemums' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-08-26 09:56:41 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'piemums' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('piemums')
#1 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /var/www/html/iShop/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#3 /var/www/html/iShop/application/classes/model/product.php(137): Kohana_Database_Query->execute()
#4 /var/www/html/iShop/application/classes/controller/template.php(15): Model_Product->get_random_product_with_discount()
#5 [internal function]: Controller_Template->before()
#6 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#7 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-26 10:01:34 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'piemums' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-08-26 10:01:34 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'piemums' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('piemums')
#1 /var/www/html/iShop/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /var/www/html/iShop/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#3 /var/www/html/iShop/application/classes/model/product.php(137): Kohana_Database_Query->execute()
#4 /var/www/html/iShop/application/classes/controller/template.php(15): Model_Product->get_random_product_with_discount()
#5 [internal function]: Controller_Template->before()
#6 /var/www/html/iShop/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#7 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-26 10:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-26 10:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 13:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ap was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 13:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ap was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/iShop/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/iShop/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 15:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-26 15:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-26 15:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-26 15:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-26 19:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/pic/bg_h2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-26 19:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/bullet.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-08-26 19:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/backtotop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/iShop/index.php(109): Kohana_Request->execute()
#1 {main}