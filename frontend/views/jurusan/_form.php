<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model frontend\models\Jurusan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jurusan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['rows' => 6]) ?>

        <?php
        $data = ArrayHelper::map(\frontend\models\Prodi::find()->asArray()->all(), 'prodi_id', 'nama');

        echo $form->field($model, 'prodi_id')->widget(Select2::classname(), [
            'data' => $data,
            'options' => [
                'placeholder' => 'Pilih Prodi',
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Pilih Prodi');
        ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
