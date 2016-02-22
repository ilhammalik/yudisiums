<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Proposal */

$this->title = 'Update Proposal: ' . ' ' . $model->proposal_id;
$this->params['breadcrumbs'][] = ['label' => 'Proposals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->proposal_id, 'url' => ['view', 'id' => $model->proposal_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="proposal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
