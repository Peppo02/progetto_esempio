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
    <h2>Gestione di ASL</h2>

    <!-- Navigator -->
    <?php require_once('../views/navigator.php'); ?>
  </header>
  <!-- Se non sei admin -->
  <?php
  session_start();
  if ($_SESSION['is_admin'] == false) {
    header("refresh:0; url = ../index.html");
  }
  ?>
  <?php require_once('../views/elenco_headquarter.php'); ?>
  <br><br>
  <!-- Form registra headquarter -->
  <?php require_once('../views/form_aggiungi_headquarter.php'); ?>

</body>
</html>