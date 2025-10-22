<?php

class CompteBancaire {
    public $solde;

    public function __construct($soldeInitial = 0) {
        $this->solde = $soldeInitial;
    }

    public function calculerInterets($taux) {
        return $this->solde * ($taux / 100);
    }
}

class ComptePremium extends CompteBancaire {
    public $decouvertAutorise;

    public function __construct($soldeInitial = 0, $decouvertAutorise = 0) {
        parent::__construct($soldeInitial);
        $this->decouvertAutorise = $decouvertAutorise;
    }

    public function calculerInterets($taux) {
        $interets = parent::calculerInterets($taux);
        return $interets * 0.9; // réduction de 10 % sur les intérêts
    }
}

$compte1 = new ComptePremium(1000, 200);
echo "Solde initial : {$compte1->solde} euros<br>";
echo "Intérêts (5%) : " . $compte1->calculerInterets(5) . " euros<br>";

?>
