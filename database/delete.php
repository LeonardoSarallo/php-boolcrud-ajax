<?php


  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);


  if ($conn->connect_error)
  {
    echo 'errore';
    die();
  }


  $id =$_POST['id'];

  if (empty($id))
  {
    echo 'errore';
    die();
  }

  $sql = "DELETE FROM `ospiti` WHERE `id` = $id;";
  $result = $conn->query($sql);

  if ($result)
  {
    echo 'success';
  }
  else {
    echo 'errore';
  }
  $conn->close();


?>
