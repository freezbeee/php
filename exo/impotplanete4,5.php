<?php
// diff de null et pas vide
var_dump($_POST);
if (isset($_POST['age'])  && $_POST['age'] !== "") {

  $age = intval($_POST['age']);

  if (isset($_POST['sexe']) && $_POST['sexe'] !== "") {

    foreach ($_POST['sexe'] as $valeur) {
      // var_dump($valeur);
      if ($age >= 20 && intval($valeur) === 1) {
        echo "cheh: vous ete imposable zorglubien de $age ans";
      } elseif ($age >= 18 &&  $age <= 35  &&  intval($valeur) === 0) {
        echo "cheh: vous ete imposable zorglubienne de $age ans";
      } else {
        echo "tu n'est pas imposable";
      }
    }
  } else {
    echo "vous devez cocher une case sexe";
  }
} else {
  echo "vous devez renseigner votre age";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>photocopie</title>
</head>

<body>
  <form action="" method="post">
    <h1>quelle est votre sexe (femme;homme)</h1>
    <p>femme</p>
    <input type="checkbox" id="sexef" name="sexe[]" value="0" />
    <p>homme</p>
    <input type="checkbox" id="sexeh" name="sexe[]" value="1" />
    <h1>votre age ?</h1>
    <input type="number" name="age" placeholder="age ?" id="age" />
    <button id="btn">valider</button>
    <button type="submit">valider</button>
  </form>
</body>

</html>