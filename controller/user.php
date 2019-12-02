<?php

session_start();
include_once('../model/user.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $userName = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $user = User::authentication($userName, $password);
  $action = $_REQUEST['action'];
  if($action == 'logout'){
    $_SESSION['user'] = null;
    header('Location: http://localhost/tiki/views/pages/home.php');
  }
  if ($user != null) {
    $_SESSION['user'] = serialize($user);
    header('Location: http://localhost/tiki/views/pages/home.php');
  } else {
    header('Location: http://localhost/tiki/views/pages/login.php');
  }
}
?>