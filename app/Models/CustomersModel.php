<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomersModel extends Model {
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $allowedFields = [
        'nome', 'email', 'telefone', 'endereco'
    ];

    public function getCustomers($id = null)
    {
        if($id == null):
            return $this->findAll();
        else:
            return $this->find($id);
        endif;
    }
}
?>