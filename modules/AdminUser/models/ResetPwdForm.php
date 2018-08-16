<?php
namespace modules\AdminUser\models;

use yii\base\Model;

/**
 * Signup form
 */
class ResetPwdForm extends Model
{
    public $password;
    public $repeatPwd;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['repeatPwd', 'required'],
            ['repeatPwd', 'string', 'min' => 6],
            ['repeatPwd', 'compare', 'compareAttribute' => 'password', 'message'=>'两次密码输入不一致']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'password' => '密码',
            'repeatPwd' => '确认密码',
        ];
    }

    /**
     * Signs user up.
     * @param $id int
     *
     * @return User|null the saved model or null if saving fails
     */
    public function resetPwd($id)
    {
        if (!$this->validate()) {
            return null;
        }
        /* @var $user AdminUser */
        $user = AdminUser::findOne($id);
        $user->setPassword($this->password);
        $user->removePasswordResetToken();
        return $user->save() ? true : false;
    }
}
