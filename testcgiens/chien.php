<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./goat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//version objet
require_once 'Candidat.php';


$hugo = new candidat(
    'Hugo',
    22,
    'la mer',
    'quand theo ne parle pas',
    'les théo',
    'de plus voir ta gueule'
);

$Victrard = new candidat(
    'Victrard',
    25,
    'regarder son ordinateur pendant des heures ',
    'dire bouge de la a théo',
    'théo',
    'sa nouvelle carte graphique '
);

$Mathieu = new candidat(
    'Mathieu',
    26,
    's\'est biscoto ',
    'théo',
    'les autre',
    'de soulever 500kg au developer coucher '
);

$theo = new candidat(
    'Theo',
    22,
    'la joie ',
    'le bonne humeur',
    'lui meme ',
    'd avoir la chemise a hugo '
);
$val = new candidat(
    'Velentrin',
    25,
    ' rire ',
    'les bord de fenetre',
    'mourir sur among us ',
    'de faire des chose avec virgil '
);
$lucas = new candidat(
    'Lucas ou prince de lu ',
    30,
    'la bagarre ',
    'les canada',
    'rater son chek ',
    'd\'un BR version réel avec les poing'
);
$Mamadou = new candidat(
    'Mamadou le goat <br>',
    2000000000,
    'gerer le cours de la bourse ',
    'investir des milliard',
    'Rien car il est gentille',
    ' rendre le monde meilleur',
);
$pierre = new candidat(
    'Pierre ',
    35,
    'les geode',
    'miner tout les jour',
    'React',
    'de devenire champion de l\'arene Argenta ',
);




echo $hugo;
echo $Victrard;
$Victrard->setReve('au final reve de rouler a 400km/h sur un parking avec une reliant robin <br> <br> <br> ');
$Victrard->newReve();

echo $Mathieu;
$Mathieu->setReve('au final detester théo <br> <br> <br> ');
$Mathieu->newReve();
// $sebastcandidat->aboyer();

echo $theo;
$theo->setAime1('PERSONNE <br>  <br> <br> <br>');
$theo->newAimer1();

echo $val;
echo $lucas;
echo $pierre;

echo "<div id='goat'>$Mamadou";

// //echo $toby;
// echo "<br> apres cure de remise en forme : <br> $sebastcandidat";

// $toby->manger();

/*
 * version procedurale
//nom
//race
//couleur
//poids
//age
//pedigree
$toby = [
    'nom' => 'Toby',
    'race' => 'husky',
    'robe' => 'blanc et noir',
    'poids' => '30kg',
    'age' => '3 ans',
    'pedigree' => 'pure race'
];
$sebastien = [
    'nom' => 'Sebastcandidat',
    'race' => 'bichon',
    'robe' => 'maltais',
    'poids' => '30kg',
    'age' => '10 ans',
    'pedigree' => 'pure gras'
];
//action
//aboyer
//manger
//dormir
//mordre
function aboyer($candidat){
    echo "{$candidat['nom']} aboie sur le facteur <br>";
}
function manger($candidat){
    echo "{$candidat['nom']} mange ses croquettes <br>";
}
function dormir($candidat){
    echo "{$candidat['nom']} dormir dans son panier <br>";
}
function mordre($candidat){
    echo "{$candidat['nom']} mord le facteur <br>";
}
//action
aboyer($toby);
manger($sebastien);
dormir($toby);
mordre($sebastien);
*/