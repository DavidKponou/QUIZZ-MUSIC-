<?php

// Classe abstraite Forme
abstract class Forme {
    // Méthode abstraite (doit être définie dans les classes filles)
    abstract public function calculerAire();
}

// Classe Carré
class Carre extends Forme {
    public $cote;

    public function __construct($cote) {
        $this->cote = $cote;
    }

    public function calculerAire() {
        return $this->cote * $this->cote;
    }
}

// Classe Triangle
class Triangle extends Forme {
    public $base;
    public $hauteur;

    public function __construct($base, $hauteur) {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function calculerAire() {
        return ($this->base * $this->hauteur) / 2;
    }
}

// --- Test ---
$formes = [
    new Carre(4),
    new Triangle(6, 3)
];

foreach ($formes as $forme) {
    echo "Aire : " . $forme->calculerAire() . "<br>";
}

?>
