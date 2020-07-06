<?php
namespace App\Controllers\Api;
use CodeIgniter\Controller;
use App\Models\CustomersModel;

class Customers extends Controller {
  public function index()
  {
      $customers = new CustomersModel;

      $data = [
          'customers' => $customers->getCustomers()
      ];

      echo json_encode($data);
  }
}

?>