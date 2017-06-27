<?php

function ingridientu_lentele($masyvas) { // sudarome ingridientu lentele
  echo "<h3 style='text-align: center'>Ingridientų lentelė</h3><br/><table class = 'talbe table-bordered table-hover'style='width: 50%; margin: 0px auto'><tr><th>Ingridientas</th><th>Kiekis (g)</th></tr>";
  foreach ($masyvas as $ingridientas => $kiekis) {
  echo "<tr><td>" . $ingridientas . "</td><td> " . $kiekis . "</td></tr>";
  }
  echo "</table>";
}
function recepto_aprasymas($masyvas){ // sudarome recepto aprasyma
  echo "<br/><h3>Recepto aprašymas</h3><br/>Iš ingridientų lentelės matome, jog jautienos receptui mums reikės ";
  $raktai = array_keys($masyvas);
  for ($i=0; $i < count($raktai) ; $i++) { 
    if ($i < count($raktai) -2) {
      echo sprintf("%d gramų ingridiento %s taip pat, ", strtolower($masyvas[$raktai[$i]]), strtolower($raktai[$i]));
    } elseif ($i == count($raktai) -2) { // pakeiciam paskutini sakinio jungtika i "ir galiausiai"
      echo sprintf("%d gramų ingridiento %s ir galiausiai ", strtolower($masyvas[$raktai[$i]]), strtolower($raktai[$i]));
    } elseif ($i == count($raktai) -1) {
      echo sprintf("%d gramų ingridiento %s.", strtolower($masyvas[$raktai[$i]]), strtolower($raktai[$i])); // uzbaigiam recepta tasku
    }
  } 

}
function protuktu_svoris($masyvas) { // skaiciuoam produktu svori
  $svoris = 0;
  $raktai = array_keys($masyvas);
  for ($i=0; $i < count($raktai) ; $i++) { 
    $svoris += $masyvas[$raktai[$i]];
  }
  echo "<br/><br/>Visi patiekalo produktai sveria " . $svoris . " gramų.";
}
function vandens_pupeliu_santykis($masyvas) { //funkcija ar uzteks pupelems vandens
  echo "</br></br>Ar pupelėms užteks vandens?";
  $raktai = array_keys($masyvas);
  $Pupeles = 0;
  $Vanduo = 0;
  for ($i=0; $i < count($raktai) ; $i++) { //tikrina ar masyve yra pupelių
    if ($raktai[$i] == "Pupelės") {
      $Pupeles++;
    } else {
      $Pupeles = $Pupeles;
    }
  }
  for ($i=0; $i < count($raktai) ; $i++) { // tikrina ar masyve yra vandens 
    if ($raktai[$i] == "Vanduo") {
      $Vanduo++;
    } else {
      $Vanduo = $Vanduo;
    }
  }
  if ($Pupeles !== 0 && $Vanduo !== 0) {
    if ($masyvas["Vanduo"] >= $masyvas["Pupelės"]) {
      echo "</br>Kadangi pilame pakankamai vandens, pupelės neprisvils.";
    } elseif ($masyvas["Vanduo"] < $masyvas["Pupelės"]) {
      echo "</br> Pilkite daugiau vandens, nes pupelės prisvils.";
    } 
  } else {
      echo "</br>Recepte nėra pupelių ar vandens.";
    }
}

?>