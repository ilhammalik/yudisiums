<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model frontend\models\DafGaji */

$this->title = $model->gaji_id;
$this->params['breadcrumbs'][] = ['label' => 'Daf Gajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-gaji-view">

    <h1>Detail Gaji</h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gaji_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->gaji_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
    
            'gaji_id',
            'nama',
            'jenis_id',
        ],
    ]) ?>

</div>
