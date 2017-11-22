<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="gtco-loader"></div>

    <div id="page">

        <nav class="gtco-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div id="gtco-logo"><a href="/">Dream<em>team</em></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1 ">
                        <ul>
                            <?php if (Yii::$app->controller->route == 'site/index'):?>
                                <li class="active main-nav" ><a href = "/" data-nav-section = "home"> Home</a></li>
                                <li class="main-nav"><a href="/" data-nav-section = "about" > About</a></li>
                                <li class="main-nav"><a href="/" data-nav-section = "our-team" > Our Team </a></li>
                            <?php endif;?>

                            <?php if (Yii::$app->user->isGuest): ?>
                                <li class="btn-cta"><a href="/site/login" class="external"><span>Login</span></a></li>
                                <li class="btn-cta"><a href="/site/signup" class="external"><span>Sign up</span></a></li>
                            <?php else: ?>
                                <li class="btn-cta"><a href="/site/personal-area" class="external"><span>Personal Area</span></a></li>
                                <li class="btn-cta"><a href="/site/user-list" class="external"><span>Users</span></a></li>
                                <li class="btn-cta"><a href="/site/logout" class="external"><span>Logout <?=Yii::$app->user->identity->username?></span></a></li>
                            <?php endif;?>

                        </ul>
                        <!-- For external page link -->
                        <!-- <li><a href="http://freehtml5.co/" class="external">External</a></li> -->

                    </div>

                </div>
        </nav>
        <section id="gtco-hero" class="gtco-cover" style="background-image: url(/images/img_bg_4.jpg);"  data-section="home"  data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center">
                        <div class="display-t">
                            <div class="display-tc">
                                <h1 class="animate-box" data-animate-effect="fadeIn">The Greatest Firm You Can Trust</h1>
                                <p class="gtco-video-link animate-box" data-animate-effect="fadeIn">
                                    <a href="https://www.youtube.com/watch?time_continue=6&v=iCBCFECAK0Y" class="popup-vimeo"><i class="icon-controller-play"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?= Alert::widget() ?>
        </div>
        <div>
            <?= $content ?>

        </div>


        <footer id="gtco-footer" role="contentinfo">
            <div class="container">

                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; Mikhail 2017. All Rights Reserved.</small>
                        </p>
                        <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>



    </body>
    <?php $this->endBody() ?>
    </html>
<?php $this->endPage() ?>