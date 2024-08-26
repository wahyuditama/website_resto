<?php

$hostname = "localhost";
$username = "root";  
$password = "";  
$dbname = "resto";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connect error");
}

