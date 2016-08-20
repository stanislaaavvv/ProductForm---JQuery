<?php
session_start();
$last = max(array_keys($_SESSION['products']));

if (!empty($_SESSION['products'])) {
    echo $last;
} else {
    echo false;
}