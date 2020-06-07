<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('site/templates/header');
		echo view('site/home');
		echo view('site/templates/footer');
	}

	//--------------------------------------------------------------------

}
