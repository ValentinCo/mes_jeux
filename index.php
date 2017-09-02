<?php 
if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}
ob_start();
if($p === 'home'){
    include('./pages/home.php');
}
if($p === 'jeux'){
    include('./pages/liste_jeux.php');
}
if($p === 'nouveau'){
    include('./pages/ajout_game.php');
}
if($p === 'recherche'){
  include('./pages/recherche.php');
}
$content = ob_get_clean();
include('./pages/templates/default.php');
?>