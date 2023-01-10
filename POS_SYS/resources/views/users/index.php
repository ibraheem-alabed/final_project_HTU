<div class="container w-75" style="background-color: #26418dde;">
<h1 class="d-flex justify-content-around mb-5" style="color: white;">Users List (<?= $data->users_count ?>)</h1>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="color: white;">Display Name</th>
                <th scope="col" style="color: white;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->users as $user) : ?>
                <tr style="background-color: rgba(41, 60, 152, 0.66);">
                    <td style="color: white;"><?= $user->display_name ?></td>
                    <td><a href="./user?id=<?= $user->id ?>" class="btn" style="background-color: #303567;color:white;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">Check User</a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>