<?php
require_once("db.php");


// FUNCTION FOR SHOW INFOS CLIENTS
function showClients() {
  $bdd = get_dataBase();
    $donnees = $bdd->prepare('SELECT * FROM clients WHERE card=1  LIMIT 0, 20');
    $donnees->execute();
    $resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
}

// FUNCTION FOR SHOW ALL SHOW TYPE
function showType() {
  $bdd = get_dataBase();
    $donnees = $bdd->prepare('SELECT * FROM showTypes');
    $donnees->execute();
    $resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
}




 ?>
