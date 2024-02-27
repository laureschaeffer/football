<?php

class Joueur{
    private string $prenom;
    private string $nom;
    private DateTime $date_naissance;
    private Pays $pays; //nationalité
    private array $carrieres;

    public function __construct(string $prenom, string $nom, string $date_naissance, Pays $pays){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->date_naissance= new DateTime($date_naissance);
        $this->pays=$pays;

        //tableau carrieres qui va contenir l'objet Joueur et Equipe
        $this->carrieres=[];
    }

    //getters et setters
    

    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getDate_naissance()
    {
        return $this->date_naissance;
    }


    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }


    public function getPays()
    {
        return $this->pays;
    }


    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    //toString
    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

    //-----------methodes

    // methode que je vais appeler dans l'objet Carriere ; ajoute Joueur au tableau
    public function ajouterCarriere(Carriere $carriere){
        $this->carrieres[]=$carriere ;
    }
}