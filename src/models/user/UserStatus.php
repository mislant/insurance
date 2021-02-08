<?php
/**
 * Enum of users statuses
 */

namespace app\src\models\user;

use yii2mod\enum\helpers\BaseEnum;

/**
 * Class UserStatuses
 * @package app\src\models\user
 */
class UserStatus extends BaseEnum
{
    /** Active */
    const ACTIVE = 'active';
    /** Blocked */
    const BLOCKED = 'blocked';

    /**
     * {@inheritDoc}
     */
    protected static $list = [
        self::ACTIVE => 'Активированный',
        self::BLOCKED => 'Заблокированный',
    ];
}