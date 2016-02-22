<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Proposal */

$this->title = 'Input Proposal';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Proposal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proposal-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
