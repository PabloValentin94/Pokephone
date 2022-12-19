<?php

namespace App\Model;

use App\DAO\PokephoneDAO;

class PokephoneModel extends Model
{

    public int $id = 1;

    public function GetByID(int $id)
    {

        $dao = new PokephoneDAO();

        $this->rows = $dao->SelectByID($id);

    }

}

?>