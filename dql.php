<?php
//dql.php

use Imie\Entity\ProductRepository;
require "bootstrap.php";

$q=$entityManager->createQuery("select p from Imie\\Entity\\Product p ");



$ps=$q->getResult();

if (count($ps)) {
  foreach ($ps as $p ) {
    echo $p->getId()."-".$p->getName()."<br />";
  }
}
else {
  echo "Aucun résultat";
}


 ?>
