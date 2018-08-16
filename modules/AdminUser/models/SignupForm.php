<?php
namespace modules\AdminUser\models;

use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $nickname;
    public $email;
    public $password;
    public $repeatPwd;
    public $profile;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\AdminUser', 'message' => '用户名已存在.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\AdminUser', 'message' => '用户邮箱已存在.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['nickname', 'required'],
            ['nickname', 'string', 'max' => 128],

            ['repeatPwd', 'compare', 'compareAttribute' => 'password', 'message' => '两次密码输入不一致'],

            ['profile', 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => '登录名',
            'nickname' => '昵称',
            'password' => '密码',
            'repeatPwd' => '确认密码',
            'email' => '邮件',
            'profile' => '简介',
        ];
    }

    /**
     * Signs user up.
     *
     * @return AdminUser |null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new AdminUser();
        $user->username = $this->username;
        $user->nickname = $this->nickname;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->password = "*";
        
        return $user->save() ? $user : null;
    }
}
