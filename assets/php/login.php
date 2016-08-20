<?php
session_start();
$userpass = isset($_POST['password']) ? ($_POST['password']) : '';
$userinput = isset($_POST['username']) ? ($_POST['username']) : '';

$authorized = false;

define('username' , 'admin');
define('password' , 'admin');

if ($userpass == password && $userinput == username) {
    $authorized = true;
    $_SESSION = [];

    echo json_encode($authorized);
//    echo file_get_contents("../appwrapper.html");
} else {
    echo json_encode($authorized);
}