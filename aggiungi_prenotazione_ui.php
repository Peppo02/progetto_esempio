<?php
require("dbconnect.php");
global $dbConnection;
session_start();
$email = $_SESSION['email'];
$date = new DateTime($_POST['date']);
$date = $dbConnection->real_escape_string(strip_tags($date->format('Y-m-d')));
$time = $_POST['time'];
$s_email = $_POST['s_email'];
$hq_code = $_POST['hq_code'];

$sql_query = "INSERT INTO
		planned_drive
		(email, s_email, _date, _time, hq_code, absent, done, accepted)
		VALUES
		(\"$email\", \"$s_email\", \"$date\", \"$time\", \"$hq_code\", false, false, false);";

$sql_query_output = $dbConnection->query($sql_query);

if ($sql_query_output != null) {
  echo "<html> <head>";
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../s le/message.css\" />";
  echo "</head>";
  header("refresh:0; url = ../user_ui/mobile_user_ui.php");
} else {
  echo "<h4> Errore richiesta prenotazione :( </h4>";
  header("refresh:2; url = ../user_ui/mobile_user_ui.php");
}
