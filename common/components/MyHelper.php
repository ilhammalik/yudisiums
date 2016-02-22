<?php

namespace common\components;

use yii\base\Component;
use common\models\User;

use Yii;
use yii\helpers\Html;

class MyHelper extends Component {


   

   public function User($id) {
        $user = \common\models\User::find()
                ->where(['id' => $id])
                ->one();

        return $user;
    }

    public function Prodi($id) {
        $user = \frontend\models\Prodi::find()
                ->where(['prodi_id' => $id])
                ->one();

        return $user;
    }


    public function Pem($id) {
        $user = \frontend\models\DafPem::find()
                ->where(['pembimbing_id' => $id])
                ->one();

        return $user;
    }

      public function Hitung($id) {
        $user = \frontend\models\DafPem::find()
                ->where(['pembimbing_id' => $id])
                ->one();

        return $user;
    }
    


}
