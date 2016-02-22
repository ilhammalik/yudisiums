<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foto-pattern">
        <ul class="container breadcrumb">
            <li><a href="index-2.html">Home</a> <span class="divider">//</span></li>
            <li class="active">About</li>
        </ul>
    </div>
<div class="white-wrap">
<!--**************************Begin Contact descript*****************************-->    
	<section class="container contact-wrap">
        <div class="row">
        	<div class="col-md-12">
        		 <h1><?= Html::encode($this->title) ?></h1>

			    <p>This is the About page. You may modify the following file to customize its content:</p>

			    <code><?= __FILE__ ?></code>

        	</div>
			   
        </div>
	</section><!--**************************End Project descript*****************************-->
    
</div>