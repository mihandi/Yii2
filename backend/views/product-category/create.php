<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProductCategory */

$this->title = 'Create Shop Category';
$this->params['breadcrumbs'][] = ['label' => 'Shop Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
