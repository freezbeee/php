<?php
// diff de null et pas vide
if(isset($_POST['nombre'])  && $_POST['nombre'] !== "" ){
  $nombre = intval($_POST['nombre']);
  
  
  if($nombre>0 && $nombre<6 ){
    echo "revien quand tu aura 6ans";
  } elseif($nombre>=6 && $nombre<=7 ){
    echo "tu sera en poussin";

  }elseif($nombre>=8 && $nombre<=9 ){
    echo "tu sera en pupille";

  } elseif($nombre>=10 && $nombre<=11 ){
    echo "tu sera en minime";

  } elseif($nombre>= 12 && $nombre<= 79 ){
    echo "tu sera cadet";

  } elseif($nombre>=80 ){
    echo "desoler trop vieux";

  } else {
    echo "tu n'existe pas";
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
  <title>form if</title>
</head>
<body>
  <form action="" method="post">
    <label for="nombre">nombre
    <input type="number" name="nombre" placeholder="donne un nombre" required>
  </label>
  <button type="submit">valider</button>
  </form>
</body>
</html>