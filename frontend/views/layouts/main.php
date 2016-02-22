<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <header class="header-height">

    <div class="main-nav-wrap">
        <div class="blue-line-wrap">
            <nav class="main-navbar container">     
                <div class="logo pull-left">
                    <a href="index-2.html">
                        <h1 class="logo-text">Yudisium</h1>                   
                    </a>
                </div>
                <div id="navigation-box"  class="pull-right">
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon"></span>
                    </a>
                    <ul id="navigation">
                    <li><?= Html::a(Yii::t('app', 'Home'), ['/site/']) ?></li>
                          <?php
                          //ini membuat logik jika status_id  berdasarkan role masing2
                          //Yii::$app->user->identity->status_id telah dibuat pada fungsi di common
                                switch (Yii::$app->user->identity->status_id) {
                                    case 0: ?>
                                         <li><?= Html::a(Yii::t('app', 'Bimbingan Mahasiswa'), ['/daf-pem']) ?></li>
                                   <?php  break;
                                    case 2: ?>
                                        <!-- Awal Menu Mahasiswa -->
                                            <li><?= Html::a(Yii::t('app', 'Bimbingan Mahasiswa'), ['/daf-pem', 'id' => Yii::$app->user->id]) ?></li>
                                         <!-- Akhir Menu Mahasiswa -->
                                        
                                    <?php  break;  } ?>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#"><?= Yii::$app->user->identity->username ?></a>
                            <ul>
                                <li><?= Html::a(Yii::t('app', 'Profile'), ['/iam/user/vprofile', 'id' => Yii::$app->user->id]) ?></li>
                                <li><?= Html::a(Yii::t('app', 'Ubah Profile'), ['/iam/user/profile', 'id' => Yii::$app->user->id]) ?></li>

                                <?php
                                switch (Yii::$app->user->identity->status_id) {
                                    case 2: ?>
                                         <li><?= Html::a(Yii::t('app', 'Laporan Honor'), ['/honor']) ?></li>
                                   <?php  break;
                                    case 3: ?>
                                        <!-- Awal Menu Mahasiswa -->
                                            <li><?= Html::a(Yii::t('app', 'Jadwal Ujian'), ['/ujian', 'id' => Yii::$app->user->id]) ?></li>
                                            <li><?= Html::a(Yii::t('app', 'Proposal'), ['/proposal/view', 'id' => Yii::$app->user->id]) ?></li>
                                            
                                            <li>
                                         <!-- Akhir Menu Mahasiswa -->
                                        
                                    <?php  break;  } ?>
                               
                               
                                <?=
                                    Html::a(Yii::t('app', ' <i class="fa fa-sign-out fa-fw"></i> Logout'), ['/site/logout'], [
                                        //'class' => 'btn btn-danger',
                                        'data' => [
                                            //'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ])
                                    ?>
                            </ul>
                        </li>

                                <?php
                                switch (Yii::$app->user->identity->status_id) {
                                    case 1: ?>
                                           <li>
                                                <span class="sub-nav-toggle plus"></span>
                                                <a href="#">Pengaturan</a>
                                                <ul>
                                                    <li><?= Html::a(Yii::t('app', 'Daftar User'), ['/iam/user']) ?></li>
                                                    <li><?= Html::a(Yii::t('app', 'Daftar Role'), ['/iam/role']) ?></li>
                                                    <li><?= Html::a(Yii::t('app', 'Daftar Prodi'), ['/prodi']) ?></li>
                                                    <li><?= Html::a(Yii::t('app', 'Daftar Jurusan'), ['/jurusan']) ?></li>
                                                    <li><?= Html::a(Yii::t('app', 'Bimbingan'), ['/daf-pem']) ?></li>
                                                     <li><?= Html::a(Yii::t('app', 'Daftar Gaji'), ['/daf-gaji/index/']) ?></li>
                                                     <li><?= Html::a(Yii::t('app', 'Tahun Ajaran'), ['/daf-gaji/index/']) ?></li>

                                                </ul>
                                            </li>
                                  
                                    <?php  break;  } ?>
                               
                               
                     
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header><!--**************************End Header*****************************-->

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Yudisium <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
