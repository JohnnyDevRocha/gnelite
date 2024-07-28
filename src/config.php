<?php
session_start();

$_SESSION['user'] = 'user';

define("BASE_URL", '/');

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'db_gnelite');
define('DB_USER', 'root');
define('DB_PASS', '');