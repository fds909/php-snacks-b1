<?php
  /*
  ## Snack 7
    Creare un array contenente qualche alunno di un’ipotetica classe.
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
  */

  $classe = [
    [
      'nome' => 'Massimo',
      'cognome' => 'Pericolo',
      'voti' => [5, 7, 4, 9, 6]
    ],
    [
      'nome' => 'Carlo',
      'cognome' => 'Rossi',
      'voti' => [7, 5, 5, 7, 6]
    ],
    [
      'nome' => 'Mattia',
      'cognome' => 'Bianchi',
      'voti' => [9, 6, 4, 9, 9]
    ]
  ];

  function media($voti) {
    $somma = 0;

    for ($i = 0; $i < count($voti); $i++) {
      $somma += $voti[$i];
    }

    $media = $somma / count($voti);

    return $media;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
  <h1>Media voti classe</h1>
  <?php
    for ($i = 0; $i < count($classe); $i++) {
      echo "<ul>";
      echo "<li>Nome: ".$classe[$i]['nome']."</li>";
      echo "<li>Cognome: ".$classe[$i]['cognome']."</li>";
      echo "<li>Media voti: " . media($classe[$i]['voti']) . "</li>";
      echo "</ul>";
    }
  ?>
</body>
</html>