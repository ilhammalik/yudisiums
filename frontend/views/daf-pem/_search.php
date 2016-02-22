<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DafPemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daf-pem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pembimbing_id') ?>

    <?= $form->field($model, 'prodi_id') ?>

    <?= $form->field($model, 'status_id') ?>

    <?= $form->field($model, 'dosen_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
