<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model frontend\models\DafTahun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daf-tahun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textarea(['rows' => 1]) ?>


       <?php

        echo $form->field($model, 'status_id')->widget(Select2::classname(), [
            'data' => [1=>'Aktif',2=>'Tidak Aktif'],
            'options' => [
                'placeholder' => 'Status Tahun Ajaran',
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Status Tahun Ajaran');
        ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
