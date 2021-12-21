<?php

require_once './Cart.php';

$cart->saveCart();
$cart->clearCart();

header('Location: http://localhost/shop_app/index.php');