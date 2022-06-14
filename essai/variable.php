<?php
// les commentaire mono ligne
/*
multiligne
*/

// varible simple
$prenom = 'patt';
$nom = 'la menace';

echo 'salut moi s\'est '.$prenom.' '.$nom. '<br/>';
echo "salut moi s'est $prenom $nom <br/>";
// ' a privilegier quand on fait du texte brut
echo 'salut moi s\'est $nom $prenom <br/>';
$age = 99;

echo "salut moi s'est $prenom $nom et j'ai $age ans. <br/>";
$isAdulte = true;

if($isAdulte){
  echo "salut je suis un adulte, je m'appel $prenom $nom et j'ai $age ans. <br/>";
} else{
  echo "salut je suis un gosse, je m'appel $prenom $nom et j'ai $age ans. <br/>";
}

// ou 
$res = (!$isAdulte) ? "salut je suis un adulte, je m'appel $prenom $nom et j'ai $age ans. <br/>" : "salut je suis un gosse, je m'appel $prenom $nom et j'ai $age ans. <br/>";
echo $res;


echo $isAdulte ?? 'enfant';