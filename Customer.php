<?php
session_start();
function login($email, $password)
{
  global $dbConnection;
  $email = $dbConnection->real_escape_string(strip_tags($email));
  $password = $dbConnection->real_escape_string(strip_tags($password));
  // Hashing con salt
  $hashed_password = crypt($password, "SuperSeriuslySecretSaltSelectedSendingServersSoftware");
  $sql_query = "SELECT username, name, surname, password, email, tel, is_admin from customer WHERE email = '$email' LIMIT 1";
  $sql_query_output = $dbConnection->query($sql_query)->fetch_object();
  if ($sql_query_output != null && $hashed_password == $sql_query_output->password) // Account exists AND password matches
  {
    $name = $sql_query_output->name;
    $surname = $sql_query_output->surname;
    $email = $sql_query_output->email;
    $tel = $sql_query_output->tel;
    $isLogged = true;
    $isAdmin = $sql_query_output->is_admin;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
  } else {
    $isAdmin = false;
    $isLogged = false;
  }
  $_SESSION['is_admin'] = $isAdmin;
  $_SESSION['is_logged'] = $isLogged;
  return $isLogged;
}

function logout()
{
  $isLogged = false;
  $isAdmin = false;
  session_destroy();
}
