<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <form class="col-md-4 ml-auto mr-auto mt-5" action="<?=base_url('admin/validate-login')?>">
        <h1>Administrativo</h1>
        <div class="form-group">
          <label for="user">Nome de Usuário</label>
          <input 
            class="form-control" 
            name="user"
            id="user" 
            aria-describedby="emailHelp"
          >
        </div>
        <div class="form-group">
          <label for="password">Senha</label>
          <input 
            type="password" 
            class="form-control" 
            name="password"
            id="password"
          >
        </div>
        <input class="btn btn-primary" type="submit" value="Entrar">
      </form>
    </div>
  </div>
</body>

</html>