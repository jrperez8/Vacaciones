<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class HomeModel extends Model {

  public function addPerfil($name,$email,$password,$country,$city,$review,$rol,$photo){
    $conex = mysqli_connect("localhost","root","","vacaciones") or die ("Error al Conectar la Base de Datos");
    $validate = mysqli_query($conex,"SELECT email FROM usuarios WHERE email = '{$email}'");
    if(mysqli_num_rows($validate)==0)
    {
    $sql = "INSERT INTO usuarios (name,email,password,country,city,review,rol,photo) VALUES ('{$name}','{$email}','{$password}','{$country}','{$city}','{$review}','{$rol}','{$photo}')";
    $this->db->query($sql);
    }
    else{
      echo "El Correo Electrónico ya se encuentra Registrado Model";
    }
  }
          

        public function loginUser($email,$password){
          
          $cnx = mysqli_connect("localhost","root","","vacaciones") or die ("Error al Conectar la Base de Datos");
          $validatelogin = mysqli_query($cnx, "SELECT email FROM usuarios WHERE email = '{$email}'");
          if(mysqli_num_rows($validatelogin)>0){
            $sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND password = '{$password}'";
            $user = $this->db->query($sql)->getResult();
            return $user;
          }
          else {
            //echo '<script type = "text/javascript" src ="/assets/js/validaciones.js">' ,'return mensajeValidacion();','</script>';
            echo "<h2>El Correo Electrónico no se encuentra Registrado Model</h2>";
          }
         
        }

    public function getUser($email){
        $sql = "SELECT * FROM usuarios WHERE email = '{$email}'";
        $prueba = $this->db->query($sql)->getResult();
        return $prueba;
    }
      
      //$sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND password = '{$password}'";
      //$user = $this->db->query($sql)->getResult();
      //return $user;
}
?>


    
