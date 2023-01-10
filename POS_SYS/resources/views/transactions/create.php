<hr>
<div id="transaction_data">

  <h2 class="text-center m-auto m-5" style="color: #efefef;background-color: #343a40f7;">All Transactions :(<?= $data->transactions_count ?>)</h2>





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
  
    <tbody >
      <?php $count=0;?>
    <?php foreach ($data->transactions as $transaction) : ?>            
    <tr >
                        <td class="text-center"><?php echo $transaction->id?></td>
                        <td class="text-center"><?php echo $transaction->item_id?></td>
                        <td class="text-center"><?php echo $transaction->item_name?></td>
                        <td class="text-center"><?php echo $transaction->quantity?></td>
                        
                        <td class="text-center" ><?php echo $transaction->price?></td>
                        <td class="text-center"><?php echo $transaction->total?></td>
                        <td class="text-center" ><?php echo $transaction->created_at?></td>
                        <td class="text-center"><?php echo $transaction->updated_at?></td>
                        <td class="text-center">
                        <a href="/transactions/edit?id=<?php echo $transaction->id?>"  class="text-center btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="/transactions/delete?id=<?php echo $transaction->id?>" class="text-center btn btn-danger" ><i class="fa-solid fa-trash"></i></a>
                        </td>
                        <?php $x= $transaction->total.'$';
                        @$count+=$x;
                        ?>
                        <?php endforeach ?>
                        </tr>
    </tbody>
  </table>
  <div class="d-flex">
  <h2 class="btn btn-warning flex-row-reverse">
  TOTAL SALES: (<?=$count?>) JOD
  </h2>
  </div>
</div>
<script></script>
<!-- ------------------------------------ -->
