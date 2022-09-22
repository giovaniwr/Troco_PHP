<?php
function modulo($num1, $num2 ){
	$result = (($num1 / $num2) - floor($num1 / $num2)) * $num2;
	return (float)number_format($result, 3, '.', '');
}
function calc_troco($troco){ 
  
  $nota = array('100', '50', '20', '10', '5', '2', '1', '0.50', '0.25', '0.10', '0.05', '0.01');
	$vlr = $troco;
	for($i = 0; $i < count($nota) ; $i++){
		$ct = floor($vlr / $nota[$i]);
		if ($ct) {
			$result = $ct. " nota(s) de R$". $nota[$i]." Reais";
			$vlr = modulo($vlr, $nota[$i]);
			echo $result.PHP_EOL;
		}
	}
}
calc_troco(30.56);