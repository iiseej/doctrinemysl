<?php
require "bootstrap.php";


$repo=$entityManager->getRepository('Imie\Entity\Product');
$ps=$repo->getProductsOrderByName();

if (count($ps)) {
foreach ($ps as $p) {
  echo $p->getId()."-".$p->getName()."<br />";
}
}
else {
  echo "aucun résultat";
}




 ?>
