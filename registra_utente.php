<section id="registra-utente">
  <div class="wrapper">
    <h2> Registra utente </h2>
    <br>

    <form action="../backend/register.php" method="post">
      <span>USERNAME</span><br>
      <input type="text" name="username" placeholder="nome utente" />
      <br>

      <span>NOME</span><br>
      <input type="text" name="name" placeholder="nome di persona" />
      <br>

      <span>COGNOME</span><br>
      <input type="text" name="surname" placeholder="cognome" />
      <br>

      <span>PASSWORD</span><br>
      <input type="password" name="password" placeholder="password" />
      <br>

      <span>E-MAIL</span><br>
      <input type="email" name="email" placeholder="email@example.com" />
      <br>

      <span>TELEFONO</span><br>
      <input type="tel" name="tel" placeholder="333-3333333" />
      <br>

      <input class="button" type="submit" value="Registra">
    </form>
  </div>
</section>