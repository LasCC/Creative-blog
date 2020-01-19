<?php

$host = "localhost";
$username = "root";
$password = "root";
$db_name = "blog";

$conn = new MySQLi($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Db connection error :  " .$conn->connect_error);
} else {
    // echo "bd ok";
}