<?php
// diff de null et pas vide

use LDAP\Result;

if (isset($_POST['nombre'])  && $_POST['nombre'] !== "") {
  $nombre = intval($_POST['nombre']);

  $result = 0;
  for ($i = 0; $i < 20; $i++) {
    $tab[] = random_int(1, 100);
    $tab[] = $nombre;
    echo  "numero $i placer $tab <br/>";

    if ($result < $nombre) {
      $result += $nombre;
    }
  }
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
    <label for="nombre">place 20 nombre
      <input type="number" name="nombre" placeholder="donne un nombre" required>
    </label>
    <button type="submit">valider</button>
  </form>
  <div name='multi'></div>
</body>

</html>