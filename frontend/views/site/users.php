<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Personal Area   ';
$this->params['breadcrumbs'][] = $this->title;
$i = 0;
?>

<div class="container" data-objs="Users">
    <?php foreach ($model as $user): ?>
        <?php if($i%2 == 0):?>
            <section id="gtco-our-team" data-section="our-team">
                <div class="row team-item gtco-team-reverse">
                    <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight" id="1">
                        <div class="img-shadow">
                            <img src="/images/users/<?= $user['img']??'default_img.jpg'?>" class="img-responsive" alt="<?= $user['first_name'].' '.$user['last_name']?>">
                        </div>
                    </div>
                    <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight" id="2">
                        <h2><?=$user['first_name'].' '.$user['last_name']?></h2>
                        <p><?= $user['bio']?></p>
                    </div>
                </div>
        <?php else: ?>
            <div class="row team-item gtco-team">
                <div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
                    <div class="img-shadow">
                        <img src="/images/users/<?= $user['img']??'default_img.jpg'?>" class="img-responsive" alt="<?= $user['first_name'].' '.$user['last_name']?>">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <h2><?=$user['first_name'].' '.$user['last_name']?></h2>
                    <p><?= $user['bio']?></p>
                </div>
            </div>
        <?php endif; $i++?>
    </section>


    <?php endforeach; ?>
</div>


<script>
    document.getElementById('1').setAttribute('data-animate-effect','asdsaasdasdsad');
</script>