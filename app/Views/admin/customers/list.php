  <div class="row d-flex justify-content-center">
    <main class="col-lg-8 col-md-8 col-sm-12">
      <h1 class="text-center">Clientes</h1>
      <form 
      name="form"
      action="<?=base_url('admin/customers/search')?>" 
      method="POST" 
      enctype="multipart/form-data"
      >
        <input type="text" name="search" class="form-control" placeholder="Pesquisar..." required>
        <input type="submit" class="btn btn-primary mt-2 mb-2" value="Pesquisar">
      </form>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($customers as $customer) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?=$customer['id_cliente'] ?></td>
              <td><?=$customer['nome'] ?></td>
              <td>
                <a 
                  href="<?=base_url('admin/customers/update/'.$customer['id_cliente'])?>"
                  class="btn btn-warning text-white"
                  >Alterar</a>
              </td>
              <td>
                <a 
                  href="<?=base_url('admin/customers/delete/'.$customer['id_cliente'])?>"
                  class="btn btn-danger"
                  >Excluir</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </main>
  </div>