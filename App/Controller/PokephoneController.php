<?php

namespace App\Controller;

use App\Model\PokephoneModel;

class PokephoneController extends Controller
{

    public static function PokephonePage()
    {

        $model = new PokephoneModel();

        if(isset($_POST["id_pokemon"]))
        {

            $model->id = $_POST["id_pokemon"];

        }

        $model->GetByID($model->id);

        parent::render("Pokephone/Pokephone", $model);

    }

}

?>