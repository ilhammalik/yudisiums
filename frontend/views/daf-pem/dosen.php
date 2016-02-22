<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model frontend\models\DafPem */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="row">
           <div class="col-md-6">
        <?php
        $data = ArrayHelper::map(\common\models\User::find()->where('status_id=2')->asArray()->all(), 'id', 'full_name');

        echo $form->field($model, 'user_id')->widget(Select2::classname(), [
            'data' => $data,
            'options' => [
                'placeholder' => 'Pilih Dosen',
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Nama Dosen');
        ?>
    </div>
     <div class="col-md-6">
            <?= $form->field($model, 'honor')->textInput(['rows' => 6]) ?>
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