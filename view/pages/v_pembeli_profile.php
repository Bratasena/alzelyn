<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 19/10/2018
 * Time: 10:44
 */

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brand</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="stylesheet" href="resources/css/Mockup-MacBook-Pro.css">
    <link rel="stylesheet" href="resources/css/id.css">
</head>

<body>
<a href="?controller=home&action=homePembeli">
    <img src="resources/images/logoal.jpg" width="100%" href="?controller=home&action=homePembeli"/>
</a>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="dropdown">
                <a href="?controller=home&action=homePembeli">Home </a>
            </li>

            <li class="dropdown">
                <a href="?controller=produk&action=showProdukPembeli&page=1">Produk </a>
            </li>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="?controller=keranjang&action=showCartPembeli"><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang</a></li>
                <li><a href="?controller=transaksi&action=showTransaksiPembeli"><span class="glyphicon glyphicon-paperclip"></span> Riwayat</a></li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        <?=$_SESSION['user']?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?controller=user&action=showProfilePembeli">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?php
        foreach ($list as $item) {
            ?>
            <div class="col-md-7 col-md-offset-2">
                <form class="form-horizontal custom-form">
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label">Username </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" disabled="disabled" value="<?=$item['username']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label">Name </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" disabled="disabled" value="<?=$item['nama']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label">Email </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="email" disabled="disabled" value="<?=$item['email']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label">Phone </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" disabled="disabled" value="<?=$item['no_tlp']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label">Address </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" disabled="disabled" value="<?=$item['alamat']?>">
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <a href="?controller=user&action=showEditProfilePembeli">
                        <button class="btn btn-primary">Update Profile</button>
                    </a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<footer class="container-fluid text-center">
    <br><br><br><br><br>
    <p>Online Store </p>
    <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Subscribe</button>
    </form>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
