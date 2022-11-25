<section id="aggiungi-prenotazione">
  <div class="wrapper">
    <h2> Aggiungi prenotazione </h2>
    <br>

    <form action="../backend/aggiungi_prenotazione.php" method="post">
      <span>EMAIL</span><br>
      <input type="text" name="email" placeholder="nome utente" />
      <br>

      <span>DATA</span><br>
      <input type='date' name='date' />
      <br>

      <span>ORA</span><br>
      <input type="time" name="time" step=1800 min=8:00 max=20:00 />
      <br>

      <span>ATTENDING</span><br>
      <input type="email" name="s_email" />
      <br>

      <span>CODICE ASL</span><br>
      <input type="number" name="hq_code" />
      <br>
      
      <input class="button" type="submit" value="Aggiungi">
    </form>
  </div>
</section>