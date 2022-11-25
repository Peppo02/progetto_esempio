<section id="aggiungi-prenotazione">
  <div class="wrapper">
    <h2> Aggiungi ASL </h2>
    <br>

    <form action="../backend/aggiungi_headquarter.php" method="post">
      <span>CODICE</span><br>
      <input type="text" name="code" placeholder="codice" />
      <br>

      <span>TELEFONO</span><br>
      <input type='tel' name='phone' placeholder="telefono"/>
      <br>

      <span>INDIRIZZO</span><br>
      <input type="text" name="address" placeholder="indirizzo"/>
      <br>

      <span>PROVINCIA</span><br>
      <input type="text" name="city" placeholder="provincia"/>
      <br>
      
      <input class="button" type="submit" value="Aggiungi">
    </form>
  </div>
</section>