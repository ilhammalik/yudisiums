<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>

<div class="container-fluid">

	<div class="row">
  	
	 
    <div class="col-md-4">
    </div>
		<div class="col-md-3">
				<div style="margin-center:0px;" class="lg-container">

		<center><img src="<?= Url::to(['/images/login.png'])?>"  width="70%"height="55"/></center>
		<?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'form-horizontal form-bordered form-control-borderless'],]); ?>
			<table width="95%">
        <tr>
          <td  align="center">
            <label ><font color="white">Username</font></label>
            
          </td>
          <td>

           <?= $form->field($model, 'username')->textInput(['maxlength' => true,'placeholder'=>"Username"])->label(false) ?>
          </td>
        </tr>   
          <tr>
          <td align="center">
            <label><font color="white">Password</font></label>
          </td>
          <td>
        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true,'placeholder'=>"Password"])->label(false) ?>
          </td>
        </tr>  
        <tr>
          <td align="left" colspan="2">
              <?= Html::submitButton('&nbsp;&nbsp;&nbsp;Login &nbsp;&nbsp;', ['class' => 'btn btn-block but', 'name' => 'login-button']) ?>
          </td>
        </tr> 
      </table>
    
			

			
    
			
		<?php ActiveForm::end(); ?>
		
	</div>
		</div>
	</div>
	<div class="col-md-1">
		</div>
</div>

<script type="text/javascript">

</script>
<style type="text/css">
.form-bordered .form-group {
    margin: 0;
    border: 0;
    padding: 15px;
    border-bottom: 0px dashed #eaedf1;
  }
.btn-primary {
    background-color: #5c2040;
    border-color: #1bbae1;
    color: #fff;
}
body{
background: url('../images/logo2.png') no-repeat top center fixed;
 -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;

}
#rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    height: 150px; 
    text-align: center;  
}
.lg-container{
width:400px;
margin:100px auto;
padding:20px 20px;
border:1px solid #f4f4f4;
background-color: #47B2BA;
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:30px;

-webkit-box-shadow: 0 0 2px #aaa;
-moz-box-shadow: 0 0 2px #aaa;
box-shadow: 0 0 2px #aaa;
}
.lg-container h1{
font-size:40px;
text-align:center;
background-color: green;
}
#lg-form > div {
margin:10px 5px;
padding:5px 0;
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:300px;

}
#lg-form label{
display: none;
font-size: 20px;
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:300px;
}
.form-control{
  -webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:300px;
    height: 20px;
    width: 300px;
}
.lg-container2{
width:800px;
margin:100px auto;
padding:20px 20px;
border:1px solid #f4f4f4;
background-color: #47B2BA;
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:30px;

-webkit-box-shadow: 0 0 2px #aaa;
-moz-box-shadow: 0 0 2px #aaa;
box-shadow: 0 0 2px #aaa;
}
.lg-container2 h1{
font-size:40px;
text-align:center;
background-color: green;
}
#lg-form > div {
margin:10px 5px;
padding:5px 0;
}
#lg-form label{
display: none;
font-size: 20px;

}
#lg-form input[type="text"],
#lg-form input[type="password"]{

padding: 5px;
font-size: 16px;
line-height: 20px;
width: 100%;
font-family: 'Oleo Script', cursive;
text-align:center;
}
#lg-form div:nth-child(3) {
text-align:center;
}
#lg-form button{
font-family: 'Oleo Script', cursive;
font-size: 18px;
border:1px solid #000;
padding:5px 10px;
border:1px solid rgba(51,51,51,.5);
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:10px;

-webkit-box-shadow: 2px 1px 1px #aaa;
-moz-box-shadow: 2px 1px 1px #aaa;
box-shadow: 2px 1px 1px #aaa;
cursor:pointer;
}
#lg-form button:active{
-webkit-box-shadow: 0px 0px 1px #aaa;
-moz-box-shadow: 0px 0px 1px #aaa;
box-shadow: 0px 0px 1px #aaa;
}
#lg-form button:hover{
background:#f4f4f4;
}
#message{width:100%;text-align:center}
.success {
color: green;
}
.im{
  -webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:30px;
border-color: blue;
}
.error {
color: red;
}
.navbar{
background: #5c2040;
background: #E64A19;
background: #022a78;
color: #fff;
-webkit-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
border-color: #47B2BA;
border-width : 4px 0 2px 0;

}
.but{
  color: white;
  background-color: #022a78;
  font-style: white;
  -webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:30px;
  width: 399px;
  height: 200px

-webkit-box-shadow: 0 0 2px #aaa;
-moz-box-shadow: 0 0 2px #aaa;
box-shadow: 0 0 2px #aaa;
}
.navbar a{
color: #fff;
}
.navbar ul > li > a{
color: #fff;
}
.navbar ul > li > a:hover{
opacity: 0.1;
background: #000;
}
body { padding-top: 20px; }
#myCarousel .nav a small {
    display:block;
    -webkit-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
border-color: #47B2BA;
border-width : 4px 0 2px 0;
background-color: #47B2BA;

}
.cl{
  background-color: white;
   -webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:30px;
height: 300px;

}
.carousel{
  border: 10px;
}
#myCarousel .nav {
background:#eee;
}
#myCarousel .nav a {
    border-radius:0px;
}
</style>
<?php
$js =<<<js
$(document).ready( function() {
    $('#myCarousel').carousel({
interval:   100000000000000000
});

var clickEvent = false;
$('#myCarousel').on('click', '.nav a', function() {
clickEvent = true;
$('.nav li').removeClass('active');
$(this).parent().addClass('active');
}).on('slid.bs.carousel', function(e) {
if(!clickEvent) {
var count = $('.nav').children().length -1;
var current = $('.nav li.active');
current.removeClass('active').next().addClass('active');
var id = parseInt(current.data('slide-to'));
if(count == id) {
$('.nav li').first().addClass('active');
}
}
clickEvent = true;
});
});
js;
?>