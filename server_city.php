<?php

//crear array 
$paises = array('Francia' => 'París', 'Ecuador' => 'Quito', 'Gran Bretaña' => 'Londres', 'Alemania' => 'Berlín', 'Argentina' => 'Buenos Aires');

//extraer capitales del array
$capitales = [];

foreach ($paises as $key => $capital) {
	array_push($capitales, $capital);
}

//enviar el array en formato json
echo json_encode($capitales);

?>