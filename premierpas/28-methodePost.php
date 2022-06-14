<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 12/01/2016
 * Time: 13:27
 */
echo "Nom =".strtoupper($_POST['nom'])." <br> ";
echo "Prénom =".ucwords($_POST["prenom"])." <br> ";
echo "couleur =".ucwords($_POST["couleur"])." <br> ";

if($_POST['pays'])
{
  echo'<ul>';
  foreach($_POST['pays'] as $valeur)
  {
    echo "<li> $valeur </li>";
  }
  echo'</ul>';
}

// echo '<pre>' .var_dump($_POST['pays']). '</pre>';
//echo var_dump(get_defined_vars());