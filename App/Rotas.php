<?php

use App\Controller\PokephoneController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        PokephoneController::PokephonePage();
    break;

    case "/change":
        PokephoneController::Change();
    break;

    default:
        echo "Error 404";

}