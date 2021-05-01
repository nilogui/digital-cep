<?php

require_once "vendor/autoload.php";

use Max3d\DigitalCep\Search;

$busca = new Search;

$resultado = $busca -> getAddressFromZipcode('93044-555'); // ('01001000');

print_r($resultado);