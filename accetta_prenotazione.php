<?php
// UPDATE planned_drive SET accepted=true WHERE id=$_GET['id'];
// DELETE FROM planned_drive WHERE id=$_GET['id'];
require("dbconnect.php");
global $dbConnection;
$sql_query = "UPDATE planned_drive SET accepted=true WHERE id=" . $_GET['id'];
$sql_query_output = $dbConnection->query($sql_query);

echo "<html> <head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../style/message.css\" />";
echo "</head>";
if ($sql_query_output != null) {
  echo "<h4> Prenotazione accettata con successo! </h4>";
  header("refresh:2; url = ../admin/admin_panel.php");
} else {
  echo "<h4> Errore accettazione prenotazione :( </h4>";
  header("refresh:2; url = ../admin/admin_panel.php");
}
