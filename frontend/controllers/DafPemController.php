<?php

namespace frontend\controllers;

use Yii;
use frontend\models\DafPem;
use frontend\models\PemSiswa;
use frontend\models\DDosen;
use frontend\models\DafPemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
/**
 * DafPemController implements the CRUD actions for DafPem model.
 */
class DafPemController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'del' => ['post'],
                    'dels' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all DafPem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DafPemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DafPem model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $query = PemSiswa::find()->where('pembimbing_id='.$id);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dosen = DDosen::find()->where('pembimbing_id='.$id);
        $dataDosen = new ActiveDataProvider([
            'query' => $dosen,
        ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider' => $dataProvider,
            'dataDosen' => $dataDosen,
        ]);
    }

    /**
     * Creates a new DafPem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DafPem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pembimbing_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

      public function actionTambah($id)
    {
        $model2 = $this->findModel($id);
        $model = new PemSiswa();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->pembimbing_id = $id;
                if($model->save()){
                    return $this->redirect(['view', 'id' => $id]);
                }
        } else {
            return $this->renderAjax('tambah', [
                'model' => $model,
                'model2' => $model2,
            ]);
        }
    }

        public function actionDosen($id)
    {
        $model2 = $this->findModel($id);
        $model = new DDosen();

        if ($model->load(Yii::$app->request->post() && $model->validate())) {
                $model->pembimbing_id = $id;
              if($model->save()){
                    return $this->redirect(['view', 'id' => $id]);
              }
        } else {
            return $this->renderAjax('dosen', [
                'model' => $model,
                'model2' => $model2,
            ]);
        }
    }

    /**
     * Updates an existing DafPem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pembimbing_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DafPem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionDel($id,$ids)
    {
        DDosen::findOne($id)->delete();

        return $this->redirect(['view','id'=>$ids]);
    }

      public function actionDels($id,$ids)
    {
        PemSiswa::findOne($id)->delete();

        return $this->redirect(['view','id'=>$ids]);
    }

    /**
     * Finds the DafPem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DafPem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DafPem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
