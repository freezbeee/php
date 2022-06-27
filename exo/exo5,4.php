<?php
// diff de null et pas vide
if (isset($_POST['nombre'])  && $_POST['nombre'] !== "") {
  $nombre = intval($_POST['nombre']);
  $i = 0;
  while ($i <= 10) {
    $result = $nombre * $i;
    echo "$nombre * $i = $result <br/>";
    $i++;
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
    <label for="nombre">nombre a multiplier
      <input type="number" name="nombre" placeholder="donne un nombre" required>
    </label>
    <button type="submit">valider</button>
  </form>
  <div name='multi'></div>
</body>

</html>