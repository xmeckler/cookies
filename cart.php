<?php
session_start();

$cart = $_SESSION['cart'];
$cookieNames = [46 => 'Pecan nuts', 36 => 'Chocolate chips', 58 => 'Chocolate cookie', 32 => 'M&M\'s&copy; cookies'];

if (isset($_SESSION['loginname'])) :
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <h2>Your shopping cart contains the following cookies:</h2>
    <div class="row">
      <?php foreach ($cart as $itemNb => $amount) :
          if ($amount >0) : ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $itemNb ?>.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $amount ?> <?= $cookieNames[$itemNb] ?></h3>
                </figcaption>
            </figure>
        </div>
        <?php endif;
        endforeach; ?>
    </div>
</section>
    <?php require 'inc/foot.php'; ?>
<?php else :
    header('Location: login.php');
endif;?>
