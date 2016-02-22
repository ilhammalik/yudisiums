<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\MyHelper;
?>
<style type="text/css">
	.td{
		height:40px;
	}
	.panel .panel-success{
		background-color: blue;
	}
</style>
	<?php
	for ($i=0; $i < 3; $i++) { 
		echo "<br/>";
	} ?>

<?php
	for ($i=0; $i < 2; $i++) { 
		echo "<br/>";
	} ?>
<table width="100%">
	<tr >
		<td class="td" width="6%">
			Nip
		</td>
		<td class="td" width="3%">
			:
		</td>
		<td class="td" width="60%">
			<?= MyHelper::User($model->user_id)->nip ?>
		</td>
	</tr>
		<tr>
		<td class="td">
			Nama
		</td>
		<td>
			:
		</td>
		<td>
			<?= MyHelper::User($model->user_id)->full_name ?>
		</td>
	</tr>
		<tr>
		<td class="td">
			Bulan
		</td>
		<td>
			:
		</td>
		<td>
			<?= $model2->bulan ?>
		</td>
	</tr>
		<tr>
		<td class="td">
			Tahun
		</td>
		<td>
			:
		</td>
		<td>
			<?= $model2->tahun ?>
			
		</td>
	</tr>
	<tr>
		<td height="80px" colspan="3" align="center">Pendapatan</td>
	</tr>
</table>

	 
			  		<table width="100%">

			  			<tr>
			  				<td class="td" width="20%">
			  					Gaji Pokok
			  				</td>
			  				<td>
			  					:
			  				</td>
			  				<td>
			  					<?php $gaji = MyHelper::User($model->user_id)->gaji; ?>
			  					<?= MyHelper::User($model->user_id)->gaji ?>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td class="td">
			  					Pembimbing 1
			  				</td>
			  				<td width="3%">
			  					:
			  				</td>
			  				<td>
			  					<?php
			  					$honor_pemb = Yii::$app->db->createCommand(" select * from d_pem_siswa where pembimbing_id=".$_GET['id'])->queryScalar();
			  					$jml = Yii::$app->db->createCommand(" select nama from daf_gaji where jenis_id=1")->queryOne();
			  					$hasil = $honor_pemb*$jml['nama'];
			  					echo $honor_pemb .'&nbsp;&nbsp;x ';
				  						echo $jml['nama'];

			  					?>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td class="td" >
			  					Pembimbing 2
			  				</td>
			  				<td width="3%">
			  					:
			  				</td>
			  				<td>
			  					<?php
			  					$honor_pemb2 = Yii::$app->db->createCommand(" select * from d_pem_siswa where pembimbing_id=".$_GET['id'])->queryScalar();
			  					$jml2 = Yii::$app->db->createCommand(" select nama from daf_gaji where jenis_id=2")->queryOne();
			  					$hasil2 = $honor_pemb2*$jml2['nama'];
			  					echo $honor_pemb2 .'&nbsp;&nbsp;x ';
				  						echo $jml2['nama'];

			  					?>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td class="td" >
			  					Total Honor
			  				</td>
			  				<td width="3%">
			  					:
			  				</td>
			  				<td>
			  					<?= $gaji+$hasil+$hasil2 ?>
			  				</td>
			  			</tr>
			  		</table>
		