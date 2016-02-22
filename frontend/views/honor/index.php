<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use hscstudio\mimin\components\Mimin;
use common\components\MyHelper;
use yii\helpers\Url;
use yii\bootstrap\Modal;
?>
<h1>Daftar Honor Dosen</h1>

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
                        'label' => 'Tahun Ajaran',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {

                                return MyHelper::Pem($data->pembimbing_id)['tahun'];

                            }
                    ],
                    
                      [
                            'class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width:230px; z-index:20;'],
                            'header' => 'Actions',
                            'template' =>'{delete}',
                            'buttons' => [

                                'delete'=> function ($url, $model){
                                    return  Html::a('<img src="' . Url::to(['/images/pdf.png']) . '" alt="Hapus" title="Hapus" width="25" height="25"/>', ['/honor/pdf', 'id' => Yii::$app->user->id,'honor'=>$model->pembimbing_id], [
                                          
                                        ]);
                                },
                           
                                    ],
                                ],
                ],
    ]); ?>