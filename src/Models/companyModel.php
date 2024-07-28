<?php

namespace src\Models;

use src\Core\Connection;

class companyModel
{
    public function search(): array
    {

        $query = "SELECT * FROM user_company";
        $sql = Connection::getInstancia()->query($query);
        $res = $sql->fetchAll();

        return $res;
    }
}
