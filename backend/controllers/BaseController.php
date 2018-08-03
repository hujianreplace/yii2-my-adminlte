<?php
namespace backend\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;

class BaseController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['supperAdmin'],
                    ],
                ],
            ],
        ];
    }
}