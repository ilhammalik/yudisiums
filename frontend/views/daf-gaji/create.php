<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DafGaji */

$this->title = 'Tambah Gaji';
$this->params['breadcrumbs'][] = ['label' => 'Daf Gajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-gaji-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
