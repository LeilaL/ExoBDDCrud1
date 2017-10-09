<?php
  require ('../model/data.php');

$show_info = showClients();

$show_type = showType();


  include ('../view/indexView.php');
?>
