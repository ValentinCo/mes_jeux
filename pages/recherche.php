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
WHERE titre LIKE  '%%%s%%' OR genre LIKE '%%%s%%' OR  annee LIKE '%%%s%%' OR auteur LIKE '%%%s%%' OR studio LIKE '%%%s%%'",$search, $search, $search, $search, $search);

$reponse= $bdd->query($sql);

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

while($donnees = $reponse->fetch()){
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

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Document</title>
    </head>
    <body>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    </html>