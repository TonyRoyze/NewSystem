<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "newsdb";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
