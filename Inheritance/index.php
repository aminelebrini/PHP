<?php
    class conptebancaire
    {
        private $titulaire;
        protected $solde;


        public function __construct($titulaire, $solde)
        {
            $this->titulaire = $titulaire;
            $this->solde = $solde;
        }
        public function ajouter($montant)
        {
            if ($montant > 0) {
                $this->solde += $montant;
            }
        }

        public function getTitulaire()
        {
            return $this->titulaire;
        }

        public function getSolde()
        {
            return $this->solde;
        }
    }

    class epargne extends conptebancaire{
       private float $tauxInteret;

       public function __construct(string $titulaire, float $solde,float $tauxInteret)
       {
            parent::__construct($titulaire, $solde);
            $this->tauxInteret = $tauxInteret;
       }

       public function claculSold(): void{
            $this->solde += $this->solde * $this->tauxInteret; 
       }
    }

    $epargne = new epargne("Amine", 1000, 0.05);
    $epargne->ajouter(500);
    $epargne->claculSold();

    echo "Titulaire : " . $epargne->getTitulaire() . "<br>";
    echo "Solde : " . $epargne->getSolde();

?>