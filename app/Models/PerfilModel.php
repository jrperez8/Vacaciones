<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilModel extends Model {

  function readPerfil($email) {
    $sql = "SELECT * FROM usuarios WHERE email = '{$email}' ";
    $perfil = $this->db->query($sql);
    return $perfil->getResult();
    }

    function addImages($email,$filename){
      $sql = "UPDATE usuarios SET photo = '{$filename}' WHERE email = '{$email}'";
      $image = $this->db->query($sql);
      return $image->getResult();
    }

    function updateReview($email,$newreview){
      $sql = "UPDATE usuarios SET review = '{$newreview}' WHERE email = '{$email}'";
      $upreview = $this->db->query($sql);
      return $upreview->getResult();
    }

}  



 

