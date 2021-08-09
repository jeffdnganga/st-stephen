<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "st_stephen_may";

$connection = mysqli_connect($hostname, $username, $password, $dbname);

if (!$connection){

    echo "Connection not successful!";

}

?>