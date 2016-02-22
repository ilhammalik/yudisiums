<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DafGaji */

$this->title = 'Update Daf Gaji: ' . ' ' . $model->gaji_id;
$this->params['breadcrumbs'][] = ['label' => 'Daf Gajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gaji_id, 'url' => ['view', 'id' => $model->gaji_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daf-gaji-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
