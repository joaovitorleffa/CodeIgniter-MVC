<?php
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\UsersModel;

class Users extends Controller 
{
  public function index()
  {
    
  }

  public function validateLogin()
  {
    $users = new UsersModel;

    // pegando valores dos inputs
    $userName = $this->request->getVar('user');
    $userPassword = $this->request->getVar('password');

    if($user = $users->getUser($userName)):
      if($userPassword == $user['password']):
        $session = \Config\Services::session();
        $session->set('user', $user);
        return redirect()->to(base_url('admin'));
      else:
        return redirect()->to(base_url('admin'));
      endif;
      
    else:
      return redirect()->to(base_url('admin'));
    endif;

  }
}