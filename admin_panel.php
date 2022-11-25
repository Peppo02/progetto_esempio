<html>

<head>
  <title>Administration panel</title>
  <meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../style/default.css">
  <link rel="stylesheet" type="text/css" href="../style/navigator.css">
  <link rel="stylesheet" type="text/css" href="../style/admin_panel.css">
  <link rel="stylesheet" type="text/css" href="../style/overview.css">
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <header>
    <h1>Pannello di amministratore</h1>
    <h2>Gestione di utenti e prenotazioni</h2>

    <!-- Navigator -->
    <?php require('../views/navigator.php'); ?>
  </header>
  <!-- Se non sei admin -->
  <?php
  session_start();
  if ($_SESSION['is_admin'] == false) {
    header("refresh:0; url = ../index.html");
  }
  ?>

  <!-- Form prenotazioni da autenticare -->
  <?php require('../views/prenotazioni_da_autenticare.php'); ?>
  </br>

  <!-- Form Aggiungi prenotazione -->
  <?php require('../views/form_aggiungi_prenotazione.php'); ?>
  </br>
</body>

</html>