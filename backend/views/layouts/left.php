<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '管理员', 'icon' => 'user-secret', 'url' => ['#'], 'items'=>[

                        ['label' => '创建管理员', 'icon' => 'user-plus', 'url' => ['/admin-user/create']],
                        ['label' => '管理员列表', 'icon' => 'user-secret', 'url' => ['/admin-user']],

                        ['label' => '更新管列表', 'icon' => 'dashboard', 'url' => ['/admin-user/update'], 'options'=>['style'=>'display:none']],
                        ['label' => '重置密码', 'icon' => 'dashboard', 'url' => ['/admin-user/reset-pwd'], 'options'=>['style'=>'display:none']],
                        ['label' => '设置权限', 'icon' => 'dashboard', 'url' => ['/admin-user/permission'], 'options'=>['style'=>'display:none']],
                    ]],
                    ['label' => '系统', 'icon' => 'cog', 'url' => ['#'], 'items'=>[
                        ['label' => '角色管理', 'icon' => 'user', 'url' => ['/role']],
                        ['label' => '新增角色', 'icon' => 'user-plus', 'url' => ['/role/create'], 'options'=>['style'=>'display:none']],
                        ['label' => '更新角色', 'icon' => 'dashboard', 'url' => ['/role/update'], 'options'=>['style'=>'display:none']],
                    ]],
                ],
            ]
        ) ?>
    </section>

</aside>
