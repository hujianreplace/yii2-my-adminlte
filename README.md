# 自定义项目模板 adminlte
#### main-local.php 增加gii配置
```php

'generators' => [ //here
    'crud' => [
        'class' => 'yii\gii\generators\crud\Generator',
        'templates' => [
            'adminlte' => '@backend/widgets/gii/crud/simple',
        ],
    ],
],
```