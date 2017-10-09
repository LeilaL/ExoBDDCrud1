<?php
  require ('../model/data.php');


$show_info = showClients();

$show_type = showType();

$show_shows = shows();

  include ('../view/indexView.php');
?>
