<?php session_start();
//session_unregister('$username1'.'$password1');
session_unregister('user');
header("location:../index.php");
?>