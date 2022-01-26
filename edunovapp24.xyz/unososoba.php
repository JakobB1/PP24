<?php 
session_start();
if(!isset($_SESSION['podaci'])){
  $_SESSION['podaci'] = [];
}

if(isset($_POST['ime']) 
  && isset($_POST['prezime']) 
  && count($_POST)===2){
    $_SESSION['podaci'][]=$_POST;
}

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
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
              <div class="grid-x grid-padding-x">
                <div class="large-5 small-12 cell">
                  <label for="ime">Ime</label>
                  <input type="text" name="ime" id="ime" />
                </div>
                <div class="large-5 small-6 cell">
                  <label for="prezime">Prezme</label>
                  <input type="text" name="prezime" id="prezime" />
                </div>
                <div class="large-2 small-6 cell" style="padding: 25px;">
                  <input type="submit" value="Unesi" class="button" />
                </div>
              </div>
            </form>
            <ol>
              <?php foreach($_SESSION['podaci'] as $p): ?>
                <li><?php echo $p['ime'] . ' ' . $p['prezime'] ?></li>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <?php include_once 'podnozje.php'; ?>
    <?php include_once 'skripte.php'; ?>
  </body>
</html>
