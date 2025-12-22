<?php
    class Person{
        public $personne;
        public $age;


        public function __construct($personne, $age)
        {
            $this->personne = $personne;
            $this->age = $age;
        }

        public function affichage():void
        {
            $data = $this->personne;

            foreach($this->personne as $pers)
            {
                echo "le nom " . $pers . "<br>";
            }
        }
    }

    $p = new Person(["salma", "amine", "JSX"], 25);
    $p->affichage();
?>