<?php
session_start();

if (!empty($_SESSION['products']))
    echo json_encode($_SESSION['products']);
else
    echo false;