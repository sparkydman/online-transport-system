<?php 
session_start();
session_unset($_SESSION['loggin']);
session_unset($_SESSION['user_id']);
session_unset($_SESSION['login_admin']);
header('location:index.php');

 ?>