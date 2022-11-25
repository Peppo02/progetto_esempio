<!doctype html>
<html>

<head>
  <title>Ricerca prenotazione</title>

  <link rel="stylesheet" type="text/css" href="../style/overview.css">
  <link rel="stylesheet" type="text/css" href="../style/default.css">
  <link rel="stylesheet" type="text/css" href="../style/index.css">
  <link rel="stylesheet" type="text/css" href="../style/responsive.css">
  <link rel="stylesheet" type="text/css" href="../style/navigator.css">
  <link rel="stylesheet" type="text/css" href="../style/admin_panel.css">
</head>

<body>
  <header>
    <h1>Ricerca Prenotazioni</h1>
    <!-- Navigator -->
    <nav>
      <ul>
        <li><a href="../admin/overview.php">Calendario</a></li>
        <li><a href="../admin/gestione_utenti.php">Gestione Utenti</a></li>
        <li><a href="../admin/admin_panel.php">Gestione Prenotazioni</a></li>
      </ul>
    </nav>
  </header>
  <section>
    <table>
      <tr>
        <th>Email</th>
        <th>Attenting Email</th>
        <th>Data</th>
        <th>Ora</th>
        <th>Esito</th>
        <th>Svolta</th>
        <th>Assente</th>
        <th>Accettata</th>
      </tr>

      <?php
      require("dbconnect.php");
      $email = isset($_POST['email']) ? $_POST['email'] : "";
      $s_email = isset($_POST['s_email']) ? $_POST['s_email'] : "";
      $name = isset($_POST['first']) ? $_POST['first'] : "";
      $surname = isset($_POST['surname']) ? $_POST['surname'] : "";
      $data = isset($_POST['data']) ? $_POST['data'] : "";
      $hq_code = isset($_POST['hq_code']) ? $_POST['hq_code'] : "";
      $sql_query =
        "SELECT planned_drive.email, details, _date, _time, done, absent, accepted, s_email
					FROM customer, planned_drive 
					WHERE
					customer.email = planned_drive.email
					AND (customer.email = '$email'
            OR s_email = '$s_email'
						OR name = '$name'
						OR surname = '$surname'
						OR _date = '$data'
            OR hq_code = '$hq_code')
					ORDER BY _time;";

      $sql_query_output = $dbConnection->query($sql_query);

      if ($sql_query_output != null) {
        while ($row = mysqli_fetch_object($sql_query_output)) {
          echo "<tr>";
          echo "<td> $row->email </td>";
          echo "<td> $row->s_email </td>";
          echo "<td> $row->_date </td>";
          echo "<td> $row->_time </td>";
          echo "<td> $row->details </td>";
          $row->done = $row->done == 1 ? 'si' : 'no';
          $row->absent = $row->absent == 1 ? 'si' : 'no';
          $row->accepted = $row->accepted == 1 ? 'si' : 'no';
          echo "<td style='text-align: center'> $row->done</td>";
          echo "<td style='text-align: center'> $row->absent </td>";
          echo "<td style='text-align: center'> $row->accepted </td>";
          echo "</tr>";
        }
      } else
        echo "error";
      ?>
    </table>
  </section>
</body>

</html>