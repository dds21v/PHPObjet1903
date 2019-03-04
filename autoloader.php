
<?php  
// Les inclusions

// Cet autoloader permet de faire les "require" des 
// classes se trouvant dans le dossier "Classes".
// 
function autoloader_perso($className){
	var_dump($className);
	require('Classes/' . $className . '.php');
}
spl_autoload_register('autoloader_perso');

?>