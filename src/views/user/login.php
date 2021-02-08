<?php
/**
 * @var $this \yii\web\View
 * @var $login \app\src\models\user\LoginForm
 */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

?>

<div class="d-flex justify-content-center flex-column" style="width: 40%;min-width: 300px; max-width: 500px;">
    <h3 class="text-center text-secondary mb-3 pb-3 border-bottom"><span class="text-info">Авто</span>Страх</h3>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center text-secondary">Авторизация</h5>
        </div>
        <div class="card-body d-flex justify-content-center">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($login, 'username')->textInput(); ?>
            <?= $form->field($login, 'password')->passwordInput(); ?>
            <?= Html::submitButton('Войти', ['class' => 'btn btn-success']); ?>

            <?php $form = ActiveForm::end(); ?>
        </div>
    </div>
</div>