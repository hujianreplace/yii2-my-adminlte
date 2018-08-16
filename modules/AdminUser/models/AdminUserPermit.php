<?php
namespace modules\AdminUser\models;

/**
 * 后台会员所有权限
 * Class AdminUserPermit
 * @package modules\AdminUser\models
 */
class AdminUserPermit {

    /**
     * 后台权限配置
     * @return array
     */
    public static function permitList(){
        return [
            [
                'name' => '管理管理',
                'key' => 'admin',
                'permitList' => [
                    [ 'permit' => 'view', 'description' => '查看管理员'],
                    [ 'permit' => 'edit', 'description' => '编辑管理员'],
                    [ 'permit' => 'permit', 'description' => '设置管理员权限'],
                ]
            ],
            [
                'name' => '系统管理',
                'key' => 'system',
                'permitList' => [
                    [ 'permit' => 'role_view', 'description' => '查看角色'],
                    [ 'permit' => 'role_edit', 'description' => '编辑角色'],
                    [ 'permit' => 'coin_view', 'description' => '查看币种'],
                    [ 'permit' => 'coin_edit', 'description' => '编辑币种'],
                ]
            ],
        ];
    }

    /**
     * 生成权限字符串
     * @param $key string 权限的分类
     * @param $permitValue string 权限的值
     * @return string
     */
    public static function generatePermit($key, $permitValue){
        return $key.'/'.$permitValue;
    }
}