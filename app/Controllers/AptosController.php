<?php

namespace App\Controllers;

use App\Models\AptosModel;
use App\Models\PerfilModel;

class AptosController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();	
		$request = \Config\Services::request();	

		$perfil = new PerfilModel();		
		$email = $session->get('email');
		$datosPerfil = $perfil->readPerfil($email);			
		
		$datos = array(
			"datousuarios" => $datosPerfil,
			
		);
		$aptos = new AptosModel();		
		//$idusuario = $request->getPost ('idusu');
		$idusuario = $session->get('id');
		$datosApto = $aptos->readAptos($idusuario);

		$images = array(
			"datosaptos" => $datosApto,
		);


		echo view ('layouts/header',$datos);
		echo view ('aptosView',$images);
		echo view ('layouts/footer');
	}

	public function addapto(){
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$addApto = new AptosModel();		
		$idusuario = $session->get('id');
		//$idusuario = $request->getPost ('idusu');		
		$ciudad = $request->getPost ('ciudad');
		$pais = $request->getPost ('pais');
		$direccion = $request->getPost ('direccion');
		$habitaciones = $request->getPost ('habitaciones');				
		$valornoche = $request->getPost ('valornoche');		
		$resena = $request->getPost ('resena');
		$aptoimages= $request->getFile('foto_apto');
		$nombreimagen = $aptoimages->getRandomName();
		$path = "";
		if($aptoimages->isValid() && !$aptoimages->hasmoved()){
			$aptoimages->move('./descargas/aptos/',$nombreimagen);
			$path = base_url(). '/descargas/aptos/' .$nombreimagen;
		}		
			
		$addApto->addaptos($idusuario,$ciudad,$pais,$direccion,$habitaciones,$valornoche,$path,$resena);
		return redirect()->to('/aptos');
	}

	public function deleteaptos(){
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$removeapto = new AptosModel();
		$idapto = $request->getPost('id_apto');
		$removeapto->deleteaptos($idapto);
		return redirect()->to('/aptos');
	}
}