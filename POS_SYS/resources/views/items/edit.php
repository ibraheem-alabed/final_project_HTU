<div class="mt-5 d-flex flex-row-reverse gap-3">
<a href="/items" class="btn btn-success">Back</a>
</div>
<form action="/items/update" method="POST" class="w-50" id="asd">
<h1 class="m-0 p-0">Edit item</h1>
    <input type="hidden" name="id" value="<?= $data->item->id ?>">
    <div class="mb-3">
        <label for="item-title" class="form-label">item name</label>
        <input type="text" class="form-control" id="item-title" name="name" value="<?= $data->item->name ?>">
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Your item content.." id="item-content" style="height: 100px"
            name="silling_price"><?= $data->item->silling_price ?></textarea>
        <label for="item-content">item price</label>
    </div>
    <div class="mb-3">
        <label for="item-cost" class="form-label" style="color: white;">cost</label>
        <input type="text" class="form-control" id="item-cost" name="cost">
    </div>
    <div class="mb-3">
        <label for="item-quantity" class="form-label" style="color: white;">quantity</label>
        <input type="text" class="form-control" id="item-quantity" name="quantity">
    </div>
    <div class="mb-3">
        <label for="item-image" class="form-label" style="color: white;">image</label>
        <input type="file" class="form-control" id="item-image" name="img">
    </div>
    <!-- <div class="my-3">
        <label for="item-tags">quantity</label>
        <select class="form-select" multiple aria-label="multiple select example" name="quantity[]">
            <?php foreach ($data->item->tags as $tag) : ?>
            <option value="<?= $transaction->id ?>"><?= $transaction->name ?></option>
            <?php endforeach; ?>
        </select>
    </div> -->

    <button type="submit" class="btn btn-warning mt-4">Update</button>
</form>