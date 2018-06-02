<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">blog</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <?php if(!Yii::$app->user->isGuest){ ?>
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li><a href="<?=\yii\helpers\Url::to(['site/index'])?>">起始页</a></li>
                <li>
                    <?= Html::a(
                        '退出('.Yii::$app->user->identity->nickname.')',
                        ['/site/logout'],
                        ['data-method' => 'post']
                    ) ?>
                </li>
            </ul>
        </div>
        <?php } ?>
    </nav>
</header>
