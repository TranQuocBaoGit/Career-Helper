<?php

$host = "localhost";
$db = "OnlineCV";
$username = "root";
$passwpord = "";

$connection = mysqli_connect($host, $username, $passwpord, $db);

return $connection;