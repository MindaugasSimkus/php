<?php 
  require "php_paskaita4functions.php";
  //include "functions.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Troskinys
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      .g {
        background-color: yellow;
        height: 60px;
        width: 60px;
        display:block;
        float:left;
        border: 1px solid grey;
      }
      .z {
        background-color: green;
        height: 60px;
        width: 60px;
        display:block;
        float:left;
        border: 1px solid grey;

      }
      .r {
        background-color: red;
        height: 60px;
        width: 60px;
        display:block;
        float:left;
        border: 1px solid grey;
      } 
      .b {
        background-color: black;
        height: 60px;
        width: 60px;
        display:block;
        float:left;
        border: 1px solid grey;
      }   
      .w {
        background-color: white;
        height: 60px;
        width: 60px;
        display:block;
        float:left;
        border: 1px solid grey;
      }        
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Kažką išmoksime!</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <?php 
          //image

          $image = ["g","g","g","g","g","g","g","g","z","z", "z","z","z","z", "z","z","r","r","r","r","r","r","r","r"];

          $image2 = ["b","w","b","w","b","w","b","w","b"];
          $image3 = ["b","w"];
          
          $hp = 0;
          $hp2 = 0;



          foreach ($image as $element) {
            echo '<div class="' . $element . '">' . $element . '</div>';
            $hp++;
            if ($hp == 8) {
              echo "<br/><br/><br/>";
              $hp = 0;
            }
          }
          foreach ($image2 as $element) {
            echo '<div class="' . $element . '">' . $element . '</div>';
            $hp++;
            if ($hp == 3) {
              echo "<br/><br/><br/>";
              $hp = 0;
            }
          }


          $spalva = "b";
          $spalva2 = "z";

          echo "<br/>Juodu korteliu yra: " . count_cards($image2, $spalva);
          echo "<br/>Zaliu korteliu yra: " . count_cards($image, $spalva2);


          $gerimai = ["Vanduo", "Sultys", "Alus", "Vodka", "Tekila", "Arbata", "Kava"];

          $users = [];

          $user1 = [
            "Name" => "Mindaugas", 
            "Surname" => "Simkus",
            "Age" => 2,
            "Phone" => "8641*1767",
          ];

          $user2 = [
            "Name" => "Petras", 
            "Surname" => "Lopeta",
            "Age" => 16,
            "Phone" => "8681*8867",
          ];

          array_push($users, $user1, $user2);

          $sudetys = [
            "Blynai" => ["Miltai" => 250, "Pienas" => 100, "Druska" => 2],
            "Arbata" => ["Vanduo" => 100, "Arbata" => 100]
          ];

          $sudetys["Blynai"]["Pienas"] = "penki simtai";

          $kava_labai_saldi = ($kava < $cukrus) ? true : false;


          ?>

        </div>
      </div>
    </div>
  </body>
</html>