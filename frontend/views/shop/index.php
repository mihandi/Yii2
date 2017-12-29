<div class="site-content">
    <div class="container">
        <div class="row">
            <ul>
            <?php foreach ($categories as $category):?>
                <li><a href="/shop/index?category=<?= $category['id'] ?>"><?= $category['category']?></a></li>
            <?php endforeach;?>
            </ul>
            <ul class="products clearfix">
                <?php foreach($products as $product):?>
                <li>
                    <div class="product-inner">
                        <div class="product-thumbnail">
                            <a href="/shop/product?id=<?= $product['id']?>">
                                <img src="/images/products/1.jpg" alt="images">
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-info-wrap">
                                <h3><?= $product['title']?></h3>
                                <span class="price"><span class="amount"><span>$</span><?= $product['price']?></span></span>
                                <a href="/cart/add-to-cart?>" data-id="<?=$product['id']?>" class="flat-button bt-transform sm cl-white add-to-cart">Add to cart</a>

                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach;?>


            </ul><!-- /.products -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /#site-content -->