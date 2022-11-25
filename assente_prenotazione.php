<?php
require("dbconnect.php");
global $dbConnection;

$sql_query = "UPDATE planned_drive SET absent = true WHERE id=" . $_GET['id'];;
$sql_query_output = $dbConnection->query($sql_query);

if ($sql_query_output != null) {
  header("refresh:0; url = ../admin/overview.php");
} else {
  echo "<html> <head>";
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../style/message.css\" />";
  echo "</head>";
  echo "<h4> Errore impostazione prenotazione assente :( </h4>";
  header("refresh:2; url = ../admin/overview.php");
}
