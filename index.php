<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Esercizio 2 php</title>
  </head>
  <body>
    <?php
      $password = $_GET['password'];

      if(strlen($password) > 0){

        if($password == 'Boolean'){ ?>
          <h1 class="green">La password inserita è corretta</h1>;
          <?php } else { ?>
          <h1 class="red">La password inserita è errata</h1>;
        <?php }
      }
      else { ?>
        <h1>Inserisci una password!</h1>
      <?php } ?>
  </body>
</html>
