<?php
/**
 * Created by PhpStorm.
 * User: omirali
 * Date: 8/11/17
 * Time: 5:32 PM
 */
namespace cms;

use \yii\base\Module as BaseModule;
use \Yii;

class Module extends BaseModule
{
    public function init()
    {
        if($this->id == 'admin' && Cms::$app->adminTemplate){
            $this->layout = Cms::$app->adminTemplate['layout'];
            $this->layoutPath = Cms::getAlias(Cms::$app->adminTemplate['layoutPath']);
        }
        parent::init();
    }

    public function getViewPath()
    {
        return parent::getViewPath(); // TODO: Change the autogenerated stub
    }
}