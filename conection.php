<?php

require_once 'globalConfiguration.php';
$gConfig = new globalConfiguration();
$server = $gConfig->getServerName();
$username = $gConfig->getUser();
$password = $gConfig->getPassword();
$databaseName = $gConfig->getDatabaseName();

$connection = mysql_connect($server, $username, $password) or die ("Error on Connect to Server ".mysql_error());
mysql_select_db($databaseName, $connection) or die ("Error on Database Name ".mysql_error());

?>