<?php

use yii\helpers\Html;
use yii\grid\GridView;
use hscstudio\mimin\components\Mimin;
use common\components\MyHelper;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DafPemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Pembimbing' ;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-pem-index">

  <h1>Daftar Bimbingan Tugas AKhir</h1>
      
                <?php if ((Mimin::filterRoute($this->context->id . '/create'))) { ?>
                    <?= Html::a(Yii::t('app', 'Tambah Pembimbing'), ['create'], ['class' => 'btn btn-alt btn-sm btn-danger', 'data-toggle' => 'tooltip', 'title' => '', 'data-original-title' => 'Tambah User']) ?>


                <?php } ?>
     
        <div class="wp-posts-index">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    
                    [
                        'attribute' => 'prodi_id',
                        'label' => 'Nama Prodi',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if ($data->prodi_id>0){
                               return MyHelper::Prodi($data->prodi_id)['nama'];
                            }else{
                                return "<span class='label label-danger'>" . 'Tidak ada' . "</span>";
                                } 

                            }
                    ],

                    
                    //'prodi_id',
                   
                    [
                        'attribute' => 'dosen_id',
                        'label' => 'Nama Dosen',

                         'value' => function($data) {
                            if ($data->dosen_id>0){
                               return MyHelper::User($data->dosen_id)['full_name'];
                            }else{
                                return "<span class='label label-danger'>" . 'Tidak ada' . "</span>";
                                } 

                            }

                    ],
                    'tahun',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

</div>
</div>
</div>
