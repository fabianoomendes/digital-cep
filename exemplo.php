<?php

require_once "vendor/autoload.php";

use FabianoMendes\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('01001000');


print_r($resultado);