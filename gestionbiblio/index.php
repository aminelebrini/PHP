<?
    class Book
    {
        public $titre, $auteur, $année;

        public function __construct($titre, $auteur,$année)
        {
            $this->titre = $titre;
            $this->auteur = $auteur;
            $this->année = $année;
        }
        
        public function afficherInfos()
        {
            //return $this->titre . " et " . $this->auteur . " et " . $this->année;
        }
    }

    class Library
    {
        public array $Books = [];


        public function ajouterbook($book)
        {
            array_push($this->Books, $book);

            print_r($this->Books);
        }

        public function supprimerbook($book)
        {
            for($x = 0; $x < count($this->Books); $x++)
            {
                if($this->Books[$x] === $book)
                {
                    $this->Books[$x] = $this->Books[$x+1];
                }
            }
            //return $this->Books;
        }
    }

    $book = new Book("meserable", "victor hugo", 1925);
    $Library = new Library();
    $Library->ajouterbook($book);
?>