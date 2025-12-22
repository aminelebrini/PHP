<?php
    class Person
    {
        public $nom;

        public function __construct($nom)
        {
            $this->nom = $nom;
        }
    }

    $User = new Person("amine");
    echo $User->nom;
    
?>