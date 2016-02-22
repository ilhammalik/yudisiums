<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper
/* @var $this yii\web\View */
/* @var $model frontend\models\Ujian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ujian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

        echo $form->field($model, 'tgl_uji')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose'=>true
        ]
    ]);

    ?>

    <?= $form->field($model, 'tmpt')->textarea(['rows' => 6]) ?>

    <?php
        $data = ArrayHelper::map(\common\models\User::find()->where('status_id=2')->asArray()->all(), 'id', 'full_name');

        echo $form->field($model, 'dosen_id')->widget(Select2::classname(), [
            'data' => $data,
            'options' => [
                'placeholder' => 'Pilih Dosen Pembimbing',
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Dosen Pembimbing');
        ?>


        <?php
        $data = ArrayHelper::map(\common\models\User::find()->where('status_id=2')->asArray()->all(), 'id', 'full_name');

        echo $form->field($model, 'penguji_id')->widget(Select2::classname(), [
            'data' => $data,
            'options' => [
                'placeholder' => 'Pilih Dosen Penguji',
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Dosen Penguji');
        ?>

            <?php
        $data = ArrayHelper::map(\common\models\User::find()->where('status_id=3')->asArray()->all(), 'id', 'full_name');

        echo $form->field($model, 'mahasiswa_id')->widget(Select2::classname(), [
            'data' => $data,
            'options' => [
                'placeholder' => 'Pilih Mahasiswa',
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Mahasiswa');
        ?>




    <?= $form->field($model, 'nilai')->textInput(['maxlength' => true]) ?>
    
    <div class="row">
           <div class="col-md-6">
            <div class="pull-left">
                    <?= Html::a(Yii::t('app', 'Batal'), ['create'], ['class' => 'btn btn-alt btn-sm btn-success']) ?>
            </div>
           </div>
             <div class="col-md-6">

            <div class="pull-right">
                    <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Ubah', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
                            </div>


            <?php ActiveForm::end(); ?>
        </div>
