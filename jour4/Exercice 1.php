<?php

class Personne {
    public $nom;
    public $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;

    }

    public function sePresenter() {
        return "Je m'appelle  {$this->nom} et j'ai {$this->age} ans.";
    }

}


class Etudiant extends Personne {
    
    public $ecole;

    public function __construct($nom, $age, $ecole ) {
       parent::__construct($nom, $age);
        $this->ecole = $ecole;

    }

    public function sePresenter() {
        return parent::sePresenter() . " Je suis étudiant à {$this->ecole}.";
    }   
    
}

$etudiant1 = new Etudiant("Alice", 20, "Université de Paris");
    echo $etudiant1->sePresenter() . " Je suis étudiant à {$etudiant1->ecole}."; 
    

?>
