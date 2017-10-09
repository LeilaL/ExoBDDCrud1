<?php
require_once("db.php");

function showClients() {
  $bdd = get_dataBase();
    $donnees = $bdd->prepare('SELECT * FROM clients');
    $donnees->execute();
    $resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
}



 ?>
