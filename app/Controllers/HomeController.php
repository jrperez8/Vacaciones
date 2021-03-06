<?php

namespace App\Controllers;

use App\Models\HomeModel;
use mysqli;

class HomeController extends BaseController
{
	public function index()
	{
		echo view ('layouts/fheader');
		echo view ('homeView');
		echo view ('layouts/footer');
	}

	public function signin(){
		$request = \Config\Services::request();		
		$loginModel = new HomeModel();
		$session = \Config\Services::session();
		$email = $request->getPost ('email');
		$password = $request->getPost ('password');		
		$user = $loginModel->loginUser($email,$password);	
		
		foreach($user as $datauser){
			if(count($user)>0){
				$newdata = [
					'id'=> $datauser->id,													
					'email' => $email,
					'rol'=> $datauser->rol,						
				];
				$session->set($newdata);
				return redirect()->to('/rol');
				
		} else {
			echo ("Datos Incorrectos");
		}
	}
}
	
public function addUser(){
	$session = \Config\Services::session();
	$request = \Config\Services::request();
	$addModel = new HomeModel();
	$name = $request->getPost ('name');
	$email = $request->getPost ('email');
	$password = $request->getPost ('password');
	$country = $request->getPost ('country');
	$city = $request->getPost ('city');
	$review = $request->getPost ('review');
	$rol = $request->getPost ('rol');
	$file = $request->getFile('photo_perfil');
	$filephoto = $file->getRandomName();
	$photo = "";
		if($file->isValid() && !$file->hasmoved()){
			$file->move('./uploads/images/',$filephoto);
			$photo = base_url(). '/uploads/images/' .$filephoto;
		}
	$newuser = $addModel->addPerfil($name,$email,$password,$country,$city,$review,$rol,$photo);
	$getuser = $addModel->getUser($email);
	
	foreach ($getuser as $datouser) 
		if(count($getuser)>0){
			$newdata = [	
				'id' => $datouser->id,							
				'email' => $email,
				'rol'=> $datouser->rol,						
			];
			$session->set($newdata);
			return redirect()->to('/perfil');
		}
		else {
			echo "El Correo Electrónico ya se Encuentra Registrado Controller";			
		}	
	
	}	
}
