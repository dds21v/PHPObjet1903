<?php 




class Product {
	// création constante
	const DEFAULT_NB_VIEWS = 0;
	// par convention Propriété en haut...
	private $name;
	private $description;
	private $price;
	//  et Méthode en dessous.
	public function displayPrice(){
		return 'Prix:' . $this-> price . '€';
	}
	public function displayName(){
		return 'Nom:' . $this-> name . '';
	}

	public function displayDesc(){
		return 'description:' . $this-> description . '';
	}

	public function getName(){
		return $this->name;
	}
	public function setName(string $nouveauNom){
		$this->name = $nouveauNom;
	}

	public function getPrice() : float
	{
		return $this-> price;
	}
	public function setPrice(float $price): void{
		if ($price < 0){
			$price = 0;
		}
		$this-> price = $price;
	}

	public function getDesc(){
		return $this-> description;
	}
	public function setDesc(string $nouveauDesc){
		$this-> description = $nouveauDesc;
	}

}


?>
