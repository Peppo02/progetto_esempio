<section id="prenotazioni-da-accettare">
  <div class="wrapper">
    <h2>Prenotazioni da accettare</h2><br>
    <table>
      <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Data</th>
        <th>Orario</th>
        <th>Attending</th>
        <th>Accetta</th>
        <th>Rifiuta</th>
      </tr>

      <?php
      require("../backend/dbconnect.php");
      global $dbConnection;
      $sql_query =
        "SELECT *
            FROM customer, planned_drive 
            WHERE customer.email = planned_drive.email 
            AND _time BETWEEN '08:00:00' AND '21:00:00'
            AND accepted = false
            ORDER BY _time;";

      $sql_query_output = $dbConnection->query($sql_query);
      if ($sql_query_output) {
        while ($row = mysqli_fetch_object($sql_query_output)) {
          echo "<tr>";
          echo "<td> $row->name </td>";
          echo "<td> $row->surname </td>";
          echo "<td> $row->_date </td>";
          echo "<td> $row->_time </td>";
          echo "<td> $row->s_email </td>";
          echo "<td class='check'><a href='../backend/accetta_prenotazione.php?id=$row->id'>V</a></td>";
          echo "<td class='check'><a href='../backend/rifiuta_prenotazione.php?id=$row->id'>X</a></td>";
          echo "</tr>";
        }
      }
      ?>
    </table>
  </div>
</section>