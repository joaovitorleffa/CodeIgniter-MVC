<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Site extends Controller {
    public function index() 
    {
        $this->view('home');
    }

    public function view($page = 'home') 
    {
        echo view('site/templates/header');
        echo view('site/'.$page);
        echo view('site/templates/footer');
    }
}
?>