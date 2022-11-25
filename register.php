<!DOCTYPE html>
<html>
<?php
require("dbconnect.php");
global $dbConnection;

$username = $dbConnection->real_escape_string($_POST['username']);
$name = $dbConnection->real_escape_string($_POST['name']);
$surname = $dbConnection->real_escape_string($_POST['surname']);
$email = $dbConnection->real_escape_string($_POST['email']);
$tel = $dbConnection->real_escape_string($_POST['tel']);
$password = $dbConnection->real_escape_string($_POST['password']);

// Hashing con salt
$hashed_password = crypt($password, "SuperSeriuslySecretSaltSelectedSendingServersSoftware");

$sql_query = "INSERT INTO customer
        (username, name, surname, email, tel, password)
        VALUES ('$username', '$name', '$surname', '$email', '$tel', '$hashed_password')";

echo "<html> <head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../style/message.css\" />";
echo "</head>";
if ($username != "" && $name != "" && $surname != "" && $password != "") {
  $sql_query_output = $dbConnection->query($sql_query);
  if ($sql_query_output != null)
  // Account successfully created
  {
    echo "<h4> Account creato con successo! </h4>";
    header("refresh:2; url = ../admin/admin_panel.php");
  } else
  // Account NOT created
  {
    echo "<h4> Impossibile creare l'account :( </h4>";
    header("refresh:2; url = ../admin/admin_panel.php");
  }
} else {
  echo "<h4> Riempire tutti i campi </h4>";
  header("refresh:2; url = ../admin/admin_panel.php");
}

?>
</html>