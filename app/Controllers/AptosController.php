<?php

namespace App\Controllers;
use App\Models\PerfilModel;

class AptosController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();		
		$perfil = new PerfilModel();
		
		$email = $session->get('email');
		$datosPerfil = $perfil->readPerfil($email);			
		
		$datos = array(
			"datousuarios" => $datosPerfil,
			
		);
		echo view ('layouts/header',$datos);
		echo view ('aptosView');
		echo view ('layouts/footer');
	}
}