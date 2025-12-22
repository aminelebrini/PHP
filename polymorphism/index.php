<?php
    class Animal{
        public function parler()
        {
            echo "je peux parler";
        }
    }

    class chien extends Animal{
        public function parler()
        {
            echo "Wouf!";
        }
    }

    class chat extends Animal
    {
        public function parler()
        {
            echo "miaou";
        }
    }

    $Chiens = new chien();
    $Chiens->parler();
    echo "<br>";
    $Chats = new chat();
    $Chats->parler();

?>