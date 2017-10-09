<h1>Clients</h1>

<?php
foreach ($show_info as $key => $resultat) {
?>

<ul>
  <li><em>Nom :</em> <?php echo $resultat['lastName']; ?><br><em>Prénom :</em>  <?php echo $resultat['firstName']; ?><br><em>Date de naissance :</em> <?php echo $resultat['birthDate']; ?>
<br><em>Carte de fidélité :</em> <?php echo $resultat['card']; ?><br><em>Numéro de carte :</em> <?php echo $resultat['cardNumber']; ?></li>
</ul>

<?php
}
 ?>

 <h1>Show Types</h1>

 <?php
 foreach ($show_type as $key => $resultat) {
 ?>

 <ul>
   <li><?php echo $resultat['type']; ?></li>
 </ul>

 <?php
 }
  ?>

  <h1>Shows Infos</h1>

  <?php
  foreach ($show_shows as $key => $resultat) {
  ?>

    <p><em>Spectacle</em> <?php echo $resultat['title']; ?> <em>par</em> <?php echo $resultat['performer']; ?> <em>le</em> <?php echo $resultat['date']; ?> <em>à</em> <?php echo $resultat['startTime']; ?></p><br>

  <?php
  }
   ?>
