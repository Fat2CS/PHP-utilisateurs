<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Connection BDD</h1>
    
<?php
// connexion à la base de données
$adresseBdd = "localhost:8889"; 
$utilisateurBdd = "root"; 
$mdpUtilisateurBdd = "root"; 
$nomBdd = "cours-php"; 

try{
    // UNE Fonction qui nous permet de nous connecter à la base de donnée 
    $connexion = new PDO("mysql:host=" . $adresseBdd . "; dbname=" . $nomBdd,$utilisateurBdd, $mdpUtilisateurBdd); 

    echo "Connexion établie :)"; 

}catch(PDOEception $erreur){

    echo "Erreur: " . $erreur; 

}
?>

</body>
</html>