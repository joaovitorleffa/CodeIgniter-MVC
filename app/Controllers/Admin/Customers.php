<?php
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\CustomersModel;

class Customers extends Controller {
    public function index()
    {
        $customers = new CustomersModel;

        $data = [
            'customers' => $customers->getCustomers()
        ];

        echo view('admin/templates/header');
        echo view('admin/customers/list', $data);
        echo view('admin/templates/footer');
    }

    public function details($id)
    {
        $customers = new CustomersModel;

        $data = [
            'customer' => $customers->getCustomers($id)
        ];

        echo view('admin/templates/header');
        echo view('customers/details', $data);
        echo view('admin/templates/footer');
    }

    public function insert()
    {
        echo view('admin/templates/header');
        echo view('admin/customers/insert');
        echo view('admin/templates/footer');
    }

    public function insertAction()
    {
        $customers = new CustomersModel;
        
        $data = [
            'nome' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'telefone' => $this->request->getVar('phone'),
            'endereco' => $this->request->getVar('address'),
        ];
        
        $customers->insert($data);
        return redirect()->route('admin/customers');
    }

    public function update($id)
    {
        $customers = new CustomersModel;

        $data = [
            'customer' => $customers->getCustomers($id)
        ];

        echo view('admin/templates/header');
        echo view('admin/customers/update', $data);
        echo view('admin/templates/footer');
    }

    public function updateAction($id)
    {
        $customers = new CustomersModel;
        
        $data = [
            'nome' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'telefone' => $this->request->getVar('phone'),
            'endereco' => $this->request->getVar('address'),
        ];

        $customers->update($id, $data);
        return redirect()->route('admin/customers');
    }

    public function delete($id)
    {
        $customers = new CustomersModel;
        $customers->delete($id);        

        return redirect()->route('admin/customers');
    }
}
?>