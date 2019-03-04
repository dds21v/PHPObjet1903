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

// Changement du nom du hamac
$hamac-> setName ('Hamac');
$hamac-> setDesc ('Pour se reposer');
$hamac-> setPrice (89.99);

var_dump($hamac);

// affichage d'une propriété (price) du hamac
// echo '<p>' .$hamac->price. '€</p>';
// appel d'une méthode du hamac
echo '<p>' .$hamac->displayName(). '</p>';
echo '<p>' .$hamac->displayPrice(). '</p>';
echo '<p>' .$hamac->displayDesc(). '</p>';


var_dump($hamac);


// Création d'un deuxième objet Product : parasol
$parasol = new Product();
// Changement des valeurs des propriétés du parasol
$parasol-> setName ('Parasol');
$parasol-> setDesc ('Pour se proteger du soleil');
$parasol-> setPrice (29.99);
// debug du parasol
var_dump($parasol);

// affichage d'une propriété (price) du parasol
// echo '<p>' .$parasol->price. '€</p>';
// appel d'une méthode du parasol
echo '<p>' .$parasol->displayName(). '</p>';
echo '<p>' .$parasol->displayPrice(). '</p>';


$voyage = new Category();


// affichage d'une constante
echo '<p> Nombre de vues par défaut des produits:'
	. $hamac::DEFAULT_NB_VIEWS . '</p>';

?>