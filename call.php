<?php
  include_once -_DIR__.'/../partials/db.php';


  header('Content-Type: application/json');

  echo json_encode(
    [
      "response" => $database,
      "success" => true ,
    ]
  );

?>
