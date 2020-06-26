<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <header class="col-md-12 bg-light justify-content-center">
        <h2 class="text-center mt-3">Administrativo</h2>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/logout')?>">Sair</a>
          </li>
        </ul>
      </header>
    </div>
    <div class="row">
      <ul class="col-md-12 nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="<?=base_url('admin')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('admin/customers')?>">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('admin/customers/insert')?>">Adicionar</a>
        </li>
      </ul>
    </div>