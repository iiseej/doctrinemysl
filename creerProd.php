<?php
require "bootstrap.php";

$newProductName = $_POST['newProd'];

var_dump($_GET);

$product= new Imie\Entity\Product();
$product->setName("$newProductName");
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product ID".$product->getId()."\n";

 ?>
