<?php 
/*
 * Sensitive informations!!!
 * First step!
 */
$server='localhost';
$usernameDB = "hoang";
$passwordDB = "hoang";
$database_name='vtcc_virus';

mysql_connect($server, $usernameDB, $passwordDB);
@mysql_select_db($database_name) or die ("Unable to select this database");



?>