<?php
/**
 * Manage users operations
 */

namespace app\src\controllers;

use app\src\models\user\forms\LoginForm;
use app\src\models\user\UserService;
use yii\web\Controller;

/**
 * Class UserController
 * @package app\src\controllers
 */
class UserController extends Controller
{
    /** @var UserService */
    protected $service;

    /**
     * {@inheritDoc}
     */
    public function init(): void
    {
        $this->service = new UserService();
        parent::init();
    }

    /**
     * Logs user in system
     *
     * @return string
     */
    public function actionLogIn()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $login = $this->service->setForm(new LoginForm());
        if ($this->service->load() && $this->service->login()) {
            return $this->goHome();
        }
        $this->layout = 'login';
        return $this->render('login', compact('login'));
    }
}