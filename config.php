<?php

define('DSN', 'mysql:host=localhost;dbname=boda');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

define('SITE_URL', 'http://boda-border.com/');
define('PASSWORD_KEY', '5TNKr847');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/');
