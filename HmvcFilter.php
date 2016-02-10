<?php
namespace vtvz\hmvc;

use yii\base\ActionFilter;

/**
*
*/
class HmvcFilter extends ActionFilter
{
    public $only = [];
    public $except = [];
    /**
     * Set false if you use hmvc in interface!
     */
    public $throwException = true;
    public $exceptionClass = 'yii\web\ForbiddenHttpException';

    public function beforeAction($action)
    {
        if ($action->controller->route === \Yii::$app->requestedRoute) {

            if (!$this->throwException) {
                return false;
            }

            $exceptionClass = $this->exceptionClass;
            throw new $exceptionClass();
        }

        return parent::beforeAction($action);
    }
}
