<?php

echo yeah($_POST['email']);

function yeah($email) {

  $file = fopen('bdd.csv', 'r');
  $array = array();
  $removed = false;
  while (($line = fgetcsv($file)) !== FALSE) {
    if ($line[0]!=$email) {
      array_push($array, $line[0]);
    } else {
      $removed = true;
    }
  }
  fclose($file);

  if ($removed) {
    $fp = fopen('bdd.csv', 'w');
    foreach ($array as $fields) {
      $a = array($fields);
      fputcsv($fp, $a);
    }
    fclose($fp);
    header('location:/index.php?status=success');
    return;
  }
  header('location:/index.php?status=nomail');
}

?>
