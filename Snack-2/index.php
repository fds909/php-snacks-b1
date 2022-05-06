<?php
  /*
    ## Snack 2
    Passare come parametri GET name, mail e age e verificare
    (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
  */

  function isValidMail($mail) {
    return (strpos($mail, "@") !== false && strpos($mail, ".") !== false);
  }

  $name = ( !empty($_GET['name']) ) ? $_GET['name'] : '';
  $mail = ( !empty($_GET['mail']) ) ? $_GET['mail'] : '';
  $age = ( !empty($_GET['age']) ) ? $_GET['age'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  <form method="GET">
    <div>
      <label for="">Name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">Email</label>
      <input type="text" name="mail">
    </div>
    <div>
      <label for="">Age</label>
      <input type="text" name="age">
    </div>
    <div>
      <input type="submit">
    </div>
  </form>
  <?php
    if ( strlen($name) > 3 && isValidMail($mail) && is_numeric($age) ) {
      echo "<p>Accesso riuscito</p>";
    } else {
      echo "<p>Accesso negato</p>";
    }
  ?>
</body>
</html>