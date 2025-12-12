<?php
    class Car{
        public $brand;

        function display()
        {
           return "Voici le type " . $this->brand;
        }
    }

    $cr = new Car();
    $cr->brand = "AUDI";

    echo $cr->display();
?>