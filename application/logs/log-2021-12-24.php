<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-24 19:10:51 --> 404 Page Not Found: Js/bootstrap.bundle.min.js
ERROR - 2021-12-24 19:21:21 --> Severity: Error --> Class 'Admin_Controller' not found C:\xampp\htdocs\goaldig\application\controllers\Messaging.php 3
ERROR - 2021-12-24 19:21:56 --> Severity: error --> Exception: Call to undefined method Messaging::not_logged_in() C:\xampp\htdocs\goaldig\application\controllers\Messaging.php 9
ERROR - 2021-12-24 19:21:56 --> Severity: Error --> Uncaught TypeError: Argument 1 passed to CI_Exceptions::show_exception() must be an instance of Exception, instance of Error given, called in C:\xampp\htdocs\goaldig\system\core\Common.php on line 658 and defined in C:\xampp\htdocs\goaldig\system\core\Exceptions.php:190
Stack trace:
#0 C:\xampp\htdocs\goaldig\system\core\Common.php(658): CI_Exceptions->show_exception(Object(Error))
#1 [internal function]: _exception_handler(Object(Error))
#2 {main}
  thrown C:\xampp\htdocs\goaldig\system\core\Exceptions.php 190
ERROR - 2021-12-24 19:23:38 --> Severity: Error --> Class 'Admin_Controller' not found C:\xampp\htdocs\goaldig\application\controllers\Messaging.php 3
ERROR - 2021-12-24 19:24:00 --> Severity: error --> Exception: Call to undefined method Messaging::not_logged_in() C:\xampp\htdocs\goaldig\application\controllers\Messaging.php 9
ERROR - 2021-12-24 19:24:00 --> Severity: Error --> Uncaught TypeError: Argument 1 passed to CI_Exceptions::show_exception() must be an instance of Exception, instance of Error given, called in C:\xampp\htdocs\goaldig\system\core\Common.php on line 658 and defined in C:\xampp\htdocs\goaldig\system\core\Exceptions.php:190
Stack trace:
#0 C:\xampp\htdocs\goaldig\system\core\Common.php(658): CI_Exceptions->show_exception(Object(Error))
#1 [internal function]: _exception_handler(Object(Error))
#2 {main}
  thrown C:\xampp\htdocs\goaldig\system\core\Exceptions.php 190
ERROR - 2021-12-24 19:47:20 --> Severity: Notice --> Undefined property: Messaging::$session C:\xampp\htdocs\goaldig\application\controllers\Messaging.php 19
ERROR - 2021-12-24 19:47:20 --> Severity: error --> Exception: Call to a member function userdata() on null C:\xampp\htdocs\goaldig\application\controllers\Messaging.php 19
ERROR - 2021-12-24 19:47:20 --> Severity: Error --> Uncaught TypeError: Argument 1 passed to CI_Exceptions::show_exception() must be an instance of Exception, instance of Error given, called in C:\xampp\htdocs\goaldig\system\core\Common.php on line 658 and defined in C:\xampp\htdocs\goaldig\system\core\Exceptions.php:190
Stack trace:
#0 C:\xampp\htdocs\goaldig\system\core\Common.php(658): CI_Exceptions->show_exception(Object(Error))
#1 [internal function]: _exception_handler(Object(Error))
#2 {main}
  thrown C:\xampp\htdocs\goaldig\system\core\Exceptions.php 190
ERROR - 2021-12-24 19:49:03 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\goaldig\application\controllers\Messaging.php 26
ERROR - 2021-12-24 20:40:33 --> Severity: Notice --> Undefined property: Messaging::$db C:\xampp\htdocs\goaldig\system\core\Model.php 77
ERROR - 2021-12-24 20:40:33 --> Severity: error --> Exception: Call to a member function insert() on null C:\xampp\htdocs\goaldig\application\models\Model_messaging.php 39
ERROR - 2021-12-24 20:40:33 --> Severity: Error --> Uncaught TypeError: Argument 1 passed to CI_Exceptions::show_exception() must be an instance of Exception, instance of Error given, called in C:\xampp\htdocs\goaldig\system\core\Common.php on line 658 and defined in C:\xampp\htdocs\goaldig\system\core\Exceptions.php:190
Stack trace:
#0 C:\xampp\htdocs\goaldig\system\core\Common.php(658): CI_Exceptions->show_exception(Object(Error))
#1 [internal function]: _exception_handler(Object(Error))
#2 {main}
  thrown C:\xampp\htdocs\goaldig\system\core\Exceptions.php 190
ERROR - 2021-12-24 20:41:57 --> Query error: Unknown column 'date_added' in 'field list' - Invalid query: INSERT INTO `post` (`content`, `user_id`, `date_added`, `type`) VALUES ('hello', '6', '2021-12-24', 'text')
ERROR - 2021-12-24 21:05:39 --> Query error: Table 'goaldig_platform.messaging' doesn't exist - Invalid query: SELECT *
FROM `messaging`
WHERE `user_id` = '6'
