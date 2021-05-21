<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class AptosModel extends Model {
    
    public function addaptos($idusuario,$ciudad,$pais,$direccion,$habitaciones,$valornoche,$path,$resena){
        $conex = mysqli_connect("localhost","root","","vacaciones") or die ("Error al Conectar la Base de Datos");
        /*$validate = mysqli_query($conex,"SELECT direccion FROM aptos WHERE id_usu = '{$idusuario}'");
        if(mysqli_num_rows($validate)==0)
        {*/
          $sql = "INSERT INTO aptos (id_usu,ciudad,pais,direccion,habitacion,valor_noche,imagen_apto,resena_apto) VALUES ('{$idusuario}','{$ciudad}','{$pais}','{$direccion}','{$habitaciones}','{$valornoche}','{$path}','{$resena}')";

        $this->db->query($sql);
        /*}
        else{
          echo "El Inmueble ya se encuentra Registrado";
        }*/
    }

    public function readAptos($idusuario){
      $sql = "SELECT * FROM aptos WHERE id_usu = '{$idusuario}' ";
      $aptos = $this->db->query($sql);
      return $aptos->getResult();
    }

    public function deleteaptos($idapto){
      $sql = "DELETE FROM aptos WHERE id_apto = '{$idapto}'";
      $remove = $this->db->query($sql);
      return $remove ->getResult();
    }
}