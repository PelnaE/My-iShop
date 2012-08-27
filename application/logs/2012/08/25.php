<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-08-25 16:54:34 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'database' at 'MODPATH/database' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2012-08-25 16:54:34 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'database' at 'MODPATH/database' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /var/www/html/iShop/application/bootstrap.php(102): Kohana_Core::modules(Array)
#1 /var/www/html/iShop/index.php(102): require('/var/www/html/i...')
#2 {main}
2012-08-25 16:55:00 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'darkmown' at 'MODPATH/darkmown' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2012-08-25 16:55:00 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'darkmown' at 'MODPATH/darkmown' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /var/www/html/iShop/application/bootstrap.php(102): Kohana_Core::modules(Array)
#1 /var/www/html/iShop/index.php(102): require('/var/www/html/i...')
#2 {main}
2012-08-25 16:55:19 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'unittest' at 'MODPATH/unittest' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2012-08-25 16:55:19 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'unittest' at 'MODPATH/unittest' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /var/www/html/iShop/application/bootstrap.php(102): Kohana_Core::modules(Array)
#1 /var/www/html/iShop/index.php(102): require('/var/www/html/i...')
#2 {main}
2012-08-25 16:55:34 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 16:55:34 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 16:55:41 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 16:55:41 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 17:13:37 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 17:13:37 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 17:14:47 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 17:14:47 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 17:14:48 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 17:14:48 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 17:14:48 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 17:14:48 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 17:15:39 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 17:15:39 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 17:17:28 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 17:17:28 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 17:17:31 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2012-08-25 17:17:31 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-25 17:17:46 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'reGative'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-08-25 17:17:46 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'reGative'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
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