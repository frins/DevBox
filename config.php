<?php
include('site_config.php');
/*
 * Database Config
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWD', 'francesc03bruguera12moriscot1996');
define('DB_TABLE', 'devbox');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWD)
    or die('Could not connect: ' . mysql_error());
mysql_select_db(DB_TABLE) or die('Could not select database');
define('INC_PATH', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR);
