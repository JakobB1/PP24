<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'zaglavlje.php'; ?>
  </head>
<body>
  <?php include_once 'izbornik.php'; ?>
    <div class="grid-container">
      <div class="grid-x grid-padding-x" id="stranica">
        <div class="large-12 cell">
          <div class="callout" style="background-color:<?php echo $_GET['boja']; ?>">
            <h1>
             U adresnu liniju dodaj ?tekst=Osijek
            </h1>
            <?php echo $_GET['tekst']; ?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once 'podnozje.php'; ?>
    <?php include_once 'skripte.php'; ?>
  </body>
</html>
