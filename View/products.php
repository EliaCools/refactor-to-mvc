<?php
require 'shared/header.php'
?>

<body>
<?php foreach ($products as $product) : ?>
    <div>
        <h2><?= $product->getName() ?></h2>
        <p>Price (tax included): €<?= $product->getRoundedPriceWithTax() ?></p>
    </div>
<?php endforeach; ?>
</body>
</html>

