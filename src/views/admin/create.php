<?php
/**
 * @var $this \yii\web\View
 * @var $operator \app\src\models\user\forms\CreateOperatorForm;
 */

use app\src\models\user\UserStatus;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($operator, 'username')->textInput() ?>
<?= $form->field($operator, 'email')->textInput() ?>
<?= $form->field($operator, 'password')->textInput() ?>
<?= $form->field($operator, 'status')->dropdownList(UserStatus::listData()) ?>
<?= Html::submitButton('Создать', ['class' => 'btn btn-success']); ?>
<?php $form = ActiveForm::end(); ?>
