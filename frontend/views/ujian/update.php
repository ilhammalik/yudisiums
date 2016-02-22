<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ujian */

$this->title = 'Update Ujian: ' . ' ' . $model->uji_id;
$this->params['breadcrumbs'][] = ['label' => 'Ujians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uji_id, 'url' => ['view', 'id' => $model->uji_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ujian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
