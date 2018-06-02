<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '分类', 'icon' => 'code-fork', 'url' => ['#'], 'items'=>[
                        ['label' => '分类列表', 'icon' => 'newspaper-o', 'url' => ['/category']],
                        ['label' => '添加分类', 'icon' => 'plus', 'url' => ['/category/create']],
                        ['label' => '更新分类', 'icon' => 'dashboard', 'url' => ['/category/update'], 'options'=>['style'=>'display:none']],
                    ]],
                    ['label' => '文章', 'icon' => 'book', 'url' => ['#'], 'items'=>[
                        ['label' => '文章列表', 'icon' => 'newspaper-o', 'url' => ['/post']],
                        ['label' => '添加文章', 'icon' => 'plus', 'url' => ['/post/create']],
                        ['label' => '更新文章', 'icon' => 'dashboard', 'url' => ['/post/update'], 'options'=>['style'=>'display:none']],
                    ]],
                    ['label' => '管理员', 'icon' => 'user', 'url' => ['#'], 'items'=>[
                        ['label' => '管理员列表', 'icon' => 'users', 'url' => ['/admin-user']],
                        ['label' => '添加管理员', 'icon' => 'user-plus', 'url' => ['/admin-user/create']],
                        ['label' => '更新文章', 'icon' => 'dashboard', 'url' => ['/admin-user/update'], 'options'=>['style'=>'display:none']],
                        ['label' => '更新文章', 'icon' => 'dashboard', 'url' => ['/admin-user/reset-pwd'], 'options'=>['style'=>'display:none']],
                        ['label' => '更新文章', 'icon' => 'dashboard', 'url' => ['/admin-user/permission'], 'options'=>['style'=>'display:none']],
                    ]],
                ],
            ]
        ) ?>
    </section>

</aside>
