<nav class="test navbar navbar-inverse">  
<div class="container-fluid">

    <div class="navbar-header">
    
    </div>
    <ul class="nav navbar-nav">
    <li><a type="button" class="btn btn-primary bouton" data-toggle="modal"
    data-target="#exampleModal" data-whatever="@mdo">Ajouter jeux</a></li>
    <li><a href="?p=home">Accueil</a></li>
    <li><a href="?p=jeux">Liste jeux</a></li>
    <li>
    <form method="POST" action="pages/recherche.php" class="navbar-form" role="search">
        <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="Recherche" required>
            <div class="input-group-btn">
                <button  class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </li>
    </ul>
</nav>
                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau jeux</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="?p=nouveau">
          <div class="form-group">
            <label for="prenom" class="form-control-label">Titre:</label>
            <input name="titre" type="text" class="form-control" id="prenom" required>
          </div>
          <div class="form-group">
            <label for="nom" class="form-control-label">Genre:</label>
            <input name="genre" type="text" class="form-control" id="nom" required>
          </div>
          <div class="form-group">
          <label for="message-text" class="form-control-label">Description:</label>
          <textarea name="description" class="form-control" id="message-text"></textarea>
        </div>
        <div class="form-group">
            <label for="nom" class="form-control-label">Année:</label>
            <input name="annee" type="number" class="form-control" id="nom" required>
          </div>
          <div class="form-group">
            <label for="nom" class="form-control-label">Auteur:</label>
            <input name="auteur" type="text" class="form-control" id="nom" required>
          </div>
          <div class="form-group">
            <label for="nom" class="form-control-label">Note /20:</label>
            <input name="note" type="number" class="form-control" id="nom" required>
          </div>
          <div class="form-group">
            <label for="nom" class="form-control-label">Studio / Devs:</label>
            <input name="studio" type="text" class="form-control" id="nom" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button name="valider" type="submit" class="btn btn-primary">Valider</button>
      </div>
    </div>
  </div>
</div>
</form> 

