<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DafPem */

$this->title = 'Create Daf Pem';
$this->params['breadcrumbs'][] = ['label' => 'Daf Pems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-pem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
