<?php

use yii\helpers\Html;
use yii\grid\GridView;
use hscstudio\mimin\components\Mimin;
use frontend\models\User;
use common\components\MyHelper;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProposalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proposals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proposal-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <div class="block">
        <div class="block-title">
            <div class="block-options pull-left">
                <?= Html::a(Yii::t('app', '<i class="fa fa-list"></i>'), ['index'], ['class' => 'btn btn-alt btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => '', 'data-original-title' => 'Tambah User']) ?>
            </div>
            <h6><?= Html::encode($this->title) ?></h6>


            <div class="block-options pull-right">
                <?php if ((Mimin::filterRoute($this->context->id . '/create'))) { ?>
                    <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i>'), ['create'], ['class' => 'btn btn-alt btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => '', 'data-original-title' => 'Tambah User']) ?>


                <?php } ?>
            </div>
        </div>
        <div class="wp-posts-index">

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'judul:ntext',
                    'descs:ntext',
                
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

                    [
                        'attribute' => 'dosen_id',
                        'label' => 'Pembimbing',
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

                    [
                        'attribute' => 'dosen_id2',
                        'label' => 'Pembimbing 2',
                        'format' => 'raw',
                        'options' => [
                            'width' => '180px',
                        ],
                        'value' => function($data) {
                            if ($data->dosen_id2>0){
                                return MyHelper::User($data->dosen_id2)->full_name;
                            }else{
                                return "<span class='label label-danger'>" . 'Banned' . "</span>";
                                } 

                            }
                    ],
              
                     [
                            'class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width:230px; z-index:20;'],
                            'header' => 'Actions',
                            'template' => Mimin::filterTemplateActionColumn(['view','update','delete'], $this->context->route),
                            'buttons' => [

                                'view'=> function ($url, $model){
                                    return  Html::a('<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> ', ['/proposal/view', 'id' => $model->proposal_id], [
                                           'class' => 'modalButton btn btn-info',
                                         
                                        ]);
                                },
                           
                                    ],
                                ],
                ],
            ]);
            ?>

        </div>
    </div>
</div>
