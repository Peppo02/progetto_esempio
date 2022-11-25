<!DOCTYPE html>

<html>

<head>
  <title>Le mie prenotazioni</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" type="text/css" href="../style/default.css">
  <link rel="stylesheet" type="text/css" href="../style/overview.css">
  <link rel="stylesheet" type="text/css" href="../style/responsive.css">
</head>

<body>
  <header>
    <?php
    session_start();
    echo "<h1> Benvenuto " . $_SESSION['name'] . "!</h1>";
    ?>
    <h2> Le tue prenotazioni </h2>
  </header>

  <section id="prenotazioni-utente">
    <div class="wrapper">
      <table>
        <tr>
          <th>Data</th>
          <th>Orario</th>
          <th>Accettata</th>
        </tr>
        <?php
        require("../backend/dbconnect.php");
        global $dbConnection;

        $sql_query =
          "SELECT _date, _time, accepted
                    FROM planned_drive 
                    WHERE email=\"" . $_SESSION['email'] . "\"
                    AND _time BETWEEN '08:00:00' AND '21:00:00'
                    AND done = false
                    AND absent = false
                    ORDER BY _time;";

        $sql_query_output = $dbConnection->query($sql_query);

        if ($sql_query_output != null) {
          while ($row = mysqli_fetch_array($sql_query_output)) {
            $row[2] = $row[2] == 1 ? "si" : "no";
            echo "<tr>";
            echo "<td> $row[0] </td>" . "<td> $row[1] </td>" . "<td style='text-align: center'> $row[2] </td>";
            echo "</tr>";
          }
        }
        ?>
      </table>
    </div>
  </section>

  <br>

  <section id="richiedi-prenotazione">
    <div class="wrapper">
      <h2> Richiedi prenotazione </h2>
      <br>

      <form action="../backend/aggiungi_prenotazione_ui.php" method="post">
        <span>DATA</span><br>
        <input type='date' name='date' />
        <br>

        <span>ORA</span><br>
        <input type="time" name="time" step=1800 min=8:00 max=20:00 />
        <br>

        <span>EMAIL MEDICO</span><br>
        <input type="email" name="s_email" />
        <br>

        <span>CODICE ASL</span><br>
        <input type="number" name="hq_code" />
        <br>

        <input class="button" type="submit" value="Richiedi">
      </form>
    </div>
  </section>
</body>

</html>