<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

   
</head>
<body>
    <?php include_once('header.php'); 
    ?>

    <main>

    <?php
     $adresseBdd = "";
     
     $utilisateurBdd = "";
     $mdpUtilisateurBdd = "";
     $nomBdd = "";


     try {
        $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd);

       

     }catch(PDOExeception $erreur ) {
        echo "Erreur: " .$erreur; 


     }
     ?>
    <section class="acceuil">
     <!-- <ul> -->
     <?php
    //  récupération des utilisateurs 

    $utilisateurs = $connexion->query("SELECT * FROM utilisateurs"); 
    foreach ($utilisateurs as $utilisateur){
        ?>
        

         
<div id="img"><img src="<?php echo $utilisateur['image']; ?>"></div>

<div id="profh3">

<h3><?php echo $utilisateur['prenom'] ." ". $utilisateur['nom']."<br> " .$utilisateur['age']." ans"; ?></h3>


</div>
<div id="a"><a href="utilisateur.php?prenom=<?php echo $utilisateur['prenom']; ?>">Voir le profil</a></div>
    

    <?php


    }
    ?>

     <!-- </ul> -->
</section>
    </main>

    <?php include_once('footer.php'); ?>
</body>
</html>