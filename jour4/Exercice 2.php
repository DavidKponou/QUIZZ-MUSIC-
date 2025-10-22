<?php
class Vehicule {
    public $marque;
    public $couleur;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function demarrer() {
        return "Le véhicule {$this->marque} {$this->modele} démarre.";
    }
}

class Voiture extends Vehicule {
    public $nombrePortes;

    public function __construct($marque, $modele, $nombrePortes) {
        parent::__construct($marque, $modele);
        $this->nombrePortes = $nombrePortes;
    }

    public function demarrer() {
        return parent::demarrer() . " C'est une voiture avec {$this->nombrePortes} portes.";
    }
}

$voiture1 = new Voiture("Toyota", "Corolla", 4);
echo $voiture1->demarrer(); // Affiche: Le véhicule Toyota Corolla démarre. C'est une voiture avec 4 portes.

?>