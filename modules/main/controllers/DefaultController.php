<?php

namespace app\modules\main\controllers;

use Yii;
use yii\web\Controller;
use app\modules\user\models\LoginForm;

class DefaultController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        if ( Yii::$app->user->isGuest ){
            $this->layout = "@app/modules/main/views/layouts/login";
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->redirect('/operator');
            } else {
                return $this->render('login', [
                    'model' => $model,
                ]);
            }
        }
        return $this->redirect('/operator');
    }
}
