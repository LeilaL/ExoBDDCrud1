<?php
  // DataBase
  function get_dataBase() {
  try {
      $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'leilalababsa');
  } catch (Exception $e) {
      die('Error : '.$e->getMessage());
  }
  return $bdd;
}
?>
