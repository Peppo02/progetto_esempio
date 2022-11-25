<!DOCTYPE html>

<html>

<head>
  <title>Tabella degli orari</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../style/navigator.css">
  <link rel="stylesheet" type="text/css" href="../style/default.css">
  <link rel="stylesheet" type="text/css" href="../style/overview.css">
  <?php
  require("../backend/dbconnect.php");
  global $dbConnection;
  ?>
</head>

<body>
  <header>
    <h1>Calendario Prenotazioni</h1>
    <h2><?php echo date("d/m/y"); ?></h2>

    <!-- Navigator -->
    <?php require('../views/navigator.php'); ?>
  </header>
  <!-- Tabella Prenotazioni mattina -->
  <?php require('../views/prenotazioni_mattina.php'); ?>

  <!-- Tabella Prenotazioni pomeriggio -->
  <?php require('../views/prenotazioni_pomeriggio.php'); ?>
  <br>
  <!-- Form ricerca Prenotazioni -->
  <?php require('../views/ricerca_prenotazioni.php'); ?>


  <script>
    function askContinue(id) {
      const details = prompt("Diagnosi: ");
      window.location.replace(
        `../backend/prenotazione_svolta.php?id=${id}&details=${details}` 
      );
    }
  </script>
</body>

</html>