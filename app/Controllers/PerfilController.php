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
		$rol = $session->get('rol');
		$file = $request->getFile('foto_perfil');
		$filename = $file->getRandomName();
		//$filename = "";
		if($file->isValid() && !$file->hasmoved()){
			$file->move('./uploads/images/',$filename);
			$filename = base_url(). '/uploads/images/' .$filename;
		}
		$imagesModel->addImages($email,$filename);

	    return redirect()->to('/rol');             	
	}

	public function reviewUser(){
		$request = \Config\Services::request();
		$reviewmodel = new PerfilModel();
		$session = \Config\Services::session();
		$email = $session->get('email');
		$rol = $session->get('rol');
		$newreview = $request->getPost('actreview');
		$reviewmodel->updateReview($email,$newreview);
		if ($rol == "anfitrion"){
            return redirect()->to('/perfil');
        }else{
            return redirect()->to('/cliente');
        }      	
	}

	public function updateUser(){
		$request = \Config\Services::request();
		$actualizaUser = new PerfilModel();
		$session = \Config\Services::session();
		$rol = $session->get('rol');
		$id = $session->get('id');
		$name = $request->getPost ('name');
		$email = $request->getPost ('email');
		$password = $request->getPost ('password');
		$country = $request->getPost ('country');
		$city = $request->getPost ('city');		
		//$rol = $request->getPost ('rol');
		$actualizaUser->updateUser($id,$name,$email,$password,$country,$city);
		if ($rol == "anfitrion"){
            return redirect()->to('/perfil');
        }else{
            return redirect()->to('/cliente');
        }     
	}

}
