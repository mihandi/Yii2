<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Personal Area   ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">



    <div class="row team-item gtco-team">
        <div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
            <div class="img-shadow">
                <img src="images/<?= $user['img']??'default_img.jpg'?>" class="img-responsive" alt="picture of you">

                <div class="form-group">
                    <?= Html::submitButton('Upload Photo', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
            <h2><?= $user['first_name'].' '.$user['last_name']?></h2>
            <div class="row">
                <div class="col-lg-10">
                    <?php $form = ActiveForm::begin(['id' => 'personalarea-form']); ?>

                    <?= $form->field($user, 'first_name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($user, 'last_name')->textInput() ?>

                    <?= $form->field($user, 'rating')->textInput() ?>

                    <?= $form->field($user, 'city')->textInput() ?>

                    <?= $form->field($user, 'date_of_birth')->textInput() ?>

                    <?= $form->field($user, 'phone_number')->textInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'submit-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div>
    </div>




</div>

