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

//joueur string $prenom, string $nom, string $date_naissance, Pays $pays

$arnauT= new Joueur("Arnau", "Tenas", "2001-05-30", $espagne);
$lucasB= new Joueur("Lucas", "Beraldo", "2003-11-24", $bresil);
$kylianM= new Joueur("Kylian", "Mbappe", "1998-12-20", $france);

//equipe string $nom, Pays $pays
$psg= new Equipe("Paris Saint-Germain", $france);

//carriere string $anneeSaison, Equipe $equipe, Joueur $joueur
$cArnauT= new Carriere("2024", $psg, $arnauT);
$cLucasB= new Carriere("2024", $psg, $lucasB);
$cKylianM= new Carriere("2024", $psg, $kylianM);

