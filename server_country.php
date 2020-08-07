<?php

//array de paises-capitales
$paises = array('Francia' => 'París', 'Ecuador' => 'Quito', 'Gran Bretaña' => 'Londres', 'Alemania' => 'Berlín', 'Argentina' => 'Buenos Aires');

//recupera capital
$capital = $_POST['capital'];

//buscar país según la capital
$pais = array_search($capital, $paises);

//enviar país
echo $pais;
?>