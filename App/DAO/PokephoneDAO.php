<?php

namespace App\DAO;

use \PDO;

class PokephoneDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function SelectByID(int $id)
    {

        $sql = "SELECT * FROM Pokemon WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchall(PDO::FETCH_CLASS);

    }

}

?>