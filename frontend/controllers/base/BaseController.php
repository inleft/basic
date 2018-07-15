<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/15 0015
 * Time: 20:46
 */


namespace frontend\controllers\base;

use yii\web\Controller;

class BaseController extends Controller{

    public function beforeAction($action)
    {
        if(!parent::beforeAction($action)){
            return false;
        }
        return true;
    }
}