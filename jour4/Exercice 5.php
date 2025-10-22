<?php

// Définition de l’interface
interface Descriptible {
    public function decrire();
}

// Classe Ordinateur
class Ordinateur implements Descriptible {
    public $marque;
    public $ram;

    public function __construct($marque, $ram) {
        $this->marque = $marque;
        $this->ram = $ram;
    }

    public function decrire() {
        return "Ordinateur de marque {$this->marque} avec {$this->ram} Go de RAM.";
    }
}

// Classe Téléphone
class Telephone implements Descriptible {
    public $marque;
    public $tailleEcran;

    public function __construct($marque, $tailleEcran) {
        $this->marque = $marque;
        $this->tailleEcran = $tailleEcran;
    }

    public function decrire() {
        return "Téléphone {$this->marque} avec un écran de {$this->tailleEcran} pouces.";
    }
}

// --- Test ---
$produits = [
    new Ordinateur("Dell", 16),
    new Telephone("Samsung", 6.5)
];

foreach ($produits as $produit) {
    echo $produit->decrire() . "<br>";
}

?>
