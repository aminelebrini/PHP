<?php
    class person{
        public $name;

        public function hello()
        {
            return "Bonjour " . $this->name;
        }
    }

    $per = new person();
    $per->name = "amine";

    echo $per->hello();
?>