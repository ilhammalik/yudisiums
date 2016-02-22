<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model frontend\models\DafGaji */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daf-gaji-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

       <?php

        echo $form->field($model, 'jenis_id')->widget(Select2::classname(), [
            'data' => [1=>'Pembimbingan 1',2=>'Pembimbingan 2'],
            'options' => [
                'placeholder' => 'Pilih Jenis Pembimbingan',
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Pilih Pembimbingan');
        ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
