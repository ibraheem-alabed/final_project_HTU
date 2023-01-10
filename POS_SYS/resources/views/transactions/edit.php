<div class="mt-5 d-flex flex-row-reverse gap-3">
<a href="/transactions/create" class="btn btn-success">Back</a>
</div>

<form action="/transactions/update" method="POST" class="w-50" id="asd">
<h1 class="m-0 p-0">Edit transaction</h1>
    <input type="hidden" name="id" value="<?= $data->transaction->id ?>">
    <div class="mb-3">
        <label for="tra-quantity" class="form-label">transaction quantity</label>
        <input type="text" class="form-control" id="tra-quantity" name="quantity" value="<?= $data->transaction->quantity ?>">
    </div>
    <div class="mb-3">
        <label for="tra-price" class="form-label">Unit price</label>
        <input type="text" class="form-control" id="tra-price" name="price" value="<?= $data->transaction->price ?>">
    </div>
    <div class="mb-3">
        <label for="tra-total" class="form-label">total</label>
        <input type="text" class="form-control" id="tra-total" name="total" value="<?= $data->transaction->total ?>">
    </div>
    <button type="submit" class="btn btn-warning mt-4">Update</button>
</form>