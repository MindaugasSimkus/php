<?php
function count_cards($masyvas, $spalva) {
	$card_quantity = 0;
	foreach ($masyvas as $kortele) {
	  if ($kortele == $spalva){
	    $card_quantity++;
	  } 
	}
	return $card_quantity;
}


?>
