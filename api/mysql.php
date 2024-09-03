<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authemax";

try {
    $connect = new PDO("mysql:host=$servername;dbname=dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $sql = "SELECT * FROM users";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
