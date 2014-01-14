<?php

define('DSN', 'mysql:host=localhost;dbname=boda');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', '5TNKr847');

define('SITE_URL', 'http://boda-border.com/');
define('PASSWORD_KEY', '5TNKr847');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/');
