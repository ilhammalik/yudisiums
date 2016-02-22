<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Prodi */

$this->title = $model->prodi_id;
$this->params['breadcrumbs'][] = ['label' => 'Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-view">

    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->prodi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Back',['/prodi'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('Delete', ['delete', 'id' => $model->prodi_id], [
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
            'nama:ntext',
        ],
    ]) ?>

</div>
