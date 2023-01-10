  <!-- <tablei>
    <tr>
      <th>
        total transaction
      </th>
    </tr>
    <tr>
    <?php foreach ($data->transactions as $transaction) : ?>            
      <td><?= $transaction->total ?></td>
      <?php endforeach ?>
    </tr>
  </tablei> -->

<!-- <div class="row justify-content-between">
    <div class="col-sm-2 ml-4 my-5 pt-5">
        <div class="card mb-3">
            <div class="card-body" style="background-color: #EB5353;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                <h5 class="card-title text-center">total Items:(<?= $data->items_count ?>)</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-2 my-5 pt-5">
        <div class="card">
            <div class="card-body" style="background-color: #F9D923;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                <h5 class="card-title text-center">total Userss: (<?= $data->user_count ?>)</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-2 my-5 pt-5">
        <div class="card">
            <div class="card-body" style="background-color: #36AE7C;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                <h5 class="card-title text-center">transactions: (<?= $data->transactions_count ?>)</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-2 my-5 pt-5">
        <div class="card">
            <div class="card-body" style="background-color: #187498;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                <h5 class="card-title text-center">total sales: (<?= $transaction->total_seals ?>)</h5>
            </div>
        </div>
    </div> -->
    

    <!-- ------------------------------------------------------------- -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide mb-5 w-75 m-auto">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./resources/img/all items.png" class="d-block w-100" alt="..." style="height: 300px; width:50px;">
      <div class="carousel-caption  d-block w-25 m-auto h-75" style="background-color: #ffffffe3;">
        <h5 >total Items:(<?= $data->items_count ?>)</h5>
        <p>Our products have been carefully selected to please you.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="./resources/img/user_tour.jpg" class="d-block w-100" alt="..." style="height: 300px; width:50px;">
      <div class="carousel-caption  d-block w-25 m-auto h-75" style="background-color: #ffffffe3;">
        <h5 >total Userss: (<?= $data->user_count ?>)</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="./resources/img/all tans.jpg" class="d-block w-100" alt="..." style="height: 300px; width:50px;">
      <div class="carousel-caption  d-block w-25 m-auto h-75" style="background-color: #ffffffe3;">
        <h5 >transactions: (<?= $data->transactions_count ?>)</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="./resources/img/total ss.png" class="d-block w-100" alt="..." style="height: 300px; width:50px;">
      <div class="carousel-caption  d-block w-25 m-auto h-75" style="background-color: #ffffffe3;">
        <h5 >total sales: (<?= $transaction->total_seals ?>)</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<!-- ----------------------------------- -->

<!-- <hr style="border: solid 5px;"> -->

<div class="container w-75 mt-5" style="background-color: #212529;">
    <h1 class="d-flex justify-content-around" style="color: white;">top five item</h1>
</div>
    <table class="table table-dark table-hover w-75 m-auto">
  <thead>
    <tr>
      <th scope="col">item id</th>
      <th scope="col">item name</th>
      <th scope="col">price</th>
      <th scope="col">cost</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data->top_five as $top_fives) : ?>            
    <tr>
      <th scope="row"><?php echo $top_fives['id']?></th>
      <td><?php echo $top_fives['name']?></td>
      <td><?php echo $top_fives['silling_price']?></td>
      <td><?php echo $top_fives['cost']?></td>
      <?php endforeach ?>
    </tr>