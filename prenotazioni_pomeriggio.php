<section id="prenotazioni-pomeriggio">
  <div class="wrapper">
    <h2>Prenotazioni pomeridiane</h2><br>
    <table>
      <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Orario</th>
        <th>ASL</th>
        <th>Svolta</th>
        <th>Assente</th>
      </tr>

      <?php
      $sql_query =
        "SELECT name, surname, _time, hq_code, planned_drive.id
                    FROM customer, planned_drive 
                    WHERE _date = curdate() 
                    AND customer.email = planned_drive.email 
                    AND _time BETWEEN '15:00:00' AND '21:00:00'
                    AND accepted = true
                    AND done = false
                    AND absent = false
                    ORDER BY _time;";

      $sql_query_output = $dbConnection->query($sql_query);

      if ($sql_query_output != null) {
        while ($row = mysqli_fetch_object($sql_query_output)) {
          echo "<tr>";
          echo "<td> $row->name </td>";
          echo "<td> $row->surname </td>";
          echo "<td> $row->_time </td>";
          echo "<td> $row->hq_code </td>";
          echo "<td class='check'><a onclick=\"askContinue($row->id)\">V</a></td>";
          echo "<td class='check'><a href='../backend/assente_prenotazione.php?id=$row->id'>X</a></td>";
          echo "</tr>";
        }
      }
      ?>

    </table>
  </div>
</section>