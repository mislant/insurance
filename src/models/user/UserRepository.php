<?php
/**
 * Represents commands to interact with user db model
 */

namespace app\src\models\user;

use app\src\models\user\forms\CreateOperatorForm;

/**
 * Class UserRepository
 * @package app\src\models\user
 */
class UserRepository
{
    /**
     * Finds user by username
     *
     * @param string $name
     * @return User
     */
    public function findByName(string $name): User
    {
        $user = User::find()->where(['username' => $name])->one();
        if (is_null($user)) {
            $user = new NullUser();
        }
        return $user;
    }

    /**
     * Creates operator
     *
     * @return bool
     * @throws \yii\base\Exception
     */
    public function create(CreateOperatorForm $form): bool
    {
        $user = new User();
        $user->username = $form->username;
        $user->email = $form->email;
        $user->status = $form->status;
        $user->setPassword($form->password);
        return $user->save(false);
    }
}