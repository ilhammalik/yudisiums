<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DafPem */

$this->title = 'Update Daf Pem: ' . ' ' . $model->pembimbing_id;
$this->params['breadcrumbs'][] = ['label' => 'Daf Pems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pembimbing_id, 'url' => ['view', 'id' => $model->pembimbing_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daf-pem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
