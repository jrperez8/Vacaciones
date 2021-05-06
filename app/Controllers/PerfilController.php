<?php

namespace App\Controllers;

use App\Models\PerfilModel;

class PerfilController extends BaseController
{
	public function index()
	{
		$perfil = new PerfilModel();
		$datosPerfil = $perfil->readPerfil();
		$datos = array(
			"datousuarios" => $datosPerfil,
		);
		echo view ('layouts/header');
		echo view ('perfilView',$datos);
		echo view ('layouts/footer');
	}
}
