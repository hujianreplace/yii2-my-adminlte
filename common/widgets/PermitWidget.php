<?php
namespace common\widgets;

use common\models\AdminUserPermit;
use yii\base\Widget;

class PermitWidget extends Widget {

    /**
     * 已选中的权限(一维数组, 权限模块名，权限值列表)
     * @var array
     */
    public $selectPermit = [];

    public function run() {
        $str = '<div class="form-group field-authitem-description">';
        $str .= '    <label class="control-label" for="authitem-description">权限列表</label>';
        $permitList = AdminUserPermit::permitList();
        foreach ($permitList as $permit){
            $name = $permit['name'];
            $key = $permit['key'];
            $valueList = $permit['permitList'];
            $str .= '<div>';
            $str .= '   <div>'.$name.'</div>';
            $str .= '   <div>';
            foreach ($valueList as $value){
                $permitValue = $value['permit'];
                $permitStr = AdminUserPermit::generatePermit($key, $permitValue);
                $checkStr = in_array($permitStr, $this->selectPermit) ? 'checked' : '';
                $str .= '    <label class="checkbox-inline">';
                $str .= '        <input type="checkbox" '.$checkStr.' name="permits['.$key.'][]" value="'.$value['permit'].'"> '.$value['description'];
                $str .= '    </label>';
            }
            $str .= '   <div>';
            $str .= '</div>';
        }
        $str .= '</div>';
        echo $str;
    }
}