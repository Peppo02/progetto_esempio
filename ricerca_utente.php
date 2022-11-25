<section id="ricerca-utente">
  <div class="wrapper">
    <h2> Ricerca utente </h2>
    <br>

    <form action="../backend/ricerca_utente.php" method='post'>
      <span>USERNAME</span><br>
      <input type="text" name="username" placeholder="nome utente" />
      <br>

      <span>NOME</span><br>
      <input type="text" name="name" placeholder="nome di persona" />
      <br>

      <span>COGNOME</span><br>
      <input type="text" name="surname" placeholder="cognome" />
      <br>

      
      <span>E-MAIL</span><br>
      <input type="email" name="email" placeholder="email@example.com" />
      <br>
      
      <span>TELEFONO</span><br>
      <input type="tel" name="tel" placeholder="333-3333333" />
      <br>
      
      <span class="hidden">PASSWORD</span><br>
      <input class="hidden" type="password" name="password" placeholder="password" />
      <br>

      <input class="button" type="submit" value="Cerca">
    </form>
  </div>
</section>