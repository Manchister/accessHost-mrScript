<?php

if (isset($_POST['install'])) {

    $thehost = $_POST['thehost'];
    $theusername = $_POST['theusername'];
    $thedatabase = $_POST['thedatabase'];
    $thepassword = $_POST['thepassword'];

    define('DB_HOST', $thehost);
    define('DB_PORT', '3306');
    define('DB_NAME', $thedatabase);
    define('DB_USERNAME', $theusername);
    define('DB_PASSWORD', $thepassword);
}