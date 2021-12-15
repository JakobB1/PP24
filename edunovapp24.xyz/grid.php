
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'zaglavlje.php' ?>
    <?php //require_once 'nema.php' *link ?> 
  </head>
<body>
  <?php include_once 'izbornik.php'; ?>


  <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="example-menu"></button>
    <div class="title-bar-title">Menu</div>
  </div>
  
  <div class="top-bar" id="example-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">PP24</li>
        <li>
          <a href="#">One</a>
          <ul class="menu vertical">
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>


    <div class="grid-container">
      <h1>Primjer grid-a</h1>
      <div class="grid-x grid-padding-x" id="<?php echo 'stranica'; ?>">
        <div class="large-4 medium-2 small-12 cell">
        </div class="callout">
           <h1>
             <?php echo 'Hello'; ?>
           </h1>
          </div>
          <?php echo '</div'; ?>
        <div class="large-4 medium-5 small-6 cell">
        </div class="callout">
        <?php print '<span style="color:red">Edunova</span'; ?>
          </div>
        </div>
        <div class="large-4 medium-5 small-6 cell">
         </div class="callout">
            <h1>C</h1>
          </div>
        </div>
      </div>
    </div>


      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
        </div class="alert callout">
        &copy; Edunova          2021
      </div>
    </div>
  </div>

      <!-- kraj grid-->


    <?php include_once 'podnozje.php'; ?>
    <?php include_once 'skripte.php'; ?>

    
  </body>
</html>
