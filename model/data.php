<?php
require_once("db.php");


// FUNCTION FOR SHOW INFOS CLIENTS
function showClients() {
  $bdd = get_dataBase();
    $donnees = $bdd->prepare("SELECT * FROM clients WHERE lastName LIKE 'M%' AND card=1 ORDER BY lastName LIMIT 0, 20");
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

// FUNCTION FOR SHOW ALL SHOWS
function shows() {
  $bdd = get_dataBase();
    $donnees = $bdd->prepare('SELECT * FROM shows ORDER BY title');
    $donnees->execute();
    $resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
}


 ?>
