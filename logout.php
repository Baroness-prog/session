<?php

$_SESSION = array();

session_destroy();

unset($_SESSION);
header('Location: login.php');
?>

