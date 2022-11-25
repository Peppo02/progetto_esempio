<?php
require("Customer.php");
require("dbconnect.php");

echo "<html> <head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../style/message.css\" />";
echo "</head>";
if (login($_POST['email'], $_POST['password'])) {
  echo "<h4> Login effettuato con successo </h4> ";
  if ($_SESSION['is_admin']) {
    header("refresh:2; url = ../admin/overview.php");
  } else {
    header("refresh:2; url = ../user_ui/mobile_user_ui.php");
  }
} else {
  echo "<h4> email o password errati </h4>";
  header("refresh:2; url = ../index.html");
}
