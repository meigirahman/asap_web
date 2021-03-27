<?php

require_once 'globalConfiguration.php';
$gConfig = new globalConfiguration();
$server = $gConfig->getServerName();
$username = $gConfig->getUser();
$password = $gConfig->getPassword();
$databaseName = $gConfig->getDatabaseName();

$konek = mysqli_connect($server, $username, $password,$databaseName) or die ("Error on Connect to Server ".mysqli_error());

?>