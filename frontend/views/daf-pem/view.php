<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use hscstudio\mimin\components\Mimin;
use common\components\MyHelper;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model frontend\models\DafPem */

$this->title = $model->pembimbing_id;
$this->params['breadcrumbs'][] = ['label' => 'Daf Pems', 'url' => ['index']];
?>
<h3>Daftar Bimbingan Dosen</h3>
<div class="daf-pem-view">
    <div class="alert alert-success">
  <strong>Pembimbing Berdasarkan   : </strong> <?= MyHelper::User($model->dosen_id)['full_name'] ?>
</div>
  
<div class="daf-pem-view">
    <div class="alert alert-success">
  <strong>Jml Siswa   : </strong> 
  <?php
    $count = Yii::$app->db->createCommand("SELECT count(user_id) FROM d_pem_siswa where pembimbing_id=".$model->pembimbing_id)->queryScalar();
    echo $count;
 ?>
</div>
  

            <div class=" pull-right">
                <?php if ((Mimin::filterRoute($this->context->id . '/create'))) { ?>
                    <? 
                            echo '&nbsp;&nbsp;'.Html::button('<i class="fa fa-plus">Tambah Mahasiswa</i>', ['value' =>Url::to(['daf-pem/tambah', 'id' => $model->pembimbing_id]), 'class' => 'modalButton btn btn-danger', 'title' => 'view dokumen']);
                    ?>
                <?php } ?>
            </div>
        <div class="wp-posts-index">
        <h3>Daftar Mahasiswa diBimbing</h3>

        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    
                    [
                        'attribute' => 'user_id',
                        'label' => 'Mahasiswa',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if ($data->user_id>0){
                                return MyHelper::User($data->user_id)['full_name'] ;
                            }else{
                                return "<span class='label label-danger'>" . 'Tidak ada' . "</span>";
                                } 

                            }
                    ],

                        [
                        'attribute' => 'user_id',
                        'label' => 'Nip',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if ($data->user_id>0){
                                return MyHelper::User($data->user_id)['nip'];
                            }else{
                                return "<span class='label label-danger'>" . 'Tidak ada' . "</span>";
                                } 

                            }
                    ],
                                            [
                        'attribute' => 'gender',
                        'label' => 'Jenis Kelamin',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if(MyHelper::User($data->user_id)['gender']>0){
                                return 'Laki-Laki';
                            }else{
                                return 'Perempuan';
                                
                            }
                           
                            }
                            
                    ],


                         [
                        'attribute' => 'user_id',
                        'label' => 'Prodi',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if ($data->user_id>0){
                                return MyHelper::Prodi(MyHelper::User($data->user_id)->prodi_id)['nama'];
                            }

                            }
                    ],
                  
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width:230px; z-index:20;'],
                            'header' => 'Actions',
                            'template' => Mimin::filterTemplateActionColumn(['delete'], $this->context->route),
                            'buttons' => [

                                'delete'=> function ($url, $model){
                                    return  Html::a('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> ', ['/daf-pem/dels', 'id' => $model->p_siswa_id,'ids'=>$_GET['id']], [
                                           'class' => 'btn btn-danger',
                                             'data' => [
                                                'confirm' => 'Are you sure you want to delete this item?',
                                                'method' => 'post',
                                            ],
                                         
                                        ]);
                                },
                           
                                    ],
                                ],
                ],
    ]); ?>
</div>
</div>


   
            <div class=" pull-right">
                <?php if ((Mimin::filterRoute($this->context->id . '/create'))) { ?>
                    <? 
                            echo '&nbsp;&nbsp;'.Html::button('<i class="fa fa-plus">Tambah Honor Dosen</i>', ['value' =>Url::to(['daf-pem/dosen', 'id' => $model->pembimbing_id]), 'class' => 'modalButtonn btn btn-danger', 'title' => 'view dokumen']);
                    ?>

                <?php } ?>
            </div>
        <div class="wp-posts-index">
        <h3>Daftar Honor Dosen</h3>
        <?= GridView::widget([
                'dataProvider' => $dataDosen,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    
                    [
                        'attribute' => 'user_id',
                        'label' => 'Dosen',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if ($data->user_id>0){
                                return MyHelper::User($data->user_id)['full_name'];
                            }

                            }
                    ],

                         [
                        'attribute' => 'user_id',
                        'label' => 'Nik',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if ($data->user_id>0){
                                return MyHelper::User($data->user_id)['nip'];
                            }

                            }
                    ],
                                                [
                        'attribute' => 'gender',
                        'label' => 'Jenis Kelamin',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                                return MyHelper::User($data->user_id)['gender'];
                           
                            }
                    ],
                     [
                        'attribute' => 'user_id',
                        'label' => 'Prodi',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if ($data->user_id>0){
                                return MyHelper::Prodi(MyHelper::User($data->user_id)->prodi_id)['nama'];
                            }

                            }
                    ],
                    [
                        'label' => 'Biaya Honor',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {

                                return $data->honor;

                            }
                    ],
                    
                      [
                            'class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width:230px; z-index:20;'],
                            'header' => 'Actions',
                            'template' => Mimin::filterTemplateActionColumn(['delete'], $this->context->route),
                            'buttons' => [

                                'delete'=> function ($url, $model){
                                    return  Html::a('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> ', ['/daf-pem/del', 'id' => $model->p_dosen_id,'ids'=>$_GET['id']], [
                                           'class' => 'btn btn-danger',
                                             'data' => [
                                                'confirm' => 'Are you sure you want to delete this item?',
                                                'method' => 'post',
                                            ],
                                         
                                        ]);
                                },
                           
                                    ],
                                ],
                ],
    ]); ?>
</div>
</div>
</div>
</div>

<?php
//fungsi untuk membuat class js modal 
$js = <<<Modal
$(function () {
    $('.modalButton').click(function () {
        $('#modal').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
    });
})
$(function () {
    $('.modalButtonn').click(function () {
        $('#modall').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
    });
})
Modal;
$this->registerJs($js);

$this->registerJs($js);
?>

<?php

Modal::begin([
    'header' => 'Tambah Mahasiswa',
    'options' => [
        //'id' => 'modall',
        'tabindex' => false // important for Select2 to work properly
    ],
    'id' => 'modal',
    'size' => 'bigModal',
]);
echo "<div id='modalContent'></div>";
Modal::end();


Modal::begin([
    'header' => 'Tambah Honor Dosen',
    'options' => [
        //'id' => 'modall',
        'tabindex' => false // important for Select2 to work properly
    ],
    'id' => 'modall',
    'size' => 'bigModal',
]);
echo "<div id='modalContent'></div>";
Modal::end();

?> 

<style type="text/css">
  .modal.fade{
    height: 210px;
    width: 700px;
  }
</style>
