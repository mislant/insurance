<?php
/**
 * Operator creation form
 */

namespace app\src\models\user\forms;

use app\src\models\user\User;
use app\src\models\user\UserStatus;

/**
 * Class CreateOperatorForm
 * @package app\src\models\user\forms
 */
final class CreateOperatorForm extends BaseUserForm
{
    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        $parent = parent::rules();
        $rules = [
            [['username', 'email', 'password'], 'required'],
            [['username', 'email'], 'unique', 'targetClass' => User::class],
            [['email'], 'email'],
            [['status'], 'default', 'value' => UserStatus::ACTIVE],
        ];
        foreach ($rules as $rule) {
            array_push($parent, $rule);
        }
        return $parent;
    }
}