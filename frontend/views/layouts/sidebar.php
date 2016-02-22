<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use hscstudio\mimin\components\Mimin;
use yii\widgets\Menu;
use kartik\sidenav\SideNav;
use hscstudio\mimin\models\AuthAssignment;
?>
<?= Html::csrfMetaTags() ?>
<div id="sidebar">
    <div class="sidebar-scroll">
        <div class="sidebar-content">
            <center>
                <a href="./index.php.html" class="sidebar-brand">
                    Yudisium
                </a>
                <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                    <div class="sidebar-user-avatar">
                        <a href="page_ready_user_profile.php">
                            <img src="<?= Url::to(['/images/' . Yii::$app->user->identity->photo]) ?>" width="160px"/>
                        </a>
                    </div>
                    <div class="sidebar-user-name"><?= Yii::$app->user->identity->username ?></div>
                    <div class="sidebar-user-links">
                        <a href="page_ready_user_profile.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Profile"><i class="gi gi-user"></i></a>
                        <a href="page_ready_inbox.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Messages"><i class="gi gi-envelope"></i></a>
                        <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="" onclick="$('#modal-user-settings').modal('show');" data-original-title="Settings"><i class="gi gi-cogwheel"></i></a>
                        <a href="login.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Logout"><i class="gi gi-exit"></i></a>
                    </div>
                </div>
            </center>
            <?php
            $items = [
                ['label' => 'Home', 'url' => ['/site/index/']],
                ['label' => 'Pembimbing', 'url' => ['/daf-pem/index/']],
                ['label' => 'Proposal', 'url' => ['/proposal/index/']],
                ['label' => 'Jadwal Ujian', 'url' => ['/ujian/index/']],
                ['label' => 'Daftar Dosen', 'url' => ['/iam/user/dosen/']],
                ['label' => 'Daftar Mahasiswa', 'url' => ['/iam/user/siswa/']],
                ['label' => 'Pengaturan', 'url' => ['/iam/user/index/'], 'items' => [


                        ['label' => 'User Role', 'url' => ['/iam/role/index/']],
                        ['label' => 'User Permission', 'url' => ['/iam/role/index/']],
                        ['label' => 'Daftar Prodi', 'url' => ['/prodi/index/']],
                        ['label' => 'Daftar Jurusan', 'url' => ['/jurusan/index/']],
                        ['label' => 'Daftar Tahun Ajaran', 'url' => ['/daf-tahun/index/']],

                    ]],
            ];
            $items = Mimin::filterRouteMenu($items);
            if (count($items) > 0) {
                $menuItems[] = ['label' => 'Reporting', 'items' => $items];
            }
            echo SideNav::widget([
                'options' => ['class' => 'sidebar-nav red'],
                'encodeLabels' => false, // set this to nav-tab to get tab-styled navigation
                'items' => $items,
            ]);
            ?>

        </div>
    </div>
</div>
