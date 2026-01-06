<?php

    interface Animal
    {
        public function parler();
    }

    class Chien implements Animal
    {
        private $voix = 'haw';
        public function parler()
        {
            echo $this->voix;
        }
    }

    class Chat implements Animal
    {
        private $voix = 'miaw';
        public function parler()
        {
           echo $this->voix;
        }
    }
    
    $animaux = [new Chien(), new Chat()];
    foreach($animaux as $anim)
    {
        $anim->parler();
    }
?>