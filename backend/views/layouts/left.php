<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '管理员', 'icon' => 'user-secret', 'url' => ['#'], 'items'=>[

                        ['label' => '创建管理员', 'icon' => 'user-plus', 'url' => ['/admin-user/default/create']],
                        ['label' => '管理员列表', 'icon' => 'user-secret', 'url' => ['/admin-user']],

                        ['label' => '更新管列表', 'icon' => 'dashboard', 'url' => ['/admin-user/default/update'], 'options'=>['style'=>'display:none']],
                        ['label' => '重置密码', 'icon' => 'dashboard', 'url' => ['/admin-user/default/reset-pwd'], 'options'=>['style'=>'display:none']],
                        ['label' => '设置权限', 'icon' => 'dashboard', 'url' => ['/admin-user/default/permission'], 'options'=>['style'=>'display:none']],
                    ]],
                ],
            ]
        ) ?>
    </section>

</aside>
