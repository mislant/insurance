<?php
/**
 * User model
 */

namespace app\src\models\user;

use app\src\common\exceptions\NotImplementedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * Class User
 *
 * @property int $id
 * @property string $username
 * @property string $password;
 * @property string $email;
 * @property string $status;
 * @property int $checkpoint
 * @property string $created_at
 * @property string $updated_at
 *
 * @package app\src\models\user
 */
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritDoc}
     */
    public static function tableName()
    {
        return 'insurance.user';
    }

    /**
     * {@inheritDoc}
     *
     * @param int|string $id
     * @return IdentityInterface|null
     */
    public static function findIdentity($id)
    {
        return self::find()->where(['id' => $id])->one() ?? null;
    }

    /**
     * {@inheritDoc}
     *
     * @throws NotImplementedException
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotImplementedException();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     *
     * @throws NotImplementedException
     */
    public function getAuthKey()
    {
        throw new NotImplementedException();
    }

    /**
     * {@inheritDoc}
     *
     * @throws NotImplementedException
     */
    public function validateAuthKey($authKey)
    {
        throw new NotImplementedException();
    }

    /**
     * Sets password
     *
     * Generates password hash and sets it
     *
     * @param string $password
     * @throws \yii\base\Exception
     */
    public function setPassword(string $password): void
    {
        $this->password = \Yii::$app->security->generatePasswordHash($password);
    }
}