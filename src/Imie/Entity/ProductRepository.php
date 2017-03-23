<?php

namespace Imie\Entity;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository{

public function getProductsOrderByName(){

  return $this->createQueryBuilder('p')->orderBy('p.name','ASC')->getQuery()->getResult();
}


}

 ?>
