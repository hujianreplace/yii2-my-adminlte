<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "common\\widgets\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['action'] = Html::a(<?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, ['create'], ['class' => 'btn btn-primary btn-flat btn-xs'])
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
    <div class="box box-primary">
        <div class="box-body">
            <?='<?php' ?> echo $this->render('_search', ['model' => $searchModel]); <?="?>\n"?>
        </div>
    </div>
<?= $generator->enablePjax ? "    <?php Pjax::begin(); ?>\n" : ''
?>
    <div class="box box-primary">
        <div class="box-body">
<?php if(!empty($generator->searchModelClass)): ?>
<?= "        <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif;

if ($generator->indexWidgetType === 'grid'):
    echo "        <?= " ?>GridView::widget([
            'dataProvider' => $dataProvider,
            <?= !empty($generator->searchModelClass) ? "// 'filterModel' => \$searchModel,\n            'columns' => [\n" : "'layout' => \"{items}\\n{summary}\\n{pager}\",\n            'columns' => [\n"; ?>
                ['class' => 'yii\grid\SerialColumn'],

<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if (++$count < 6) {
            echo "                '" . $name . "',\n";
        } else {
            echo "                // '" . $name . "',\n";
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if (++$count < 6) {
            echo "                '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        } else {
            echo "                // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>

                [
                    'class' => 'common\widgets\ActionColumn',
                    'template' => '{update} {delete}'
                ],
            ],
        ]); ?>
<?php else: ?>
        <?= "<?= " ?>ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {
                return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
            },
        ]) ?>
<?php endif; ?>
        </div>
    </div>
<?= $generator->enablePjax ? "    <?php Pjax::end(); ?>\n" : '' ?>
</div>
