    <div class="row">
        <main class="col-lg-8 col-md-10 col-sm-12 section">
            <h1>Details</h1>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <td><?=$customer['id_cliente']?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?=$customer['nome']?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$customer['email']?></td>
                </tr>
            </table>
            <button class="btn btn-primary"><a class="text-light" href="<?=base_url('customers')?>">Back</a></button>
        </main>
    </div>