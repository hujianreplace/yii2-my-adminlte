<?php
/**
 * 自定义GridView
 */
namespace common\widgets;

class GridView extends \yii\grid\GridView {

    public $tableOptions = ['class'=>'table table-bordered table-hover table-responsive'];
    public $summaryOptions = ['class'=>'pagination-summary'];
    public $pager = [ 'firstPageLabel' => '首页', 'lastPageLabel' => '末页'];
    public $layout = "{items}\n<div class='pull-right'>{summary}\n{pager}</div>";
}