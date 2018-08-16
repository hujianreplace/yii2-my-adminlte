<?php

use yii\db\Migration;

/**
 * Class m180816_125439_create_admin_user
 */
class m180816_125439_create_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%admin_user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'nickname' => $this->string(128)->notNull(),
            'password' => $this->string(128)->notNull(),
            'email' => $this->string(128)->notNull()->unique(),
            'profile' => $this->text(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'password_reset_token' => $this->string(255)->unique()
        ], $tableOptions);

        $this->insert('{{%admin_user}}', [
            'username' => 'hujian2855',
            'nickname' => '火狐狸',
            'password' => '$2y$13$RZ20K81ZdERPDyFq2EM31e6KjmmdNRtGmCC6Fq9NST3hWhcgoPqUy',
            'email' => '285520463@qq.com',
            'profile' => '我是管理员',
            'auth_key' => 'MYtOzyIK1w2pmjc7ORFCQ8Uc6xmvF4QZ',
            'password_hash' => '$2y$13$MUxMmyQzk/.QpvEAcnKNhOoDcAsGuwgNo7sNFTx0sRhLF0sbv9VGu'
        ]);

//        $auth = Yii::$app->authManager;
//        $supperAdmin = $auth->createRole('supperAdmin');
//        $supperAdmin->description = '超级管理员';
//        $auth->add($supperAdmin);
//        $auth->assign($supperAdmin, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%admin_user}}');
        return true;
    }
}
