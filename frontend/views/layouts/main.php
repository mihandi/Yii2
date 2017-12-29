<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>

    <!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">


    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body class="header-sticky page-loading">
<?php $this->beginBody() ?>
<div class="loading-overlay">
</div>

<!-- Boxed -->
<div class="boxed">
    <div id="site-header">
        <header id="header" class="header">
            <div class="header-wrap">
                <div class="container">
                    <div class="row">
                        <div id="logo" class="logo">
                            <a href="/">
                                <img src="/images/logo.png" alt="images">
                            </a>
                        </div><!-- /#logo -->

                        <div class="btn-menu">
                            <a href="#" class="btn-menu-mobi">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div><!-- //mobile menu button -->

                        <div class="nav-wrap">
                            <nav id="mainnav" class="mainnav">
                                <a href="#menu_desk" class="btn-menu-desk">
                                    <span class="nav-line"></span>
                                </a>
                                <ul class="menu">
                                    <li class="home">
                                        <a href="/" class="active">Home</a>
                                    </li>

                                    <li><a href="/site/about">About</a></li>

                                    <li><a href="/blog/index">Journal</a></li>
                                    <li><a href="/shop/index">Shop</a></li>
                                    <li><a href="#">Empty</a></li>
                                    <?php if (Yii::$app->user->isGuest): ?>
                                        <li><a href="/site/login">Login</a></li>
                                        <li><a href="/site/signup">Sign up</a></li>
                                    <?php else: ?>
                                        <li><a href="/site/personal-area">Personal Area</a></li>
                                        <li><a href="/site/logout">Logout <?=Yii::$app->user->identity->username?></span></a></li>
                                    <?php endif;?>


                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-wrap -->
        </header><!-- /.header -->
    </div><!-- /#site-header -->


    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <?= $content ?>
    </div>


    <!-- Footer -->
    <div id="site-footer">
        <div class="container">
            <div class="row">
                <div class="site-footer-inner">
                    <div id="footer-widgets">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <div class="say-hello">
                                    <h3>We're ready to work <a href="#" class="link">start a project</a></h3>
                                    <ul>
                                        <li>+84 9 [0] 606 507</li>
                                        <li><a href="#">Say Hello</a></li>
                                        <li><a href="#">Get Directions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /#footer-widgets -->

                    <div id="footer-content">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>

                        <div class="copyright">
                            <div class="copyright-content">
                                <div id="text-6" class="widget widget_text">
                                    <div class="textwidget">
                                        <img src="/images/logo-ft.png" alt="images">© 2017 Mikhail. All Rights Reserved.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /#footer-content -->
                </div><!-- /.site-footer-inner -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /#site-footer -->

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-chevron-up"></i>
    </a>

</div>
<?php
Modal::begin([
    'header' => '<h2>Cart</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '
                <button type="button" class="btn btn-success" onclick="Order()">Buy All</button>
                
                <button class="btn btn-danger" onclick="clearCart()">Clear Cart</button>'
]);


Modal::end();
?>
<script>


    function showCart(cart) {
        $('#cart .modal-body').html(cart);
        $('#cart').modal();
    }

    function clearCart() {
            $.ajax({
                url: '/cart/clear-cart',
                type: 'GET',
                success: function (res) {
                    if(!res){alert('product does not exist');}
                    showCart(res);
                },
                error:function () {
                    alert('Error');
                }

            });
    }

    function Order() {
        $.ajax({
            url: '/cart/order',
            type: 'GET',
            success: function (res) {

            },
            error:function () {
                alert('Error');
            }

        });
    }
</script>

</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>


