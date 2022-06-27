<?php
var_dump($_COOKIE);
if ($_COOKIE['prixAtrouve']) {
  $prixAtrouve = (int)$_COOKIE['prixAtrouve'];
} else {
  $prixAtrouve = random_int(1, 100);
  // je met un coolie avc le prix a trouver il sera valide 5min
  setcookie('prixAtrouve', $prixAtrouve, time() + (60 * 5));
}
// $prixAtrouve = random_int(1, 100);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cookie</title>
</head>

<body>
  <form action="" method="post">
    <label for="prix">prix</label>
    <input type="text" name="prix" id="prix">
    <br>
    <button type="submit">envoyer</button>


  </form>
  <?php
  $txtprix = $_POST['prix'] ?? false;
  $prix = intval($txtprix);
  // pareil que
  // $prix = intval($txtprix);
  if ($prix === $prixAtrouve) {
    $resultat = " bravo ";;
  } elseif ($prix > $prixAtrouve) {
    $resultat = "plus bas";
  } else {
    $resultat = "plus haut";
  }
  if ($prix === $prixAtrouve) {
    echo '<form action=""><button type="submit" name="reload" >recommencer</button></form> <br/>';
    $prixAtrouve = random_int(1, 100);
    setcookie('prixAtrouve', $prixAtrouve, time() + (60 * 5));
  }

  echo $resultat

  ?>
</body>

</html>