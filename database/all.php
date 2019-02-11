<?php

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);


  if ($conn->connect_error)
  {
    echo 'errore' . $conn->connect_error;
    die();
  }

  $sql = 'SELECT * FROM `ospiti`';


  $result = $conn->query($sql);

  $ospiti = [];

  if ($result->num_rows > 0)
  {


    while ($row = $result->fetch_assoc()) {
      $ospiti[] = $row;
    }
  }

  echo json_encode($ospiti);

  $conn->close();
?>
