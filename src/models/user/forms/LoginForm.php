<?php
/**
 * Authorization form
 */

namespace app\src\models\user\forms;

/**
 * Class LoginForm
 * @package app\src\models\user
 */
final class LoginForm extends BaseUserForm
{
    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        $parent = parent::rules();
        $rules = [
            [['username', 'password'], 'required']
        ];
        foreach ($rules as $rule) {
            array_push($parent, $rule);
        }
        return $parent;
    }
}