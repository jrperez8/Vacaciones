<?php

namespace App\Controllers;

use App\Models\HomeModel;


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
		if(count($user)>0){
			$newdata = [				
				'email' => $email,
				'rol'=> TRUE						
			];
			$session->set($newdata);
			return redirect()->to('/perfil');			
		}else {
			echo ("Datos Incorrectos");
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
		$newuser = $addModel->addPerfil($name,$email,$password,$country,$city,$review,$rol);
		if(count($newuser)>0){
			$newdata = [				
				'email' => $email,
				'rol'=> TRUE						
			];
			$session->set($newdata);
			return redirect()->to('/perfil');
		}
		else {
			echo "El Correo Electrónico ya se Encuentra Registrado";			
		}
		
	}	

}
