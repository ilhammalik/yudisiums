<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\UjianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ujian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'uji_id') ?>

    <?= $form->field($model, 'tgl_uji') ?>

    <?= $form->field($model, 'tmpt') ?>

    <?= $form->field($model, 'dosen_id') ?>

    <?= $form->field($model, 'penguji_id') ?>

    <?php // echo $form->field($model, 'mahasiswa_id') ?>

    <?php // echo $form->field($model, 'nilai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
