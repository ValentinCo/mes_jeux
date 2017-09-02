<?php
//Lance la bdd 'dbname=Nom de la bdd' 'root = nom utilisateur' 'admin= mdp'
try
{
$bdd = new PDO('mysql:host=localhost;dbname=mes_jeux;charset=utf8', 'root', 'admin');
}
    catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



$search = $_POST['search'];


$sql= sprintf("SELECT * FROM possession 
WHERE titre LIKE '%%%s%%' OR genre LIKE '%%%s%%' OR année LIKE '%%%d%%' ", $search, $search, $search);

$reponse= $bdd->query($sql);



while($donnees = $reponse->fetch()){
    ?>
    <p><?= $donnees['titre'] ." ". $donnees['genre']  ?> </p>
    <?php
    }
    $reponse->closeCursor();
    ?>