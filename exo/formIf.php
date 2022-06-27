<?php
// diff de null et pas vide
if(isset($_POST['nombre'])  && $_POST['nombre'] !== "" ){
  $nombre = intval($_POST['nombre']);
  
  
  if($nombre>0){
    echo "positif";
  } elseif($nombre === 0){
    echo "vaut 0";

  }
  
  
  else {
    echo "negatif";
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