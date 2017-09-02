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
?>






<?php
$titre = htmlspecialchars($_POST['titre']);
$genre = htmlspecialchars($_POST['genre']);
$description = htmlspecialchars($_POST['description']);
$annee = htmlspecialchars($_POST['annee']);
$auteur = htmlspecialchars($_POST['auteur']);
$note = htmlspecialchars($_POST['note']);
$studio = htmlspecialchars($_POST['studio']);


// $bdd->query('INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age) 
// VALUES ("'.$prenom.'","'.$nom.'","'.$age.'")');

$sql = sprintf('INSERT INTO possession (titre, genre, description, annee, auteur, note, studio) 
VALUES ("'.$titre.'","'.$genre.'","'.$description.'","'.$annee.'","'.$auteur.'","'.$note.'","'.$studio.'")');

$reponse = $bdd->query($sql);

?>