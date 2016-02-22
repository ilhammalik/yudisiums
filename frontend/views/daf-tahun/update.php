<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DafTahun */

$this->title = 'Update Daf Tahun: ' . ' ' . $model->id_tahun;
$this->params['breadcrumbs'][] = ['label' => 'Daf Tahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tahun, 'url' => ['view', 'id' => $model->id_tahun]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daf-tahun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
