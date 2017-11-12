<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация :: ' . Yii::$app->params['core.name'];

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];

$this->registerCss(".login-copy { text-align: center; font-size: 12px; padding-top: 15px; }");
?>

<div class="login-box">

    <div class="login-logo">
        <a href="#">Система заявок</a>
    </div>

    <div class="login-box-body">

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">
            <div class="col-xs-12" style="text-align: center;">
                <?= Html::submitButton('<i class="fa fa-sign-in" aria-hidden="true"></i> Войти в систему', ['class' => 'btn btn-primary btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>

    </div>

    <div class="login-copy">Copyright &copy; <?= date('Y') ?> <a href="http://celsoft.ru" target="_blank">Максим Мартынов</a>. All rights reserved.</div>

</div>