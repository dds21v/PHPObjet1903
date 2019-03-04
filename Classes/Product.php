<?php 




class Product {
	// création constante
	const DEFAULT_NB_VIEWS = 0;
	// par convention Propriété en haut...
	public $name;
	public $description;
	public $price;
	//  et Méthode en dessous.
	public function displayPrice(){
		return 'Prix:' . $this-> price . '€';
	}
	public function displayName(){
		return 'Nom:' . $this-> name . '';
	}



	

}


?>
