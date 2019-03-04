<?php 

require 'autoloader.php';

// on créé une instance de produit
$product1 = new Product();
$product1->setName ('Hamac');

$product2 = $product1;


$product1-> setName ('Parasol');
echo $product2-> getName();
// par référence= parasol

$product1 = new Product();
$product1->setName ('Hamac');
$product2 = clone $product1;
$product1->setName ('Parasol');
echo $product2-> getName();
// par copie= hamac

// on créé une instance de produit





// echo $product2-> name;


 ?>