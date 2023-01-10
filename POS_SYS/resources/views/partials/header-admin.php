<?php

use Core\Helpers\Helper;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walmart-Store</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">

    </script>

    <script src="https://use.fontawesome.com/c0444a4f04.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] ?>/resources/css/styles.css">
</head>

<body class="admin-view">

    <nav class="navbar  navbar-expand-lg" style="background-color: #132c74f7;">
        <div class="container-fluid ">
            <a class="navbar-brand px-2 fs-3" style="color: #ffffff;border-bottom:solid;border-top:solid;border-radius:15px;border-color:#1f1d368f;" href="/"><i class="fa-solid fa-cash-register mr-2"></i>Walmart-Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  flex-row-reverse " id="navbarSupportedContent">
                <!-- <div class="btn-group mx-2">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li>Welcome:<?= ($_SESSION['user']['username']); ?></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </div> -->
                <a class=" btn btn-danger" href="/logout">Logout</a>
                <img src="./resources/img/<?= $_SESSION['image']  ?>" class="mx-2" style="width: 50px;height: 50px; border-radius: 30px;" alt="user_photo">
                <li style="color: white;" class="fs-5">Welcome: (<?= ($_SESSION['user']['username']); ?>)</li>
                <!-- <li class="nav-item "><a class="nav-link" href="/logout" style="color: black;">Logout</a></li> -->
            </div>
        </div>
    </nav>

    <div id="admin-area" class="row flex-row-reverse ">
        <div class="col-2 admin-links">
            <ul class="list-group list-group-flush mt-3 ">
                <?php if (Helper::check_permission(['item:read'])) : ?>
                    <li class="list-group-item  d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-shop mx-2 fs-4" style="color: white;"></i>
                        <a href="/items">All itams</a>
                    </li>
                <?php endif;
                if (Helper::check_permission(['item:create'])) :
                ?>
                    <li class="list-group-item d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-square-plus mx-2 fs-4" style="color: white;"></i>
                        <a href="/items/create">Create items</a>
                    </li>
                <?php endif;
                if (Helper::check_permission(['transaction:read'])) : ?>
                    <li class="list-group-item d-flex justify-content-center align-items-center">
                        <i class="fa-brands mx-2 fs-4 fa-cc-visa" style="color: white;"></i>
                        <a href="/transactions">Silling dashboard</a>
                    </li>
                <?php endif;
                if (Helper::check_permission(['transaction:create'])) :
                ?>
                    <li class="list-group-item d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-cart-plus mx-2 fs-4" style="color: white;"></i>
                        <a href="/transactions/create">all transactions</a>
                    </li>
                <?php endif;
                if (Helper::check_permission(['user:read'])) :
                ?>
                    <li class="list-group-item d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-users mx-2 fs-4" style="color: white;" ></i>
                        <a href="/users">All Users</a>
                    </li>
                <?php endif;
                if (Helper::check_permission(['user:create'])) :
                ?>
                    <li class="list-group-item d-flex justify-content-center align-items-center ">
                        <i class="fa-solid fa-person-booth mx-2 fs-4" style="color: white;"></i>
                        <a href="/users/create">Create User</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="col-10 admin-area-content">
            <div class="container my-5">
                