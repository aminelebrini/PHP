<?php
    class User{
        public $username;
        public $email;

        function info()
        {
            return "USERNAME IS: " . $this->username . " / EMAIL IS: " . $this->email;
        }
    }

    $Us = new User();
    $Us->username = "AMINE";
    $Us->email = "amine@example.ma";

    echo $Us->info();
?>