<?php

namespace App\Controllers;

class AptosController extends BaseController
{
	public function index()
	{
		echo view ('layouts/header');
		echo view ('aptosView');
		echo view ('layouts/footer');
	}
}