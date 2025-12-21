<?php
    class Creat {

        public $msg;

        public function message()
        {
            $this->msg = 'CREE';
        }
    }

    $Notif = new Creat();
    $Notif->message();

    echo $Notif->msg;
?>