<?php
require 'Functions.php';
require 'Programators/Objekty/DvourozmerneObjekty/DvourozmernyObrazec.php';
require 'Programators/Objekty/DvourozmerneObjekty/Obdelnik.php';
require 'Programators/Objekty/DvourozmerneObjekty/Kruh.php';
require 'Programators/Objekty/DvourozmerneObjekty/Ctverec.php';
require 'Programators/Objekty/DvourozmerneObjekty/Mnohouhelnik.php';
require 'Programators/Objekty/DvourozmerneObjekty/Sedmiuhelnik.php';
require 'Programators/Objekty/TrojrozmerneObjekty/TrojrozmernyObrazec.php';
require 'Programators/Objekty/TrojrozmerneObjekty/Kvadr.php';
require 'Programators/Objekty/TrojrozmerneObjekty/Krychle.php';
require 'Programators/User.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Hello, world!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <?php
        $obdelnik = new Obdelnik(5, 7);
        $kruh = new Kruh(5);
        $ctverec = new Ctverec(6);
      $mnohouhelnik = new Mnohouhelnik(1,5);
     $sedmiuhelnik = new Sedmiuhelnik(1);
      $kvadr = new Kvadr(2,5,9);
      $krychle = new Krychle(5);
    $userMartin = new User("Martin","Pavlas");
      ?>

      <div class="container">
        <h1>Obdelník</h1>
        <table class="table">
          <tr>
            <th>Strana A</th>
            <td><?=$obdelnik->ziskejStranuA()?></td>
          </tr>
          <tr>
            <th>Strana B</th>
            <td><?=$obdelnik->ziskejStranuB()?></td>
          </tr>
          <tr>
            <th>Obsah</th>
            <td><?=vypisObsah($obdelnik)?></td>
          </tr>
          <tr>
            <th>Obvod</th>
            <td><?=vypisObvod($obdelnik)?></td>
          </tr>
        </table>
        
        <h1>Kruh</h1>
        <table class="table">
          <tr>
            <th>Poloměr</th>
            <td><?=$kruh->getRadius()?></td>
          </tr>
          <tr>
            <th>Obsah</th>
            <td><?=vypisObsah($kruh)?></td>
          </tr>
          <tr>
            <th>Obvod</th>
            <td><?=vypisObvod($kruh)?></td>
          </tr>
        </table>
        
        <h1>Čtverec</h1>
        <table class="table">
          <tr>
            <th>Strana A</th>
            <td><?=$ctverec->ziskejStranuA()?></td>
          </tr>
          <tr>
            <th>Strana B</th>
            <td><?=$ctverec->ziskejStranuB()?></td>
          </tr>
          <tr>
            <th>Obsah</th>
            <td><?=vypisObsah($ctverec)?></td>
          </tr>
          <tr>
            <th>Obvod</th>
            <td><?=vypisObvod($ctverec)?></td>
          </tr>
        </table>
        
        <h1>Mnohoúhelník</h1>
        <table class="table">
          <tr>
            <th>Délka strany</th>
            <td><?=$mnohouhelnik->ziskejDelkuStrany()?></td>
          </tr>
          <tr>
            <th>Pocet uhlu</th>
            <td><?=$mnohouhelnik->ziskejPocetUhlu()?></td>
          </tr>
          <tr>
            <th>Obsah</th>
            <td><?=vypisObsah($mnohouhelnik)?></td>
          </tr>
          <tr>
            <th>Obvod</th>
            <td><?=vypisObvod($mnohouhelnik)?></td>
          </tr>
        </table>
        
        <h1>Sedmiúhelník</h1>
        <table class="table">
          <tr>
            <th>Délka strany</th>
            <td><?=$sedmiuhelnik->ziskejDelkuStrany()?></td>
          </tr>
          <tr>
            <th>Pocet uhlu</th>
            <td><?=$sedmiuhelnik->ziskejPocetUhlu()?></td>
          </tr>
          <tr>
            <th>Obsah</th>
            <td><?=vypisObsah($sedmiuhelnik)?></td>
          </tr>
          <tr>
            <th>Obvod</th>
            <td><?=vypisObvod($sedmiuhelnik)?></td>
          </tr>
        </table>
        
        <h1>Kvadr</h1>
        <table class="table">
          <tr>
            <th>Strana A</th>
            <td><?=$kvadr->ziskejStranuA()?></td>
          </tr>
          <tr>
            <th>Strana B</th>
            <td><?=$kvadr->ziskejStranuB()?></td>
          </tr>
          <tr>
            <th>Strana C</th>
            <td><?=$kvadr->ziskejStranuC()?></td>
          </tr>
          <tr>
            <th>Objem</th>
            <td><?=vypisObjem($kvadr)?></td>
          </tr>
          <tr>
            <th>Povrch</th>
            <td><?=vypisPovrch($kvadr)?></td>
          </tr>
        </table>
        
         <h1>Krychle</h1>
        <table class="table">
          <tr>
            <th>Strana A</th>
            <td><?=$krychle->ziskejStranuA()?></td>
          </tr>
          <tr>
            <th>Strana B</th>
            <td><?=$krychle->ziskejStranuB()?></td>
          </tr>
          <tr>
            <th>Strana C</th>
            <td><?=$krychle->ziskejStranuC()?></td>
          </tr>
          <tr>
            <th>Objem</th>
            <td><?=vypisObjem($krychle)?></td>
          </tr>
          <tr>
            <th>Povrch</th>
            <td><?=vypisPovrch($krychle)?></td>
          </tr>
        </table>
        
        <h1><?=info($userMartin)?></h1>
        <?php var_dump($userMartin);?>
      </div>

    </main>

    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
