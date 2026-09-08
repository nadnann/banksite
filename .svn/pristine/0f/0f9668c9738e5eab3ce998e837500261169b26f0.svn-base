<?php


# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connection_lcl = "localhost";
$database_connection_lcl = "mellatba_mbank_wsite";
$username_connection_lcl = "mellatba_admin";
$password_connection_lcl ="mwsite2011.";
global $connection_lcl;
$connection_lcl = new mysqli($hostname_connection_lcl, $username_connection_lcl, $password_connection_lcl, $database_connection_lcl); 
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
}


//$mysqli = new mysqli("localhost", "my_user", "my_password", "test");
mysqli_query($connection_lcl,"SET NAMES 'latin5'");  
mysqli_query($connection_lcl,"SET CHARACTER SET latin5");  
mysqli_query($connection_lcl,"SET COLLATION_CONNECTION = 'latin5_turkish_ci'");

mysqli_select_db($connection_lcl,"mellatba_mbank_wsite");

date_default_timezone_set('Europe/Istanbul');

//@mysqli_select_db($database_connection_lcl, $connection_lcl);

/*if ($_SERVER['HTTP_ACUNETIX_PRODUCT'] ||
    $_SERVER['HTTP_ACUNETIX_SCANNING_AGREEMENT'] ||
    $_SERVER['HTTP_ACUNETIX_USER_AGREEMENT']) {
        exit;
}
*/
//ob_start();
session_start();
?>