<?php
    class comptebancaire
    {
        private $titulaire;
        private $solde;

        public function __construct($titulaire, $solde)
        {
            $this->titulaire = $titulaire;
            $this->solde = $solde;
        }

        public function claculeMt($montant){
            if($montant > 0)
            {
                $this->solde += $montant;
            }
        }

        public function modifMt($montant)
        {
            if($montant > 0)
            {
                $this->solde -= $montant;
            }
        }

        public function afficherCompte(): void
        {
            echo "Titulaire : " . $this->titulaire . "<br>";
            echo "Solde : " . $this->solde . " DH<br>";
        }
    }

    $user = new comptebancaire('amine', 0);
    $user->claculeMt(1000);
    $user->modifMt(200);
    $user->afficherCompte();
?>