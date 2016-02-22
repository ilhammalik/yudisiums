<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use kartik\icons\Icon;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>

<meta charset="utf-8" />
<title>Ilham Malik Ibrahim</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
<?php $this->head() ?>
<link rel="shortcut icon" href="./img/favicon.ico" />

<body>
 <?php $this->beginBody() ?>
 <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>