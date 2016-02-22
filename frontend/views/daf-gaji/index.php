<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DafGajiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daf Gajis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-gaji-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah  Gaji', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            [
            'filter'=>['Pembimbing 1','Pembimbing 2'],
            'label'=>'Jenis Pembimbing',
            'value'=>function($data){
                if($data['jenis_id']>1){
                    return 'Pembimbing 1';
                }else{

                    return 'Pembimbing 2';
                }
            }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
