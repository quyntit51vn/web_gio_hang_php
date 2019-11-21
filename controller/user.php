<?php

session_start();
include_once('../model/user.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $userName = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $user = User::authentication($userName, $password);
  if ($user != null) {
    $_SESSION['user'] = serialize($user);
    header('Location: http://localhost/tiki/views/pages/home.php');
  } else {
    header('Location: http://localhost/tiki/views/pages/login.php');
  }
}
?>