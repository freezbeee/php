<?php
//ouvre une nouvelle session ou récupere une session en cours
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <table>
    <tr>
      <td>login enregistré</td>
      <td>
        <?php
        echo $_SESSION['name'];
        ?>
      </td>
    </tr>
    <tr>
      <td>mdp enregistré</td>
      <td>
        <?php
        echo $_SESSION['mdp'];
        ?>
      </td>
    </tr>
  </table>

</body>

</html>