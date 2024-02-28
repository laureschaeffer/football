<?php

class Equipe{
    private string $nom;
    private Pays $pays;
    private int $anneeCreation;
    private array $carrieres;

    public function __construct(string $nom, Pays $pays, int $anneeCreation){
        $this->nom=$nom;
        $this->pays=$pays;
        $this->anneeCreation=$anneeCreation;

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

    public function getAnneeCreation()
    {
        return $this->anneeCreation;
    }


    public function setAnneeCreation($anneeCreation)
    {
        $this->anneeCreation = $anneeCreation;

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


    // retourne la liste des joueurs d'une équipe
    public function joueursEquipe(){
        $result= "<div class='card-equipe'>
            <div class='card-header'>
                <h3>$this</h3>
                <p>$this->pays - $this->anneeCreation </p>
            </div>
           <div class='card-body'>";
            //boucle pour avoir tous les joueurs
            foreach ($this->carrieres as $carriere) {
                $result.= "<p>".$carriere->getJoueur()." (".$carriere->getAnneeSaison().")</p>";
            }
            $result.= "</div>
            </div>";
            return $result;
        }

            

}