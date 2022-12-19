<?php

namespace App\Controller;

use App\Model\PokephoneModel;

class PokephoneController extends Controller
{

    public static function PokephonePage()
    {

        $model = new PokephoneModel();

        $model->GetByID($model->id);

        parent::render("Pokephone/Pokephone", $model);

    }

    public static function Change()
    {

        $model = new PokephoneModel();

        $model->id = $_POST["id_pokemon"];

        $model->GetByID($model->id);

        parent::render("Pokephone/Pokephone", $model);

    }

}