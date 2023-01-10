<?php

use Core\Helpers\Helper;
?>
<div class="mt-5 d-flex flex-row-reverse gap-3">
    <?php if (Helper::check_permission(['item:read', 'item:update'])) : ?>
    <a href="/items/edit?id=<?= $data->item->id ?>" class="btn btn-warning">Edit</a>
    <?php endif;
    if (Helper::check_permission(['item:read', 'item:delete'])) :
    ?>
    <a href="/items/delete?id=<?= $data->item->id ?>" class="btn btn-danger">Delete</a>
    <?php endif; ?>
    <a href="/items" class="btn btn-success">Back</a>
</div>

<div class="my-5">
    <!-- for admins -->
    <div style="background-color: #181c3bf0;" class="container w-50">
        <h1 class="text-center" style="color: white;">
            <?= $data->item->name ?>
        </h1>
    </div>
    <div style="background-color: #181c3bf0;" class="container w-50">
    <p class="text-center" style="color: white;">
    <img src="./resources/img/<?= $data->item->img ?>" style="height: 250px;width:200px;margin:auto" class="card-img-top" alt="item_image">
    </p>
    </div>
    <div style="background-color: #181c3bf0;" class="container w-50">
    <p class="text-center fs-4" style="color: white;">
        price: (<?= $data->item->silling_price ?>) jod
    </p>
    </div>

</div>