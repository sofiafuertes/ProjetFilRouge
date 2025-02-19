<main id="productsPage">

    <h1 class="pageTitle">Products</h1>
    <section class="containerCards">
        <div class="cards">
            <?php if (empty($products)): ?>
                <p class="emptyCard">There are no registered products</p>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <div id="productCard" style="" class="oneCard product"
                        data-name="<?= htmlspecialchars($product['product_name']) ?>">
                        <img src="<?= $product['photo_path'] ?>" alt="<?= htmlspecialchars($product['product_name']) ?>">
                        <h3><?= htmlspecialchars($product['product_name']) ?></h3>
                        <p><?= htmlspecialchars($product['product_description']) ?></p>
                        <p class="productPrice"><?= htmlspecialchars($product['product_price']) ?>€</p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

</main>