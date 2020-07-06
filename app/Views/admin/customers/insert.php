  <div class="row d-flex justify-content-center">
    <form 
      name="form"
      action="<?=base_url('admin/customers/insert-action')?>" 
      class="col-lg-8 col-md-8 col-sm-12"
      method="POST" 
      enctype="multipart/form-data"
    >
      <div class="form-group">
        <label for="name">Nome</label>
        <input 
          id="name"
          type="text" 
          class="form-control" 
          placeholder="Nome"
          name="name" 
          onblur="validationName()"
          required
        >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input 
          id="email"
          type="email" 
          class="form-control" 
          placeholder="Email"
          name="email" 
          onblur="validationEmail(form.email)"
          required
        >
      </div>
      <div class="form-group">
        <label for="email">Telefone</label>
        <input 
          id="phone"
          type="text" 
          class="form-control" 
          placeholder="Telefone"
          name="phone" 
          onblur="validationPhone()"
          required
        >
      </div>
      <div class="form-group">
        <label for="email">Endereço</label>
        <input 
          id="address"
          type="text" 
          class="form-control" 
          placeholder="Endereço"
          name="address"
          onblur="validationAddress()"
          required 
        >
      </div>
      <input type="submit" class="btn btn-primary" value="Adicionar">
    </form>
  </div>