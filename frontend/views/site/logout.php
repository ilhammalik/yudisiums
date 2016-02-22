<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
<?php $form = ActiveForm::begin(); ?>

<div class="container">

  <div id="login-form">

    <h3>Login</h3>

    <div class="login-form fieldset">
        
      <form action="javascript:void(0);" method="get">

      <div class="login-form input type-username">
      <?= $form->field($model, 'username')->textInput(['maxlength' => true,'placeholder'=>"Username"])->label(false) ?>
      </div>

        <div class="login-form input type-password">
      <?= $form->field($model, 'password')->passwordInput(['maxlength' => true,'placeholder'=>"Password"])->label(false) ?>
        </div>
        
        <div class="login-form input type-submit">
         <?= Html::submitButton('SAVE')?>
         </div>

        
        <footer class="clearfix">

          <p><span class="info">?</span><a href="#">Forgot Password</a></p>

        </footer>

      </form>
      </div>
      </div>
      </div>

    </div>

  </div> <!-- end login-form -->

</div>
<?php ActiveForm::end(); ?>


<style type="text/css">
  $color: #999;
  $color-bg: #eaeaea;

  $font-family: sans-serif;
  $font-size: 14px;
  $font-weight: 400;

  $line-height: 1.5em;

  /* ---------- GENERAL ---------- */

  * {
    box-sizing: border-box;
    
    &:before,
    &:after {
      box-sizing: border-box;
    }
    
  }

body {
  background: $color-bg;
  color: $color;
  font: $font-weight #{$font-size}/#{$line-height} $font-family;
  margin: 0;
}

h3 { margin: 0; }

a {
  color: #999;
  text-decoration: none;
}

a:hover { color: #1dabb8; }

fieldset {
  border: none;
  margin: 0;
}

input {
  border: none;
  font-family: inherit;
  font-size: inherit;
  margin: 0;
  -webkit-appearance: none;
}

input:focus {
  outline: none;
}

input[type="submit"] { cursor: pointer; }

.clearfix {
  *zoom: 1;
  
  &:before,
  &:after {
    content: ' ';
    display: table;
  }
  
  &:after {
    clear: both;
  }
  
}

.container {
  left: 50%;
  position: fixed;
  top: 50%;
  transform: translate(-50%, -50%);
}

/* ---------- LOGIN-FORM ---------- */

#login-form {
  width: 300px;
}

#login-form h3 {
  background-color: #282830;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 14px;
  padding: 20px;
  text-align: center;
  text-transform: uppercase;
}

#login-form fieldset {
  background: #fff;
  border-radius: 0 0 5px 5px;
  padding: 20px;
  position: relative;
}

#login-form fieldset:before {
  background-color: #fff;
  content: "";
  height: 8px;
  left: 50%;
  margin: -4px 0 0 -4px;
  position: absolute;
  top: 0;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 8px;
}

#login-form input {
  font-size: 14px;
}

#login-form input[type="username"],
#login-form input[type="password"] {
  border: 1px solid #dcdcdc;
  padding: 12px 10px;
  width: 100%;
}

#login-form input[type="username"] {
  border-radius: 3px 3px 0 0;
}

#login-form input[type="password"] {
  border-top: none;
  border-radius: 0px 0px 3px 3px;
}

#login-form input[type="submit"] {
  background: #1dabb8;
  border-radius: 3px;
  color: #fff;
  float: right;
  font-weight: bold;
  margin-top: 20px;
  padding: 12px 20px;
}

#login-form input[type="submit"]:hover { background: #198d98; }

#login-form footer {
  font-size: 12px;
  margin-top: 16px;
}

.info {
  background: #e5e5e5;
  border-radius: 50%;
  display: inline-block;
  height: 20px;
  line-height: 20px;
  margin: 0 10px 0 0;
  text-align: center;
  width: 20px;
}
</style>