<?php

namespace App\Controllers;

use App\Models\PerfilModel;


class PerfilController extends BaseController
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
		echo view ('perfilView',$datos);
		echo view ('layouts/footer');
	}

	public function logout(){
			$session = \Config\Services::session();	
			$session->destroy();
			return redirect()->to('/');
	}

	public function imageuser(){
		$request = \Config\Services::request();
		$imagesModel = new PerfilModel();
		$session = \Config\Services::session();
		$email = $session->get('email');
		$file = $request->getFile('foto_perfil');
		$filename = $file->getRandomName();
		//$filename = "";
		if($file->isValid() && !$file->hasmoved()){
			$file->move('./uploads/images/',$filename);
			$filename = base_url(). '/uploads/images/' .$filename;
		}
		$imagesModel->addImages($email,$filename);
		return redirect()->to('/perfil');
	}

	public function reviewUser(){
		$request = \Config\Services::request();
		$reviewmodel = new PerfilModel();
		$session = \Config\Services::session();
		$email = $session->get('email');
		$newreview = $request->getPost('actreview');
		$reviewmodel->updateReview($email,$newreview);
		return redirect()->to('/perfil');
	}
	



}
