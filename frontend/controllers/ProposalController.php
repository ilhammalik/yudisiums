<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Proposal;
use frontend\models\ProposalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProposalController implements the CRUD actions for Proposal model.
 */
class ProposalController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Proposal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProposalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Proposal model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate() {
        $model = new Proposal();
    
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->file = \yii\web\UploadedFile::getInstance($model, "file");
            if ($model->save()) {

                $model->file->saveAs(Yii::getAlias('@frontend/web/file/') . $model->file->baseName . '.' . $model->file->extension);

            
                Yii::$app->session->setFlash('success', 'User berhasil dibuat ');
            } else {
                Yii::$app->session->setFlash('error', 'User gagal dibuat');
                print_r($model->errors);
                die();
            }

            return $this->redirect(['view', 'id' => $model->proposal_id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                       
            ]);
        }
    }
        public function actionUpdate($id) {
        $model = $this->findModel($id);
       
        $delimg = Yii::getAlias('@frontend/web/file/') . $model->file;
        $oldimg = $model->file;
 
        if ($_POST && $model->validate()) {
            $model->file = \yii\web\UploadedFile::getInstance($model, "file");

            if ($model->save()) {
                if (!empty($model->file)) { // delete old and overwrite
                    if ($delimg == !null or !empty($delimg)) {
                        if(!empty(file_exists($delimg))){
                            unlink($delimg);
                        }
                    }
                    $model->file->saveAs(Yii::getAlias('@frontend/web/file/') . $model->file->baseName . '.' . $model->file->extension);
                } else {
                    $model->file = $oldimg;
                }

            }
            return $this->redirect(['/proposal/view', 'id' => $model->proposal_id]);
        }
        $authAssignment->item_name = $authAssignments;
        return $this->render('update', [
                    'model' => $model,
           
        ]);
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionUnduh() {
           $path = Yii::getAlias('@frontend/web/file');
     
           $file = $path . '/'.$_GET['ulama'];
     
           if (file_exists($file)) {
     
           Yii::$app->response->sendFile($file);
     
          }
    }
    /**
     * Finds the Proposal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Proposal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Proposal::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
