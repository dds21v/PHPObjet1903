<?php 

// Les inclusions
function autoloader_perso($className){
	var_dump($className);
	require('Classes/' . $className . '.php');
}
spl_autoload_register('autoloader_perso');

echo 'bonjour';


// Création de l'objet
$hamac = new Product();
var_dump($hamac);
// Changement du nom du hamac
$hamac-> name = 'Hamac';
$hamac-> description = 'Pour se reposer';
$hamac-> price = 89.99;

// affichage d'une propriété (price) du hamac
echo '<p>' .$hamac->price. '€</p>';
// appel d'une méthode du hamac
echo '<p>' .$hamac->displayName(). '</p>';
echo '<p>' .$hamac->displayPrice(). '</p>';

var_dump($hamac);


// Création d'un deuxième objet Product : parasol
$parasol = new Product();
// Changement des valeurs des propriétés du parasol
$parasol-> name = 'Parasol';
$parasol-> description = 'Pour se proteger du soleil';
$parasol-> price = 29.99;
// debug du parasol
var_dump($parasol);

// affichage d'une propriété (price) du parasol
echo '<p>' .$parasol->price. '€</p>';
// appel d'une méthode du parasol
echo '<p>' .$parasol->displayName(). '</p>';
echo '<p>' .$parasol->displayPrice(). '</p>';


$voyage = new Category();

var_dump($hamac);

// affichage d'une constante
echo '<p> Nombre de vues par défaut des produits:'
	. $hamac::DEFAULT_NB_VIEWS . '</p>';

?>