<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class HomeModel extends Model {

    public function addPerfil($name,$email,$password,$country,$city,$review,$rol){
      $conex = mysqli_connect("localhost","root","","vacaciones") or die ("Error al Conectar la Base de Datos");
      $validate = mysqli_query($conex,"SELECT email FROM usuarios WHERE email = '{$email}'");
      if(mysqli_num_rows($validate)==0)
      {
      $sql = "INSERT INTO usuarios (name,email,password,country,city,review,rol) VALUES ('{$name}','{$email}','{$password}','{$country}','{$city}','{$review}','{$rol}')";
      $this->db->query($sql);
      }
      else{
        echo "El Correo Electrónico ya se encuentra Registrado";
      }
    }
          

    public function loginUser($email,$password){
        $sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND password = '{$password}'";
        $user = $this->db->query($sql)->getResult();
        return $user;
      }
      
      //$sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND password = '{$password}'";
      //$user = $this->db->query($sql)->getResult();
      //return $user;
    }
    
