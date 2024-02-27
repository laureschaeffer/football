<?php

class Pays{
    private string $nom;
    private array $equipePays; //repertorie les equipes d'un pays

    public function __construct(string $nom){
        $this->nom=$nom;
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

    public function getEquipePays()
    {
        return $this->equipePays;
    }


    public function setEquipePays($equipePays)
    {
        $this->equipePays = $equipePays;

        return $this;
    }

    //tostring
    public function __toString(){
        return $this->nom ;
    }

    //--------------méthodes

    // ajoute chaque objet Equipe au tableau qui contient toutes les équipes d'un pays
    public function ajouterEquipe(Equipe $equipe){
        $this->equipePays[]=$equipe ;
    }

    public function dump(){
        var_dump($this->equipePays);
    }


}