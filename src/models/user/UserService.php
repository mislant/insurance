<?php
/**
 * User's service
 */

namespace app\src\models\user;

use app\src\models\user\forms\BaseUserForm;
use app\src\models\user\forms\CreateOperatorForm;

/**
 * Class UserService
 * @package app\src\models\user
 */
class UserService
{
    /** @var BaseUserForm $form */
    private $form;
    /** @var UserRepository $userRepository */
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    /**
     * Sets user form
     *
     * @param BaseUserForm $form
     *
     * @return BaseUserForm
     */
    public function setForm(BaseUserForm $form): BaseUserForm
    {
        return $this->form = $form;
    }

    /**
     * Loads model
     *
     * @return bool
     */
    public function load(): bool
    {
        return $this->form->load(\Yii::$app->request->post());
    }

    /**
     * Logs user in
     *
     * @return bool
     */
    public function logIn(): bool
    {
        if (!$this->form->valid) {
            return false;
        }

        $user = $this->userRepository->findByName($this->form->username);
        if ($user instanceof NullUser) {
            $this->form->addErrors([
                'username' => 'Логин или пароль не верны',
                'password' => 'Логин или пароль не верны',
            ]);
            return false;
        }

        if (!\Yii::$app->security->validatePassword($this->form->password, $user->password)) {
            $this->form->addErrors([
                'password' => 'Не верный пароль',
            ]);
            return false;
        }
        \Yii::$app->user->login($user);
        return true;
    }

    /**
     * Creates operator
     *
     * @return bool
     * @throws \yii\base\Exception
     */
    public function createOperator(): bool
    {
        if (!$this->form->validate()) {
            return false;
        }
        if (!$this->form instanceof CreateOperatorForm) {
            throw new \Exception("Can not create user with wrong form");
        }
        return $this->userRepository->create($this->form);
    }

    public function getOperatorDataProvider()
    {

    }
}