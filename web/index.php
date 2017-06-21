<?php
require_once './src/Product';
require '../connection.php';

$products = Product::findAll($connection);
?>


<body>
    <?php foreach ($products as $product) { ?>
        <p><?php $product->getName() ?></p>
    <?php } ?>
</body>