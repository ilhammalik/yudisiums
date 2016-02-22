<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\components\MyHelper;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UjianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Ujian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ujian-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Ujian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_uji',
            'tmpt:ntext',
            [
                'attribute' => 'dosen_id',
                'label' => 'Dosen Penguji',
                'format' => 'raw',
                'options' => [
                    'width' => '180px',
                ],
                'value' => function($data) {
                    if ($data->dosen_id>0){
                        return MyHelper::User($data->dosen_id)->full_name;
                    }
                    }
            ],
            [
                'attribute' => 'penguji_id',
                'label' => 'Dosen Penguji',
                'format' => 'raw',
                'options' => [
                    'width' => '180px',
                ],
                'value' => function($data) {
                    if ($data->penguji_id>0){
                        return MyHelper::User($data->penguji_id)->full_name;
                    }
                    }
            ],
             [
                'attribute' => 'mahasiswa_id',
                'label' => 'Mahasiswa',
                'format' => 'raw',
                'options' => [
                    'width' => '180px',
                ],
                'value' => function($data) {
                    if ($data->mahasiswa_id>0){
                        return MyHelper::User($data->mahasiswa_id)->full_name;
                    }else{
                        return "<span class='label label-danger'>" . 'Banned' . "</span>";
                        } 

                    }
            ],
             'nilai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
