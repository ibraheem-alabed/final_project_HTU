<form action="/items/store" method="POST" class="w-50" id="asd">
<h1 style="color: white;" class="text-center m-0 p-0">Create item</h1>
    <div class="mb-3">
        <label for="item-name" class="form-label" style="color: white;">item name</label>
        <input type="text" class="form-control" id="item-name" name="name">
    </div>
    <div class="mb-3">
        <label for="item-silling_price">item price</label>
        <input type="text" class="form-control" id="item-silling_price" name="silling_price">
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
    <button type="submit" class="btn btn-success mt-4">Create</button>
</form>