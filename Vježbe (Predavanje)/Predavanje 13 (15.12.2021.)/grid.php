
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'zaglavlje.php'; ?>
    <?php //require_once 'nema.php'  https://www.geeksforgeeks.org/difference-between-require-and-include-in-php/ ?>
  </head>
<body>
  <?php include_once 'izbornik.php'; ?>

  

    <!-- početak grid -->
    <div class="grid-container">
      <h1>Primjer grid-a</h1>           <!-- Primjer dobre prakse korištenja PHP-a unutar HTML-a -->
      <div class="grid-x grid-padding-x" id="<?php echo 'stranica'; ?>">
        <div class="large-4 medium-2 small-12 cell">
          <div class="callout">
            <h1>
              <!-- Primjer dobre prakse korištenja PHP-a unutar HTML-a -->
              <?php echo 'Hello'; 
              
              
              
              
              
              
              
              ?>
            </h1>
          </div>
          <!-- Primjer LOŠE prakse korištenja PHP-a unutar HTML-a -->
        <?php echo '</div>'; ?>
        <div class="large-4 medium-5 small-6 cell">
          <div class="callout">
            <?php print '<span style="color: red">Edunova</span>'; ?>
          </div>
        </div>
        <div class="large-4 medium-5 small-6 cell">
          <div class="callout">
            <h1>C</h1>
              <!-- Primjer LOŠE prakse korištenja PHP-a unutar HTML-a -->
          </div<?php echo '>'; ?>
        </div>
      </div>
    </div>
    <!-- kraj grid -->

    <?php include_once 'podnozje.php'; ?>
    <?php include_once 'skripte.php'; ?>
  </body>
</html>
