<div class="site-content">
    <div class="container">
        <div class="row">
            <div class="products-detail">
                <div class="products-detail-image">
                    <img src="/images/products/1.jpg" alt="images">
                </div><!-- /.products-detail-image -->
                <div class="summary">
                    <h1 class="product_title entry-title"><?= $model['title']?></h1>
                    <div>
                        <p class="price"><span class="amount"><span>$</span><?= $model['price']?></span></p>
                    </div>
                    <div>
                        <p><?= $model['description']?></p>
                    </div>
                    <div class="cart">
                        <div class="quantity">
                            <input type="number" min="1" name="quantity" value="1" class="input-text qty text" pattern="[0-9]*">
                        </div>
                        <a href="/cart/add-to-cart?>" data-id="<?=$model['id']?>" class="flat-button bt-transform sm cl-white add-to-cart">Add to cart</a>
                    </div>
                    <div class="product_meta">
                        <span class="posted_in">Category: <a href="/shop/index?category=<?= $model['category_id']?>"><?= $model['category']?></a></span>
                    </div>
                </div><!-- /.summary -->
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li class="description_tab active">
                            <a href="#">Description</a>
                        </li>
                        <li>
                            <a href="#">Additional Information</a>
                        </li>
                        <li class="reviews_tab">
                            <a href="#">Reviews (0)</a>
                        </li>
                    </ul>
                    <div class="content-tab">
                        <div class="content-inner">
                            <p>Pellentesque habitant morb
                                i tristique senectus et net
                                us et malesuada fames ac turp
                                is egestas. Vestibulum tortor q
                                uam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libe

                                ro sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                        <div class="content-inner">
                            <table class="shop_attributes">
                                <tbody>
                                <tr>
                                    <th>Color</th>
                                    <td><p>White</p></td>
                                </tr>
                                <tr class="alt">
                                    <th>Shape</th>
                                    <td><p>2D</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="content-inner">
                            <div id="reviews">
                                <div id="comments">
                                    <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <h5 id="reply-title" class="comment-reply-title">Be the first to review “Penguins”</h5>
                                            <form id="commentform" class="comment-form">
                                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                                <div class="comment-form-rating">
                                                    <label>Your Rating</label>
                                                    <p class="stars">
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </p>
                                                </div>
                                                <div class="comment-form-comment">
                                                    <label>Your Review</label>
                                                    <textarea id="comment" name="comment"></textarea>
                                                </div>
                                                <div class="comment-form-author">
                                                    <label>Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="">
                                                </div>
                                                <div class="comment-form-email">
                                                    <label>Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="">
                                                </div>
                                                <div class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                </div>
                                            </form>
                                        </div><!-- /.omment-respond -->
                                    </div><!-- /#review_form -->
                                </div><!-- /#review_form_wrapper -->
                            </div><!-- /#reviews -->
                        </div><!-- /.content-inner -->
                    </div><!-- /.content-tabs -->
                </div><!-- /.woocommerce-tabs -->

                <div class="related-products">
                    <h2>Related Products</h2>
                    <ul class="products">
                        <li>
                            <div class="product-inner">
                                <div class="product-thumbnail">
                                    <a href="shop-detail.html">
                                        <img src="/images/products/2.jpg" alt="images">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-info-wrap">
                                        <h3>Symbol</h3>
                                        <span class="price"><span class="amount"><span>$</span>40.00</span></span>
                                        <a href="#" class="flat-button bt-transform sm cl-white">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-inner">
                                <div class="product-thumbnail">
                                    <a href="shop-detail.html">
                                        <span class="onsale">Sale!</span>
                                        <img src="/images/products/5.jpg" alt="images">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-info-wrap">
                                        <h3>Fox Logo</h3>
                                        <span class="price">
                                                    <del><span class="amount"><span>$</span>30.00</span></del>
                                                    <span class="amount"><span>$</span>19.00</span></span>
                                        <a href="#" class="flat-button bt-transform sm cl-white">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-inner">
                                <div class="product-thumbnail">
                                    <a href="shop-detail.html">
                                        <img src="/images/products/9.jpg" alt="images">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-info-wrap">
                                        <h3>Logo idea bear</h3>
                                        <span class="price"><span class="amount"><span>$</span>10.00</span></span>
                                        <a href="#" class="flat-button bt-transform sm cl-white">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.related-products -->
            </div><!-- /.products-detail -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /#site-content -->