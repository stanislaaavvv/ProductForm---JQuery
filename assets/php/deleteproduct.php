<?php
session_start();

$key = isset($_POST['key']) ? $_POST['key'] : '';

unset($_SESSION['products'][$key]);

echo true;