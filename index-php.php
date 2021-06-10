<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
      require_once __DIR__ . "/assets/data/db.php";
    ?>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Album PHP</title>
  </head>

  <body>

    <!--  Stampare a schermo una decina di dischi musicali (vedi screenshot).
          Utilizzare:
          Html, JS, VueJS, PHP
          Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
          Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->    

    <header>
      <div class="logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="spotify-logo">
      </div>
    </header>

    <main>
      <div class="container">
        <?php
          foreach ($database as $album): 
            ?>
              <div class="card flex-basis">
                <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?>">
                <h5><?php echo $album['title'] ?></h5>
                <p><?php echo $album['author'] ?></p>
                <p><?php echo $album['year'] ?></p>
              </div>
            <?php
          endforeach;
        ?>
      </div>
    </main>
   
  </body>

</html>