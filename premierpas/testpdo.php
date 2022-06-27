<?php
$dsn = 'mysql:dbname=freez;host=localhost;port=3306;charset=utf8';
$user = 'freez';
$pwd = 'T_X9N7/9]AW2x15k';

// cree une connexion base de donnée 
$pdo = new PDO($dsn, $user, $pwd,  [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //active le mode verbeux pour les 
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // lire les enregistrement comme un tableau
]);
// requtte simple
$sql = 'select * from article';
foreach ($pdo->query($sql) as $row) {
  echo "<p>
  id {$row['id']} <br>
  nom {$row['nom']} <br>
  poids {$row['poids']} <br>
  prix {$row['prix']} <br>
  </p>";
}



// requtte parametrer
// $sql = 'select * from article where nom = :nom';
// $stmt = $pdo->prepare($sql); // je prepare une requte parametre
// // j'associe mes valeur a des parametre
// $stmt->bindValue(':nom',  'Article 1',  PDO::PARAM_STR);
// // j'execute la requete (/!\ je ne recupere pas les donnée tout de suuit
// //je regarde si le requete a cree une erreur)
// $rst = $stmt->execute();
// // j'affiche le result
// if ($rst) {
//   // je recupere toute les ligne renvoye par la bdd et je range dan le tableau
//   $data = $stmt->fetchAll();
//   // je lis mon resultat
//   foreach ($data as $article) {
//     echo "<p>
//     id {$article['id']} <br>
//     nom {$article['nom']} <br>
//     poids {$article['poids']} <br>
//     prix {$article['prix']} <br>
//     </p>";
//   }
// }


// je prepare une requte
// $stmt = $pdo->prepare(query: 'select * from article');
// // je l'execute
// $res = $stmt->execute();
// // tant qu'il y a une nouvelle ligne d'article a affiché
// while ($row = $stmt->fetch()) {
//   var_dump($row);
// }
// echo 'ok';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test form</title>
</head>

<body>
  <form action="" method="post">
    <div>
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" placeholder="nom de l'article" required>
      <br>
      <button type="submit">recherche</button>
    </div>
  </form>
  <?php
  //Requête préparer avec parametre
  $nom = $_POST['nom'] ?? false;
  if ($nom !== false) //mon formulaire est posté ?
  {
    //je nettoie ma variable
    // $nom = filter_var($nom, FILTER_SANITIZE_ENCODED);
    $nom = htmlspecialchars($nom);
    $sql = 'select * from article where nom like :nom';

    $stmt = $pdo->prepare($sql); //je prépare une requête parametrée

    //J'assicue les valeurs a mes parametres
    $stmt->bindValue(':nom', "%$nom%", PDO::PARAM_STR);


    //j'execute la requête (/!\ je ne récupère pas les données tout de suite)
    //je regarde si la requête a créer une erreur
    $rst = $stmt->execute();

    //j'affiche mon résultat(si j'en ai un!)
    if ($rst) {
      // var_dump($stmt->debugDumpParams());
      //je recupere TOUTES les lignes renvoyé par la bdd et le range dans un tableau (cf PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC)
      $data = $stmt->fetchAll();

      //je lis mon résultat
      foreach ($data as $article) {
        echo "<p> 
        id : {$article['id']}<br>
        nom : {$article['nom']}<br>
        poids : {$article['poids']}<br>
        prix : {$article['prix']}<br>
    </p>";
      }
    }
  }

  ?>
</body>

</html>