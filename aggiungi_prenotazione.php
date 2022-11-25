<?php
require("dbconnect.php");
global $dbConnection;

$email = $_POST['email'];
$date = new DateTime($_POST['date']);
$date = $dbConnection->real_escape_string(strip_tags($date->format('Y-m-d')));
$time = $_POST['time'];
$s_email = $_POST['s_email'];
$hq_code = $_POST['hq_code'];

$sql_query = "INSERT INTO
		planned_drive
		(email, s_email, _date, _time, hq_code, absent, done, accepted)
		VALUES
		(\"$email\", \"$s_email\", \"$date\", \"$time\", \"$hq_code\", false, false, true);";

$sql_query_output = $dbConnection->query($sql_query);

if ($sql_query_output != null) {
  header("refresh:0; url = ../admin/admin_panel.php");
} else {
  echo "<html> <head>";
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../style/message.css\" />";
  echo "</head>";
  echo "<h4> Errore aggiunta prenotazione :( </h4>";
  header("refresh:2; url = ../admin/admin_panel.php");
}
