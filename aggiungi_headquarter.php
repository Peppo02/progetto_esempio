<?php
require("dbconnect.php");
global $dbConnection;

$code = $_POST['code'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];

$sql_query = "INSERT INTO
		headquarter
		(code, phone, address, city)
		VALUES
		(\"$code\", \"$phone\", \"$address\", \"$city\");";

$sql_query_output = $dbConnection->query($sql_query);

if ($sql_query_output != null) {
  header("refresh:0; url = ../admin/admin_panel.php");
} else {
  echo "<html> <head>";
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../style/message.css\" />";
  echo "</head>";
  echo "<h4> Errore aggiunta headquarter :( </h4>";
  header("refresh:2; url = ../admin/admin_panel.php");
}
