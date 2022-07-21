<?php
session_start();
$_SESSION['user']="Khushi Vyas";
echo $_SESSION['user'];

/*
unset($_SESSION['user']);
echo $_SESSION['user'];
*/
?>