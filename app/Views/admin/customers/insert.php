  <div class="row d-flex justify-content-center">
    <form 
      action="<?=base_url('admin/customers/insert-action')?>" 
      class="col-lg-8 col-md-8 col-sm-12"
      method="POST" 
      enctype="multipart/form-data"
    >
      <div class="form-group">
        <label for="name">Nome</label>
        <input 
          type="text" 
          class="form-control" 
          placeholder="Nome"
          name="name" 
        >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input 
          type="email" 
          class="form-control" 
          placeholder="Email"
          name="email" 
        >
      </div>
      <div class="form-group">
        <label for="email">Telefone</label>
        <input 
          type="text" 
          class="form-control" 
          placeholder="Telefone"
          name="phone" 
        >
      </div>
      <div class="form-group">
        <label for="email">Endereço</label>
        <input 
          type="text" 
          class="form-control" 
          placeholder="Endereço"
          name="address" 
        >
      </div>
      <input type="submit" class="btn btn-primary" value="Adicionar">
    </form>
  </div>