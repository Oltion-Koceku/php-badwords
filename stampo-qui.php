<?php

  $name = $_GET["nome"];
  $replace = $_GET['replace'];
  $nome_senza_replace = str_replace($replace, 'Censura', $name);
  echo var_dump( $replace );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php   echo $name ?></h1>
  <h1><?php   echo $nome_senza_replace ?></h1>
</body>
</html>