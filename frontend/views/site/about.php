<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>

<ul>
    <?php if (Yii::$app->controller->route == 'site/index'):?>
        <li class="active main-nav" ><a href = "/" data-nav-section = "home"> Home</a></li>
        <li class="main-nav"><a href="/" data-nav-section = "about" > About</a></li>
        <li class="main-nav"><a href="/" data-nav-section = "our-team" > Our Team </a></li>
    <?php endif;?>

    <?php if (Yii::$app->user->isGuest): ?>
        <li class="btn-cta"><a href="/site/login"><span>Login</span></a></li>
        <li class="btn-cta"><a href="/site/signup"><span>Sign up</span></a></li>
    <?php else: ?>
        <li class="btn-cta"><a href="/site/personal-area" class="external"><span>Personal Area</span></a></li>
        <li class="btn-cta"><a href="/site/user-list" class="external"><span>Users</span></a></li>
        <li class="btn-cta"><a href="/site/logout" class="external"><span>Logout <?=Yii::$app->user->identity->username?></span></a></li>
    <?php endif;?>

</ul>