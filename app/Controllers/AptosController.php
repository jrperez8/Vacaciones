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
		$addapto = new AptosModel();		
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
			
		$newapto = $addapto->addaptos($idusuario,$ciudad,$pais,$direccion,$habitaciones,$valornoche,$path,$resena);		
		
		return redirect()->to('/aptos');
	}

	public function updateapto(){
		$actual = new AptosModel();	
		$request = \Config\Services::request();		
		$aidapto = $request->getGet('id_apto');
		//$aidapto = 23;		
		//$apto = $actualapto->getapto($id_apto);		
		//$actapto = $actual->actualizaapto($id_apto);
		$aciudad = $request->getPost ('actciudad');
		$apais = $request->getPost ('actpais');
		$adireccion = $request->getPost ('actdireccion');
		$ahabitaciones = $request->getPost ('acthabitaciones');	
		$avalornoche = $request->getPost ('actvalornoche');			
		$aresena = $request->getPost ('actresena');	
		$aaptoimages= $request->getFile('actfoto_apto');
		$nnameimagen = $aaptoimages->getRandomName();
		$paths = "";
		if($aaptoimages->isValid() && !$aaptoimages->hasmoved()){
			$aaptoimages->move('./descargas/aptos/',$nnameimagen);
			$paths = base_url(). '/descargas/aptos/' .$nnameimagen;
		}	
			
		$actual->actualizaapto($aidapto,$aciudad,$apais,$adireccion,$ahabitaciones,$avalornoche,$paths,$aresena);	
		return redirect()->to('/aptos');
	}

	public function deleteaptos(){	
		$removeapto = new AptosModel();	
		$request = \Config\Services::request();		
		$idapto = $request->getGet('id_apto');		
		$removeapto->deleteaptos($idapto);		
		return redirect()->to('/aptos');
	}
}