<?php

    class CompteBancaire{
        private $titulaire;
        private $solde;


        public function __construct($titulaire, $solde = 0)
        {
            $this->titulaire = $titulaire;
            $this->solde = $solde;
        }

        public function ajouterArgent($montant)
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

$User = new CompteBancaire("Amine");
$User->ajouterArgent(500);

echo "Titulaire: " . $User->getTitulaire() . "<br>";
echo "Solde: " . $User->getSolde();
?>