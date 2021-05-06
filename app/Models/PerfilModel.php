<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilModel extends Model {

    function readPerfil() {
        $sql = "SELECT * FROM usuarios";
        $perfil = $this->db->query($sql);
        return $perfil->getResult();
    }    

}