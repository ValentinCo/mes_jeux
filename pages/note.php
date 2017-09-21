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
$reponse = $bdd->query('SELECT * FROM possession ORDER BY note ASC');
?>

<div class="container">
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>N°</th>
        <th>Titre</th>
        <th>Genre</th>
        <th>Description</th>
        <th>Année</th>
        <th>Auteur</th>
        <th>Note /20</th>
        <th>Studio / dev </th>

        
      </tr>
    </thead>


<?php
while  ($donnees = $reponse->fetch()){
?>
<p>
<td><?=$donnees['pos_oid']?> </td>
<td><?=$donnees['titre']?> </td>
<td><?=$donnees['genre']?> </td>
<td><?=$donnees['description']?> </td>
<td><?=$donnees['annee']?> </td>
<td><?=$donnees['auteur']?> </td>
<td><?=$donnees['note']?> </td>
<td><?=$donnees['studio']?> </td>
</tr>
</tbody>

</div>
</p>

</p>
    <?php
}


$reponse->closeCursor();
?>