<?php
namespace vtvz\hmvc;

use yii\base\Component;

/**
*
*/
class HmvcComponent extends Component
{
    /**
     * Run action
     *
     * @param string $route
     * @param array $params action params
     * @return mixed
     */
    public function run($route, $params = [])
    {
        return \Yii::$app->runAction($route, $params);
    }
}
