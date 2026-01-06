<?php
    interface Voiture
    {
        public function vitess($v);
    }

    class Audi implements Voiture
    {
        public function vitess($v)
        {
            $v *= 500;
            echo $v;
        }
    }

    $car = new Audi();
    $car->vitess(120);
?>