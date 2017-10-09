<h1>Clients</h1>

<?php
foreach ($show_info as $key => $resultat) {
?>

<ul>
  <li>Nom : <em><?php echo $resultat['lastName']; ?></em><br>Prénom : <em><?php echo $resultat['firstName']; ?></em></li>
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
