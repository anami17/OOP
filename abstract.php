<?php
include_once "buyproduct.class.php";
include_once "paymentType.abstract.php";

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
?>