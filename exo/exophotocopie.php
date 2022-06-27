<?php
// diff de null et pas vide
if(isset($_POST['nombre'])  && $_POST['nombre'] !== "" ){
  $nombre = intval($_POST['nombre']);
  
  
  if($nombre<=10){
    $nombre = 0.10*$nombre;
    echo "vous nous de devez $nombre euros";
  } elseif($nombre >10 && $nombre<=30){
    $nombre = $nombre - 10 ;
    $nombre = 0.09*$nombre+1;
    echo "vous nous de devez $nombre euros";

  } elseif($nombre > 30 ){
    $nombre = $nombre - 30 ;
    $nombre = 0.08*$nombre+2.8;
    echo "vous nous de devez $nombre euros";
  
  }
  else {
    echo "pas de nombre negatif";
  }
  // var_dump($_POST);
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
    <label for="nombre">nombre de photocopie
    <input type="number" name="nombre" placeholder="donne un nombre de phtocopie" required>
  </label>
  <button type="submit">valider</button>
  </form>
</body>
</html>