<?php
$servername = "cublifestyle.com.ng";
$username = "cryptoc_truistadmin";
$password = "~p;75#YuA(W1";
$dbname = "cryptoc_truist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
}
