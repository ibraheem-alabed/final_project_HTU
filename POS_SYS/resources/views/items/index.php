<div class="container w-75" style="background-color: #434376;">
    <h1 class="d-flex justify-content-around" style="color: white;">itmes List (<?= $data->items_count ?>)</h1>
</div>

<div class="row my-5">

    <?php foreach ($data->items as $item) : ?>
        <div class="htu-card-wrapper mb-5 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card w-100" style="background-color: #a597fbc9;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <?= $item->name ?>
                    </h5>
                    <img src="./resources/img/<?= $item->img ?>" style="height: 220px;width:250px;" class="card-img-top mb-3" alt="item_image">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="./item?id=<?= $item->id ?> " class="btn" style="background-color: #3035679e;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">Check itme</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>



<!-- ------------------------------------------------------------------------------------ -->

<!-- <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($data->items as $item) : ?>
        <div class="col">
            <div class="card h-100">
                <img src="../../img/<?= $item->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $item->name ?></h5>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="./item?id=<?= $item->id ?> " class="btn" style="background-color: #3035679e;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">Check itme</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div> -->