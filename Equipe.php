<?php

class Equipe{
    private string $nom;
    private Pays $pays;
    private array $carrieres;

    public function __construct(string $nom, Pays $pays){
        $this->nom=$nom;
        $this->pays=$pays;

        // dans la méthode créée dans la classe pays, j'ajoute l'objet Equipe au tableau
        $this->pays->ajouterEquipe($this);
        //tableau carrieres qui va contenir l'objet Joueur et Equipe
        $this->carrieres=[];
    }

    //getters et setters

    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

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

    public function getCarrieres()
    {
        return $this->carrieres;
    }


    public function setCarrieres($carrieres)
    {
        $this->carrieres = $carrieres;

        return $this;
    }
    
    //toString
    public function __toString(){
        return $this->nom;
    }
    //----------methodes

    // methode que je vais appeler dans l'objet Carriere ; ajoute Equipe au tableau
    public function ajouterCarriere(Carriere $carriere){
        $this->carrieres[]=$carriere ;
    }


}