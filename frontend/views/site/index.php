<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
  <?php
                switch (Yii::$app->user->identity->status_id) {
                	case 0: ?>
                        <div class="alert alert-danger">
			    			<strong>Pembaeritahuan : <span>Seluruh Mahasiswa Akan Mengikuti Ujian pada tanggal 14-April-2016</span></strong> 
						</div>
						<h1>Halaman Admin</h1>
							<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
					<div class="panel-heading">
						<strong>Info</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="#" method="POST">
							<fieldset>
								<div class="row">
									<div class="col-sm-12 col-md-offset-1 ">
									  <a href="<?= Url::to(['/site/index']) ?>" class="btn btn-primary btn-sm" role="button"><span class="glyphicon glyphicon-user"></span> <br/><h2>User</h2></a>
									  <a href="<?= Url::to(['/iam/user']) ?>" class="btn btn-success btn-md" role="button"><span class="glyphicon glyphicon-user"></span> <br/><h2>Daftar Jadwal Ujian</h2></a>
									  <a href="<?= Url::to(['/iam/role']) ?>" class="btn btn-info btn-md" role="button"><span class="glyphicon glyphicon-wrench"></span> <br/><h2>Daftar Jadwal Yudisium</h2></a>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
                </div>
                	<div class="panel panel-primary">
					<div class="panel-heading">
						<strong>Menu</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="#" method="POST">
							<fieldset>
								<div class="row">
									<div class="col-sm-12 col-md-offset-1 ">
									<a href="<?= Url::to(['/site/index']) ?>" class="btn btn-default btn-sm" role="button"><span class="glyphicon glyphicon-user"></span> <br/><h3>User</h3></a>
									  <a href="<?= Url::to(['/iam/user']) ?>" class="btn btn-primary btn-md" role="button"><span class="glyphicon glyphicon-user"></span> <br/><h3>Daftar User</h3></a>
									  <a href="<?= Url::to(['/iam/role']) ?>" class="btn btn-danger btn-md" role="button"><span class="glyphicon glyphicon-wrench"></span> <br/><h3>Daftar Role</h3></a>
									  <a href="<?= Url::to(['/prodi']) ?>" class="btn btn-success btn-md" role="button"><span class="glyphicon glyphicon-education"></span> <br/><h3>Daftar Prodi</h3></a>
									  <br>
									  <br>
									  <a href="<?= Url::to(['/jurusan']) ?>" class="btn btn-default btn-md" role="button"><span class="glyphicon glyphicon-education"></span> <br/><h3>Daftar Jurusan</h3></a>
									  <a href="<?= Url::to(['/daf-pem']) ?>" class="btn btn-primary btn-md" role="button"><span class="glyphicon glyphicon-book"></span> <br/><h3>Bimbingan</h3></a>
									  <a href="<?= Url::to(['/daf-gaji']) ?>" class="btn btn-danger btn-md" role="button"><span class="glyphicon glyphicon-envelope"></span> <br/><h3>Gaji</h3></a>
									  <a href="<?= Url::to(['/site/tahun-ajar']) ?>" class="btn btn-success btn-md" role="button"><span class="glyphicon glyphicon-stats"></span> <br/><h3>Tahun Ajaran</h3></a>
									  
                        
									</div>
								</div>
							</fieldset>
						</form>
					</div>
                </div>
		</div>
		<div class="col-md-4">

            <div class="panel panel-default coupon">
              <div class="panel-heading" id="head">
                <div class="panel-title" id="title">
                    <img src="http://i.imgur.com/IOL5F9T.png">
                    <span class="hidden-xs">Pengumuman Ujian Yudisium</span>
                    <span class="visible-xs">Automatic Transmission Service</span>
                </div>
              </div>
              <div class="panel-body">
                <img src="http://i.imgur.com/e07tg8R.png" class="coupon-img img-rounded">
            
                <div class="col-md-12">
                <br/>
                <br/>
                    <p class="disclosure">Using Genuine Oil Filter and 
                    multigrade oil up to vehicle specification. Lube as 
                    necessary. Ester Oil or Synthetic available at additional 
                    cost. Excludes hazardous waste fee, tax and shop supplies, 
                    where applicable. Offer not valid with previous charges or 
                    with any other offers or specials. Customer must offer at 
                    time of write-up. No cash value.</p>
                </div>
              </div>
              <div class="panel-footer">
                <div class="coupon-code">
               
                    <span class="print">
                        <a href="#" class="btn btn-link"><i class="fa fa-lg fa-print"></i> Print</a>
                    </span>
                </div>
                
              </div>
         
    </div>
    </div>
    </div>
    

	
                   <?php  break;
                	case 1: ?>
                        <div class="alert alert-danger">
			    			<strong>Pembaeritahuan : <span>Seluruh Mahasiswa Akan Mengikuti Ujian pada tanggal 14-April-2016</span></strong> 
						</div>
						<h1>Halaman Admin</h1>

							<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
					<div class="panel-heading">
						<strong>Info</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="#" method="POST">
							<fieldset>
								<div class="row">
									<div class="col-sm-12 col-md-offset-1 ">
									  <a href="<?= Url::to(['/site/index']) ?>" class="btn btn-primary btn-sm" role="button"><span class="glyphicon glyphicon-user"></span> <br/><h2>User</h2></a>
									  <a href="<?= Url::to(['/iam/user']) ?>" class="btn btn-success btn-md" role="button"><span class="glyphicon glyphicon-user"></span> <br/><h2>Daftar Jadwal Ujian</h2></a>
									  <a href="<?= Url::to(['/iam/role']) ?>" class="btn btn-info btn-md" role="button"><span class="glyphicon glyphicon-wrench"></span> <br/><h2>Daftar Jadwal Yudisium</h2></a>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
                </div>
                	<div class="panel panel-primary">
					<div class="panel-heading">
						<strong>Menu</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="#" method="POST">
							<fieldset>
								<div class="row">
									<div class="col-sm-12 col-md-offset-1 ">
									<a href="<?= Url::to(['/site/index']) ?>" class="btn btn-default btn-sm" role="button"><span class="glyphicon glyphicon-user"></span> <br/><h3>User</h3></a>
									  <a href="<?= Url::to(['/iam/user']) ?>" class="btn btn-primary btn-md" role="button"><span class="glyphicon glyphicon-user"></span> <br/><h3>Daftar User</h3></a>
									  <a href="<?= Url::to(['/iam/role']) ?>" class="btn btn-danger btn-md" role="button"><span class="glyphicon glyphicon-wrench"></span> <br/><h3>Daftar Role</h3></a>
									  <a href="<?= Url::to(['/prodi']) ?>" class="btn btn-success btn-md" role="button"><span class="glyphicon glyphicon-education"></span> <br/><h3>Daftar Prodi</h3></a>
									  <br>
									  <br>
									  <a href="<?= Url::to(['/jurusan']) ?>" class="btn btn-default btn-md" role="button"><span class="glyphicon glyphicon-education"></span> <br/><h3>Daftar Jurusan</h3></a>
									  <a href="<?= Url::to(['/daf-pem']) ?>" class="btn btn-primary btn-md" role="button"><span class="glyphicon glyphicon-book"></span> <br/><h3>Bimbingan</h3></a>
									  <a href="<?= Url::to(['/daf-gaji']) ?>" class="btn btn-danger btn-md" role="button"><span class="glyphicon glyphicon-envelope"></span> <br/><h3>Gaji</h3></a>
									  <a href="<?= Url::to(['/site/tahun-ajar']) ?>" class="btn btn-success btn-md" role="button"><span class="glyphicon glyphicon-stats"></span> <br/><h3>Tahun Ajaran</h3></a>
									  
                        
									</div>
								</div>
							</fieldset>
						</form>
					</div>
                </div>
		</div>
		<div class="col-md-4">

            <div class="panel panel-default coupon">
              <div class="panel-heading" id="head">
                <div class="panel-title" id="title">
                    <img src="http://i.imgur.com/IOL5F9T.png">
                    <span class="hidden-xs">Pengumuman Ujian Yudisium</span>
                    <span class="visible-xs">Automatic Transmission Service</span>
                </div>
              </div>
              <div class="panel-body">
                <img src="http://i.imgur.com/e07tg8R.png" class="coupon-img img-rounded">
            
                <div class="col-md-12">
                <br/>
                <br/>
                    <p class="disclosure">Using Genuine Oil Filter and 
                    multigrade oil up to vehicle specification. Lube as 
                    necessary. Ester Oil or Synthetic available at additional 
                    cost. Excludes hazardous waste fee, tax and shop supplies, 
                    where applicable. Offer not valid with previous charges or 
                    with any other offers or specials. Customer must offer at 
                    time of write-up. No cash value.</p>
                </div>
              </div>
              <div class="panel-footer">
                <div class="coupon-code">
               
                    <span class="print">
                        <a href="#" class="btn btn-link"><i class="fa fa-lg fa-print"></i> Print</a>
                    </span>
                </div>
                
              </div>
         
    </div>
    </div>
    </div>
    
	
                   <?php  break;
                    case 2: ?>
                        <div class="alert alert-danger">
			    			<strong>Pembaeritahuan : <span>Seluruh Mahasiswa Akan Mengikuti Ujian pada tanggal 14-April-2016</span></strong> 
						</div>
						<h1>Halaman Dosen</h1>
                   <?php  break;
                    case 3: ?>
                        <div class="alert alert-danger">
			    			<strong>Pembaeritahuan : <span>Seluruh Mahasiswa Akan Mengikuti Ujian pada tanggal 14-April-2016</span></strong> 
						</div>
						<h1>Halaman Mahasiswa</h1>
                    <?php  break;  } ?>
<div class="daf-pem-view">
			    

            </div>
       
 <style type="text/css">
.alert-danger{
	background-color: red;
	.coupon {
    border: 3px dashed #bcbcbc;
    border-radius: 10px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
    "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
    font-weight: 250;
}

.coupon #head {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    min-height: 56px;
}

.coupon #footer {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

#title .visible-xs {
    font-size: 12px;
}

.coupon #title img {
    font-size: 30px;
    height: 30px;
    margin-top: 5px;
}
h3{
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
    "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
    font-size: 15px;
}

h2{
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
    "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
    font-size: 10px;
    
}


body { padding-top:20px; }
.panel-body .btn:not(.btn-block) { width:150px;margin-bottom:5px; }

 </style>
