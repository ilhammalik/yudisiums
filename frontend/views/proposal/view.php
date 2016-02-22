<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\MyHelper;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $model frontend\models\Proposal */

$this->title = $model->proposal_id;
$this->params['breadcrumbs'][] = ['label' => 'Proposals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proposal-view">
    <div class="block">

        <div class="wp-posts-index">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'judul:ntext',
            'descs:ntext',
            [
            'label'=>'Nama Mahasiswa',
            'value'=>MyHelper::User($model->mahasiswa_id)->full_name,
            ],
            [
            'label'=>'Pembimbing',
            'value'=>MyHelper::User($model->dosen_id)->full_name,
            ],
            [
            'label'=>'Pembimbing 2',
            'value'=>MyHelper::User($model->dosen_id2)['full_name'],
            ], 
                      
        ],
    ]) ?>

</div>
</div>
    <div chttp://localhost/phpmyadmin/view_create.php?db=yudisium&table=proposal&printview=1&sql_query=SELECT+%2A+FROM+%60proposal%60&token=9f02478411ec6d9dab3ef8663cb71752lass="block">

        <div class="wp-posts-index">
        <table class="table table-striped table-bordered detail-view">
            <tr>
            <th width="400">Download FIle</th>
            <td><?= Html::a(Yii::t('app', 'Download'), ['unduh', 'ulama' => $model->file], ['class' => 'btn btn-primary']) ?></tr>
        </table>

</div>
</div>
</div>

