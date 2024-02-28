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

    // fonction qui renvoie toutes les équipes d'un pays
    public function afficherEquipe(){
         $result=" <div class='card-pays'>
            <div class='card-header'>
              <h3> $this </h3> 
            </div>
            <div class='card-body'>";
                foreach($this->equipePays as $equipe){
                    $result.="<p>".$equipe->getNom()."</p>";
                }
                
        $result.= " </div>
        </div>";
        return $result;
    }

        

}