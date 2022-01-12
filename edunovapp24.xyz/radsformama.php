<?php

$ime=isset($_GET['ime']) ? $_GET['ime'] : '';

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'zaglavlje.php'; ?>
  </head>
<body>
  <?php include_once 'izbornik.php'; ?>
    <div class="grid-container">
      <div class="grid-x grid-padding-x" id="<?php echo 'stranica'; ?>">
        <div class="large-12 cell">
          <div class="callout">
            <form action="" method="get">
            Ime
            <input type="text" name="imess" id="">

            <input type="submit" value="Odradi">
            </form>
            <?php echo $ime;?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once 'podnozje.php'; ?>
    <?php include_once 'skripte.php'; ?>
  </body>
</html>
