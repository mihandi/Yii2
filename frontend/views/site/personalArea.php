<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Personal Area   ';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="container">
    <section id="gtco-about" data-section="about">
            <?php $form = ActiveForm::begin(['options' =>['enctype' => 'multipart/form-data']]); ?>

        <div class="row">
            <div class="col-md-6 col-md-pull-1">
                <div>
                    <img src="/images/users/<?= $user['img']??'default_img.jpg'?>" class="img-responsive" width="550" height="250"  alt="picture of you">
                </div>
                <?= $form->field($user, 'file')->fileInput() ?>

            </div>

            <div class="col-md-6">
                <h2><?= $user['first_name'].' '.$user['last_name']?></h2>
                <div class="row">
                    <div class="col-lg-10">
                         <?= $form->field($user, 'first_name')->textInput(['autofocus' => true]) ?>

                         <?= $form->field($user, 'last_name')->textInput() ?>

                         <?= $form->field($user, 'rating')->textInput() ?>

                         <?= $form->field($user, 'city')->textInput() ?>

                         <?= $form->field($user, 'phone_number')->textInput() ?>
                    </div>
                </div>
            </div>
        </div>
        <div>
             <?= $form->field($user, 'bio')->textarea(['rows' => '7']) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'submit-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </section>
</div>




