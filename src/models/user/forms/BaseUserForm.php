<?php
/**
 * Form model
 *
 * Base form describe main attributes,
 * their labels and default
 */

namespace app\src\models\user\forms;

use yii\base\Model;

/**
 * Class UserForm
 *
 * @property bool $valid
 * @package app\src\models\user
 */
abstract class BaseUserForm extends Model
{
    /** @var string */
    public $username;
    /** @var string */
    public $password;
    /** @var string */
    public $email;
    /** @var string */
    public $status;
    /** @var int */
    public $checkpoint;

    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'string'],
            [['username', 'password', 'email'], 'trim'],
            [['status', 'checkpoint'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Имя',
            'password' => 'Пароль',
            'email' => 'Почта',
            'status' => 'Статус',
            'checkpoint' => 'Пропускной пункт',
        ];
    }

    /**
     * Checks if model is valid
     *
     * @return bool
     */
    protected function getValid(): bool
    {
        return $this->validate();
    }
}