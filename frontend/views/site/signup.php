<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="action-area-mini">
    <div class="foto-pattern">
        <ul class="container breadcrumb">
            <li><a href="index-2.html">Home</a> <span class="divider">//</span></li>
            <li class="active">Contact</li>
        </ul>
    </div>        
</section>
<div class="white-wrap">
<!--**************************Begin Contact descript*****************************-->    
    <section class="container contact-wrap">
        <div class="row">
            <div class="span6 get-in-touch">
                <h2 class="section-title">Get in<span class="blue-text">SIGNUP</span></h2>
                <p class="simple-text-12"><strong>Please fill out the following fields to signup:</strong></p>
                <address>
                    <span class="widget-news-email">info@manageyourteam.net</span>
                </address>
            </div>
            <div class="span6">
                <form class="border-double messege-form text-center"method="post">
                    <input type="text" class="input-style pull-left" name="user-name" id="user-name" placeholder="Username:">
                    <input type="email" class="input-style pull-right" name="user-email" id="user-email" placeholder="Email:">
                    <input type="password" class="input-style" name="user-title" id="user-title" placeholder="password:">
                    <button type="button" class="btn btn-info btn-large" name="submit-btn"  value="Send Us Message">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGNUP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    <div id="response"></div>
                </form>
            </div>
        </div>
    </section><!--**************************End Project descript*****************************-->
    
</div>


