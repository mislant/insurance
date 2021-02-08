<?php
/**
 * Admin functionality handler
 */

namespace app\src\controllers;


use app\src\models\user\forms\CreateOperatorForm;

/**
 * Class AdminController
 * @package app\src\controllers
 */
class AdminController extends UserController
{
    /**
     * Creates operator
     *
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     */
    public function actionCreateOperator()
    {
        $operator = $this->service->setForm(new CreateOperatorForm());
        if ($this->service->load() && $this->service->createOperator()) {
            return $this->goHome();
        }
        return $this->render('create', compact('operator'));
    }
}