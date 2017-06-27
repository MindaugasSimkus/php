<?php 
  require "homework3functions.php";
  //include "functions.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Troskinys
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      th, td {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Gaminame jautienos troskinį!</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

            <?php 
            $troskinio_sudetis = [
            "Jautiena" => 250,
            "Pupelės" => 500,
            "Vanduo" => 500,
            "Pomidorai" => 300,
            "Paprika" => 100,
            "Druska" => 5,
            "Sviestas" => 100,
            "Pipirai" => 5,
            "Zolelės" => 20,
            "Bulvės" => 300,
            ];       
            //funkcijos
            ingridientu_lentele($troskinio_sudetis);
            recepto_aprasymas($troskinio_sudetis);
            protuktu_svoris($troskinio_sudetis);
            vandens_pupeliu_santykis($troskinio_sudetis);
            ?>

        </div>
      </div>
    </div>
  </body>
</html>