  <div class="row d-flex justify-content-center">
    <form 
      action="<?=base_url('admin/customers/update-action/'.$customer['id_cliente'])?>" 
      method="POST"
      enctype="multipart/form-data"
      class="col-lg-8 col-md-8 col-sm-12"  
    >
      <div class="form-group">
        <label for="id">ID</label>
        <input 
          type="text" 
          class="form-control" 
          id="id" 
          name="id"
          readonly="readonly"
          value="<?=$customer['id_cliente']?>"  
        >
      </div>
      <div class="form-group">
        <label for="name">Nome</label>
        <input 
          type="text" 
          class="form-control" 
          id="name" 
          name="name" 
          value="<?=$customer['nome']?>" 
        >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input 
          type="email" 
          class="form-control" 
          id="email" 
          name="email" 
          value="<?=$customer['email']?>" 
        >
      </div>
      <div class="form-group">
        <label for="email">Telefone</label>
        <input 
          type="text" 
          class="form-control" 
          id="phone" 
          name="phone" 
          placeholder="Telefone"
          value="<?=$customer['telefone']?>" 
        >
      </div>
      <div class="form-group">
        <label for="email">Endereço</label>
        <input 
          type="text" 
          class="form-control" 
          id="address" 
          name="address" 
          value="<?=$customer['endereco']?>" 
        >
      </div>
      <input type="submit" class="btn btn-primary" value="Alterar">
    </form>
  </div>