<?php

namespace app\modules\user;

use yii\base\Module;

/**
 * user module definition class
 */
class User extends Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\user\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
