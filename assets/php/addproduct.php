<?php
session_start();

$key = isset($_POST['key']) ? $_POST['key'] : '';
$name = isset($_POST['name']) ? ($_POST['name']) : '';
$quantity = isset($_POST['quantity']) ? ($_POST['quantity']) : '';
$price = isset($_POST['price']) ? ($_POST['price']) : '';

if (!empty($name) && !empty($quantity) && !empty($price)) {

    $_SESSION['products'][$key]['name'] = $name;
    $_SESSION['products'][$key]['quantity'] = $quantity;
    $_SESSION['products'][$key]['price'] = $price;

    echo json_encode($_SESSION);
}



