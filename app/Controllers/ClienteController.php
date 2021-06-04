<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\PerfilModel;
use App\Models\AptosModel;
use mysqli;

class ClienteController extends BaseController
{
    public function index(){

        $session = \Config\Services::session();	
        $request = \Config\Services::request();	
		$perfil = new PerfilModel();		
		$email = $session->get('email');		
		$datosPerfil = $perfil->readPerfil($email);		
		$datos = array(
			"datousuarios" => $datosPerfil,
			
		);        
        
		echo view ('layouts/header',$datos);
		echo view ('clienteView');
		echo view ('layouts/footer');
    }

    public function choise(){

        $session = \Config\Services::session();				
		$rol = $session->get('rol');
        if ($rol == "anfitrion"){
            return redirect()->to('/perfil');
        }else{
            return redirect()->to('/cliente');
        }      		

    }

    public function assignCountry(){
        $session = \Config\Services::session();	
        $request = \Config\Services::request();	
		$perfil = new PerfilModel();		
		$email = $session->get('email');		
		$datosPerfil = $perfil->readPerfil($email);		
		$datos = array(
			"datousuarios" => $datosPerfil,
			
		);	
        $request = \Config\Services::request();
        $pais = $request->getPost('paisapto');
        $paisAptos = new AptosModel();
        $paisApto = $paisAptos->aptosPais($pais);
        $country = array(
			"paisaptos" => $paisApto,
		);
        
        echo view ('layouts/header',$datos);
		echo view ('paisView',$country);
		echo view ('layouts/footer');
    }
}