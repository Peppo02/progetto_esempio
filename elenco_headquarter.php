<section id="prenotazioni-da-accettare">
  <div class="wrapper">
    <h2>ELENCO ASL</h2><br>
    <table>
      <tr>
        <th>Codice</th>
        <th>Telefono</th>
        <th>Provincia</th>
        <th>Indirizzo</th>
      </tr>

      <?php
      require("../backend/dbconnect.php");
      global $dbConnection;
      $sql_query =
        "SELECT * FROM headquarter";

      $sql_query_output = $dbConnection->query($sql_query);
      if ($sql_query_output) {
        while ($row = mysqli_fetch_object($sql_query_output)) {
          echo "<tr>";
          echo "<td> $row->code </td>";
          echo "<td> $row->phone </td>";
          echo "<td> $row->city </td>";
          echo "<td> $row->address </td>";
          echo "</tr>";
        }
      }
      ?>
    </table>
  </div>
</section>