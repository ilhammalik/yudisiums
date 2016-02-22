<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Proposal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proposal-form">
    <div class="block">
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="" data-original-title="Post Options"><i class="fa fa-pencil"></i></a>
            </div>
            <h2><strong>Input Proposal</strong> Mahasiswa</h2>
        </div>
           <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'judul')->textInput(['rows' => 6]) ?>

        <?= $form->field($model, 'descs')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'file')->fileInput() ?>

        <?= $form->field($model, 'maha')->textInput(['readOnly' => true, 'value' => Yii::$app->user->identity->full_name])->label('Nama Mahasiswa') ?>

        <?= $form->field($model, 'mahasiswa_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>

        <?php
        $data = ArrayHelper::map(\common\models\User::find()->asArray()->all(), 'id', 'full_name');

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
        echo $form->field($model, 'dosen_id2')->widget(Select2::classname(), [
            'data' => $data,
            'options' => [
                'placeholder' => 'Pilih Dosen Pembimbing II',
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Dosen Pembimbing II');
        ?>


    </div>




</div>
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