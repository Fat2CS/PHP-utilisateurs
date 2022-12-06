<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
     <?php include_once('header.php'); 
    ?>

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
<?php
$utilisateurs = $connexion->query("SELECT * FROM utilisateurs"); 

foreach($utilisateurs as $utilisateur){

    if($utilisateur['prenom']== $_GET['prenom']){

?>
 <section id="presentation">
    <div id="top">
             <img src="<?php echo $utilisateur['image']; ?>">
                    <div id="name">
                        <h2><?php echo $utilisateur['prenom']; ?> <?php echo $utilisateur['nom']; ?></h2>
                        <h3><?php echo $utilisateur['age']; ?> ans</h3>
    </div>
                   
                    </div>
                    <div class="description">
                            <?php echo $utilisateur['description']; ?>
                        </div>
                </section>

                <?php
    }
}


?>
</body>
</html>



