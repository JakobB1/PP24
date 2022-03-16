<?php 

$vrsta = isset($_POST['vrsta']) ? $_POST['vrsta'] : '0';
$jelo = isset($_POST['jelo']) ? $_POST['jelo'] : [];
$spol = isset($_POST['spol']) ? $_POST['spol'] : 'N';

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
            <form action="" method="post">
              <fieldset>
                <legend>Unosni podaci</legend>

                <label for="vrsta">Vrsta</label>
                <select name="vrsta" id="vrsta">
                  <option value="1">Prvi</option>
                  <option value="2">Drugi</option>
                </select>

                Omiljeno jelo <br />
                <input type="checkbox" name="jelo[]" id="juha" value="1" />
                <label for="juha">Juha</label>
                
                <input type="checkbox" name="jelo[]" id="meso" value="2" />
                <label for="meso">Meso</label>

                <hr />

                Spol<br />
                <input type="radio" name="spol" id="musko" value="M" />
                <label for="musko">Muško</label>

                <input type="radio" name="spol" id="zensko" value="Z" />
                <label for="zensko">Žensko</label>

              <hr />
                <input type="submit" class="button" value="Prijavi se">

              </fieldset>
            </form>
            <?php echo $vrsta ?>
            <ul>
              <?php for($i=0;$i<count($jelo);$i++): ?>
                <li><?php echo $jelo[$i];?></li>
              <?php endfor; ?>
            </ul>
            <?php echo $spol ?>
            <pre>
              <?php print_r($_POST); ?>
            </pre>
          </div>
        </div>
      </div>
    </div>
    <?php include_once 'podnozje.php'; ?>
    <?php include_once 'skripte.php'; ?>
  </body>
</html>
