<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DafTahun */

$this->title = 'Tambah Tahun Ajaran Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daf Tahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-tahun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
