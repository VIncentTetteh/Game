<?php
    $noun = $_POST['noun'];
    $pronoun = $_POST['pronoun'];
    $color = $_POST['color'];
    $celebrety = $_POST['celebrety'];

    if(isset($_POST['submit'])){
      echo "
        <p>$noun is an angel.<br> $pronoun is GOD given.<br>$color is your favorite color.
        <br>$celebrety is your NO.1 star in the world. </p>
      ";
    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Game</title>
  </head>
  <body>
    <header>
      <h2>Mild Game</h2>
    </header>
    <main>
      <section>
        <form class="form-item" action="index.php" method="post">
          <input class="input-item" type="text" name="noun" value="" placeholder="enter a noun" required>
          <input class="input-item" type="text" name="pronoun" value="" placeholder="enter a pronoun" required>
          <input class="input-item" type="text" name="color" value="" placeholder="enter a color" required>
          <input class="input-item" type="text" name="celebrety" value="" placeholder="enter a celebrety" required>
          <input type="submit" name="submit" value="Play">

        </form>
      </section>
    </main>
  </body>
</html>
