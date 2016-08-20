<?php
session_start();

$key = isset($_POST['key']) ? $_POST['key'] : '';

echo json_encode($_SESSION['products'][$key]);