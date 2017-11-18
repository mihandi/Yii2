<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Personal Area   ';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="container">
    <?php foreach ($model as $user): ?>
<!--        --><?//=var_dump($user['last_name']);die();?>
    <section id="gtco-our-team" data-section="our-team">
        <div class="row team-item gtco-team-reverse">
            <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
                <div class="img-shadow">
                    <img src="/images/<?= $user['img']?>" class="img-responsive" alt="<?= $user['first_name'].' '.$user['last_name']?>">
                </div>
            </div>
            <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
                <h2><?=$user['first_name'].' '.$user['last_name']?></h2>
                <p><?= $user['bio']?></p>
            </div>
        </div>
    </section>
    <?php endforeach; ?>
</div>