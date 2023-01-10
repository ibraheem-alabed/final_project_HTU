




<!-- ------------------------------------------------------------- -->
<div class="container w-75" style="background-color: #343a40f7;">
  <h1 class="text-center" style="color: white;">Silling dashboard</h1>
  <?php if (!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>
<div class='alert alert-danger' role='alert'>
<?= $_SESSION['error'] ?>
</div>
<?php endif?>


</div>
<div>
  <form id="asd" class="mb-4 d-flex justify-content-between input-form" style="background-color: rgb(51 58 65);width:55rem;">

    <input type="hidden" id="user_id" name="user_id" value="<?= $data->user ?>">

    <div class="input-group flex-nowrap me-2">

      <select id="items_id" class="form-select" aria-label="Default select example" name="items_id">

        <option selected>Select One Of The Items</option>
        <?php foreach ($data->items as $item) {
        if($item->quantity>0){

          //  $name=array();

          // if(!in_array($item->name,$name) && $item->quantity > 0 ){


          //     $name[]= $item->item_name;
        ?>

          <option value="<?= $item->id ?>"><?= $item->name ?></option>
            
        <?php }} ?>



      </select>

    </div>



    <div class="input-group flex-nowrap ms-2">

      <input id="quantity" type="number" class="form-control" placeholder="Enter the quantity" aria-describedby="addon-wrapping" min="0" name="quantity">

    </div>



    <button id="will" class="btn btn-dark ms-2">Add</button>



  </form>
</div>

<hr>
<div id="transaction_data">

  <h2 class="text-center m-auto m-5" style="color: #efefef;background-color: #343a40f7;">Transactions for the day</h2>

  



  <table class="table" style="background-color: #8c97b8f5;" id="table_transaction">

    <thead class="thead-dark">

      <tr>

        <th scope="col" class="text-center">transaction id</th>

        <th scope="col" class="text-center"> item id</th>
        <th scope="col" class="text-center"> item name</th>

        <th scope="col" class="text-center"> quantity</th>

        <th scope="col" class="text-center "> Unit price</th>

        <th scope="col" class="text-center"> total</th>



        <th scope="col" class="text-center">created at</th>

        <th scope="col" class="text-center">updated at</th>

        <th scope="col" class="text-center">Action</th>

      </tr>

    </thead>

    <tbody id="transactions">



    </tbody>

  </table>



</div>
