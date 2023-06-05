<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classicmodels";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query("SET character_set_connection = UTF8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
