<?php
    class Utilisateur
    {
        private $name;
        private $email;

        public function __construct($name, $email)
        {
            $this->name = $name;
            $this->email = $email;   
        }

        public function getData()
        {
            $GetEmail = $this->email;
            $GetName = $this->name;

            echo $GetEmail;
            echo $GetName;
        }
    }

    $User = new Utilisateur("amine","aminelb4@gmail.com");
    $User->getData();
?>