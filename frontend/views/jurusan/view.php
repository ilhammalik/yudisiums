<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\MyHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jurusan */

$this->title = $model->jurusan_id;
$this->params['breadcrumbs'][] = ['label' => 'Jurusans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurusan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->jurusan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->jurusan_id], [
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
            
            [
            'attribute' => 'jurusan_id',
            'value' => MyHelper::Prodi($model->jurusan_id)['nama'], 
            ],

            'nama:ntext',

            [
            'attribute' => 'prodi_id',
            'value' => MyHelper::Prodi($model->prodi_id)['nama'],
            ]
        ],
    ]) ?>

</div>
