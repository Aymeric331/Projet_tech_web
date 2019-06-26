<?php 
if(isset($_POST) && !empty($_POST)) {
    $sql = 'INSERT INTO user (sexe, nom, email) VALUES ("'.$_POST['nom'].'","'.$_POST['sexe'].'", "'.$_POST['email'].'")';
    $sql = ''
execute($sql);
}

function execute($insertinto)
{
  $user = "root";
  $password = "";
  $db = "web_bdd";
  $host = "localhost";
  $port = 3308;

  $link = mysqli_init();
  $success = mysqli_real_connect($link,$host,$user,$password,$db,$port);

  $response = mysqli_query($link,$insertinto) or die ('Erreur : '.mysqli_error($link));
  mysqli_close($link);

  return $response;
}
?>