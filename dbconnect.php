<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lab";

$dbConnection = new mysqli($servername, $username, $password, $database);
if ($dbConnection->connect_errno) {
  echo "Failed to connect to MySQL: " . $dbConnection->connect_error;
}
