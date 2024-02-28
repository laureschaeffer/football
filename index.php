<?php

//charge les classes
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//-------------instance de classes

//pays string nom
$france= new Pays("France");
$espagne= new Pays("Espagne");
$bresil= new Pays("Bresil");
$guinee= new Pays("Guinée");
$argentine= new Pays("Argentine");

//joueur string $prenom, string $nom, string $date_naissance, Pays $pays

$arnauT= new Joueur("Arnau", "Tenas", "2001-05-30", $espagne);
$lucasB= new Joueur("Lucas", "Beraldo", "2003-11-24", $bresil);
$kylianM= new Joueur("Kylian", "Mbappe", "1998-12-20", $france);

$matthieuD= new Joueur("Matthieu", "Dreyer", "1989-03-20", $france);
$fredericG= new Joueur("Frédéric", "Guilbert", "1994-12-24", $france);
$saidouS= new Joueur("Saïdou", "Sow", "2002-07-04", $guinee);
$lionelM= new Joueur("Lionel", "Messi", "1987-06-24", $argentine);

//equipe string $nom, Pays $pays
$psg= new Equipe("Paris Saint-Germain", $france, 1970);
$rcStras = new Equipe("Racing Club Strasbourg", $france, 1906);
$fcBarcelone= new Equipe("FC Barcelone", $espagne, 1899);

//carriere string $anneeSaison, Equipe $equipe, Joueur $joueur
$cArnauT= new Carriere("2024", $psg, $arnauT);
$cLucasB= new Carriere("2024", $psg, $lucasB);
$cKylianM= new Carriere("2024", $psg, $kylianM);

$cMatthieuD= new Carriere("2024", $rcStras, $matthieuD);
$cfredericG= new Carriere("2024", $rcStras, $fredericG);
$cSaidouS= new Carriere("2024", $rcStras, $saidouS);
$cLionelM= new Carriere("2021", $psg, $lionelM);
$cLionelM2= new Carriere("2004", $fcBarcelone, $lionelM);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Football-POO</title>
</head>
<body>
    <div id="wrapper">
        <div id="pays">
            
            <?=$france->afficherEquipe()?>
            <?=$espagne->afficherEquipe()?>
        </div>
        <div id="joueurs">
            
            <?=$lionelM->carriereJoueur()?>
            <?=$arnauT->carriereJoueur()?>
            <?=$lucasB->carriereJoueur()?>
            <?=$kylianM->carriereJoueur()?>
            <?=$matthieuD->carriereJoueur()?>
            <?=$fredericG->carriereJoueur()?>
            <?=$saidouS->carriereJoueur()?>
        </div>
        <div id="equipes">
            
            <?=$psg->joueursEquipe()?>
            <?=$rcStras->joueursEquipe()?>
            <?=$fcBarcelone->joueursEquipe()?>
        </div>



    </div>
    
</body>
</html>