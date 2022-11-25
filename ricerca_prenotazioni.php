<section id="ricerca-prenotazioni">
  <div class="wrapper">
    <h2> Ricerca prenotazioni </h2>
    <br>
    <form action="../backend/ricerca_prenotazione.php" method="post">
      <span>EMAIL</span><br>
      <input name='email' type="text" placeholder="email" />
      <br>

      <span>FIRST NAME</span><br>
      <input name='first' type="text" placeholder="Nome" />
      <br>

      <span>SURNAME</span><br>
      <input name='surname' type="text" placeholder="Cognome" />
      <br>

      <span>DATA</span><br>
      <input type='date' name='data' />
      <br>

      <span>CODICE ASL</span><br>
      <input type='number' name='hq_code' />
      <br>

      <input class="button" type="submit" value="Cerca">
    </form>
  </div>
</section>