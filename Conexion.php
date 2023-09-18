<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "task";

$mysqli = new mysqli($dbhost, $dbusername, $dbpassword, $database);

if ($mysqli->connect_error) {
    $mysqli->close();
    die("Connection failed: " . $mysqli->connect_error);
    exit();
}
