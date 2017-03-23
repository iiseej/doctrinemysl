<?php

require "bootstrap.php";


$productRepository = $entityManager->getRepository('Imie\Entity\Product');
$products=$productRepository->findAll();

$find=$productRepository->findBy(array('name'=>"Nom"));

// foreach ($find as $f)  {
//   echo $f->getId()."-".$f->getName()."<br />";
// }


//
//
//
// if ((isset($_POST['id'])) && (isset($_POST['Name'])))  {
//   $id=$_POST['id'];
//   $product=$productRepository->find($id);
//   $name=$_POST['Name'];
//   $name=utf8_decode($name);
//   $product->setName($name);
//   $entityManager->flush();
//
// }

foreach ($products as $p) {
  $name=$p->getName();
  $name=utf8_encode($name);
  echo $p->getId()."-".$name."<br />";

}





 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <main>
      <!-- <form class="" action="formulaire.php" method="post">
        <label for="id">modif Id</label><input type="text" name="id" value="">
        <label for="Name">nouveau nom</label><input type="text" name="Name" value="">
        <button type="submit" name="button">soumettre</button> -->

        <form class="" action="creerProd.php" method="post">

          <label for="Name">nouveau produit</label><input type="text" name="newProd" value="">
          <button type="submit" name="button">soumettre</button>

        <span></span>
      </form>
    </main>
  </body>
</html>
