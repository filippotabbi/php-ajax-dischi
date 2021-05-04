<?php
  include_once __DIR__.'./partials/db.php';


  header('Content-Type: application/json');
  

  echo json_encode($database);

?>
