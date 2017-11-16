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
                    <div id="gtco-logo"><a href="#">Dream<em>team</em></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1 main-nav">
                    <ul>
                        <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                        <li><a href="#" data-nav-section="about">About</a></li>
                        <li><a href="#" data-nav-section="our-team">Our Team</a></li>
                        <li class="btn-cta"><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
                        <!-- For external page link -->
                        <!-- <li><a href="http://freehtml5.co/" class="external">External</a></li> -->
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <section id="gtco-hero" class="gtco-cover" style="background-image: url(images/img_bg_4.jpg);"  data-section="home"  data-stellar-background-ratio="0.5">
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

    <section id="gtco-about" data-section="about">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                    <h1>Welcome To Our Law Offices</h1>
                    <p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias au
                        tem provident. Odit ab aliquam dolor eius.</p>
                    <p class="subtle-text animate-box" data-animate-effect="fadeIn">Welcome</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img-shadow">
                        <img src="images/img_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <h2 class="heading-colored">Excellence &amp; Honesty   &amp; Coach</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut praesentium nihil hic quam culpa magnam ducimus suscipit repellat quidem cumque, unde impedit, labore earum eligendi perspiciatis nemo molestiae sequi veritatis. Veritatis, reprehenderit, eaque! Rerum, libero ipsam enim, iusto adipisci quae repellendus officia consequatur ducimus cupiditate impedit, aliquam numquam excepturi.</p>
                    <p><a href="#" class="read-more">Read more <i class="icon-chevron-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>



    <section id="gtco-our-team" data-section="our-team">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                    <h1>Our Team</h1>
                    <p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <p class="subtle-text animate-box" data-animate-effect="fadeIn">Our Team</p>
                </div>
            </div>
            <div class="row team-item gtco-team-reverse">
                <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
                    <div class="img-shadow">
                        <img src="images/img_team_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                    </div>
                </div>
                <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
                    <h2>Matvey Svetlichny</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
                    <p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
                </div>
            </div>

            <div class="row team-item gtco-team">
                <div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
                    <div class="img-shadow">
                        <img src="images/img_team_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <h2>Yulia Emelyanenko</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
                    <p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
                </div>
            </div>



            <div class="row team-item gtco-team-reverse">
                <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
                    <div class="img-shadow">
                        <img src="images/img_team_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                    </div>
                </div>
                <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
                    <h2>Karina Papyan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
                    <p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
                </div>
            </div>




        </div>
    </section>



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
