<?php
/**
 * Application commands
 */

namespace app\commands;


use app\src\models\user\User;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * Class AppController
 * @package app\commands
 */
class AppController extends Controller
{
    /**
     * Creates admin
     *
     * @return int
     * @throws \yii\base\Exception
     */
    public function actionCreateAdmin(): int
    {
        $user = new User();
        $user->username = 'Admin';
        $user->setPassword('admin');
        $user->email = 'admin@mail.com';
        $user->save();
        return ExitCode::OK;
    }
}