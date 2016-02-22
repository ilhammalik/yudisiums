<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProposalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proposal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'proposal_id') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'descs') ?>

    <?= $form->field($model, 'file') ?>

    <?= $form->field($model, 'mahasiswa_id') ?>

    <?php // echo $form->field($model, 'dosen_id') ?>

    <?php // echo $form->field($model, 'dosen_id2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
