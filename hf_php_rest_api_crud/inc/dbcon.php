<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hf_php_rest_api_crud";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}


?>