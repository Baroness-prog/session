<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php require 'session.php'; ?>


<section class="cookies container-fluid">
    <div class="row">
        <?php if(isset($_SESSION['cookies'])): ?>
            <ul>
                <?php $cookies = $_SESSION['cookies'];

                foreach ($cookies as $id => $sum) {
                    if (isset($catalog)) {
                        $productName = $catalog[$id]['name'];
                    } ?>
                    <li><?= $sum .' - '. $productName ?></li>
                <?php }  ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
