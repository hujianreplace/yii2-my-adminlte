<?php
namespace modules\behaviors;

use Yii;
use yii\base\Behavior;
use yii\console\controllers\MigrateController;
use yii\helpers\ArrayHelper;

/**
 * 迁移路径行为
 */
class MigrationPathBehavior extends Behavior {

    public function events() {
        return [
            MigrateController::EVENT_BEFORE_ACTION => 'beforeAction'
        ];
    }

    public function beforeAction(){
        /* @var $owner MigrateController*/
        $owner = $this->owner;

        $arr = [];
        $modulesPath = Yii::getAlias('@modules/');
        foreach (new \DirectoryIterator($modulesPath) as $file){
            if($file->isFile() || $file->isDot()){
                continue;
            }

            $tempPath = $file->getRealPath().'/migrations/';
            if(file_exists($tempPath) && is_dir($tempPath)){
                $arr[] = $tempPath;
            }
        }
        $defaultPath = $owner->migrationPath;
        if(!empty($defaultPath) && is_string($defaultPath)){
            $arr[] = $defaultPath;
        }
        if(is_array($defaultPath)){
            $arr = ArrayHelper::merge($arr, $defaultPath);
        }

        $owner->migrationPath = $arr;
        return true;
    }
}