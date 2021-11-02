<?php

define('LOGIN', 'aurelien');
$errorMessage = '';

if (!empty($_POST)) {
    if (!empty($_POST['loginname'])) {
        if ($_POST['loginname'] !== LOGIN) {
            $errorMessage = 'Mauvais login !';
        } else {
            $_SESSION['loginname'] = LOGIN;

            header('Location: index.php');
            exit();
        }
    } else {
        $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
}
?>