<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jurusan */

$this->title = 'Update Jurusan: ' . ' ' . $model->jurusan_id;
$this->params['breadcrumbs'][] = ['label' => 'Jurusans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jurusan_id, 'url' => ['view', 'id' => $model->jurusan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jurusan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
