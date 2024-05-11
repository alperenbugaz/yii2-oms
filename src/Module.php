<?php

namespace alperenbugaz\oms;

use portalium\base\Event;
use alperenbugaz\oms\components\TriggerActions;

class Module extends \portalium\base\Module
{
    public static $tablePrefix = 'oms_';
    
    public static $name = 'oms';

    public static $description = 'oms Module';

    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'oms/default',
            ]
        ],
    ];
    
    public static function moduleInit()
    {
        self::registerTranslation('oms','@alperenbugaz/oms/messages',[
            'oms' => 'oms.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('oms', $message, $params);
    }

    /* 
        public function registerEvents()
        {
            Event::on($this::className(), UserModule::EVENT_USER_DELETE_BEFORE, [new TriggerActions(), 'onUserDeleteBefore']);
        } 
    */
}