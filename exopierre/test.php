<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
// Verif du form 
if (isset($_POST['submit'])) {
  // tab des info 
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['mdp'] = $_POST['mdp'];
}
// echo "voici ton mot de passe $name : $mdp";

echo '<br />Donnée enregistré : <a href="./lireSession.php">voir vos info</a>';


//ouvre une nouvelle session ou récupere une session en cours

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