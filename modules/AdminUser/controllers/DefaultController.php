<?php
namespace modules\AdminUser\controllers;

use Yii;
use modules\AdminUser\models\ResetPwdForm;
use modules\AdminUser\models\SignupForm;
use modules\AdminUser\models\AdminUser;
use modules\AdminUser\models\AdminUserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `user` module
 */
class DefaultController extends Controller
{
    /**
     * Lists all AdminUser models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new AdminUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new AdminUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new AdminUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param $id int
     * @return mixed
     */
    public function actionResetPwd($id) {
        $model = new ResetPwdForm();

        if ($model->load(Yii::$app->request->post())) {

            if ($user = $model->resetPwd($id)) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('resetPwd', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AdminUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AdminUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AdminUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AdminUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = AdminUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
