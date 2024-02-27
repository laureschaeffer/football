<?php

class Carriere{
    private int $anneeSaison;
    private Equipe $equipe;
    private Joueur $joueur;

    public function __construct(int $anneeSaison, Equipe $equipe, Joueur $joueur){
        $this->anneeSaison= $anneeSaison;
        $this->equipe=$equipe;
        $this->joueur=$joueur;

        //methodes dans leurs classes respectives
        // ajoute ceci(this) à l'endroit joueur et equipe
        $this->equipe->ajouterCarriere($this);
        $this->joueur->ajouterCarriere($this);

    }

    //getters et setters

    public function getAnneeSaison()
    {
        return $this->anneeSaison;
    }


    public function setAnneeSaison($anneeSaison)
    {
        $this->anneeSaison = $anneeSaison;

        return $this;
    }
 
    public function getEquipe()
    {
        return $this->equipe;
    }

    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }


    public function getJoueur()
    {
        return $this->joueur;
    }


    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    //tostring
    public function __toString(){
        return $this->joueur." dans l'équipe ".$this->equipe." (".$this->anneeSaison.")";
    }

    public function dump(){
        return var_dump($this);
    }
}