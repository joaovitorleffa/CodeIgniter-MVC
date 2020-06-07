<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CustomersModel;

class Customers extends Controller {
    public function index()
    {
        $customers = new CustomersModel;

        $data = [
            'customers' => $customers->getCustomers()
        ];

        echo view('site/templates/header');
        echo view('customers/list', $data);
        echo view('site/templates/footer');
    }

    public function details($id)
    {
        $customers = new CustomersModel;

        $data = [
            'customer' => $customers->getCustomers($id)
        ];

        echo view('site/templates/header');
        echo view('customers/details', $data);
        echo view('site/templates/footer');
    }
}
?>