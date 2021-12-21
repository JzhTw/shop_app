<?php 

require_once './Cart.php';

$cart->removeItem($_GET['id']);

header('Location: http://localhost/shop_app/index.php');