    <div class="row">
        <main class="col-lg-8 col-md-10 col-sm-12 section">
            <h1 class="text-center">Customers</h1>
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
                    <?php $i=0; foreach($customers as $customer): ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?=$customer['id_cliente']?></td>
                            <td><?=$customer['nome']?></td>
                            <td><a href="<?=base_url('customers/'.$customer['id_cliente'])?>">Details</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </main>
    </div>