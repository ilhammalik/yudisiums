<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\components\MyHelper;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JurusanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Jurusan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurusan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Jurusan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nama:ntext',
            [
                        'attribute' => 'prodi_id',
                        'label' => 'Nama Dosen',
                        'filter' => [1 => 'Teknik Informatika', 2 => 'Sistem Informasi'],
                         'value' => function($data) {
                            if ($data->prodi_id>0){
                               return MyHelper::Prodi($data->prodi_id)['nama'];
                            }else{
                                return "<span class='label label-danger'>" . 'Tidak ada' . "</span>";
                                } 

                            }

                    ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
