<?php
/**
 * Created By PhpStorm
 * Author Wongzx <wonghzx@hotmail.com>
 */
declare(strict_types=1);

use Hyperf\Guzzle\HandlerStackFactory;

return [
    /* 默认发送配置 */
    'default'  => [
        /* 网关调用策略，默认：顺序调用 */
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        /* 默认可用的发送网关 */
        'gateways' => [
            'qcloud', 'aliyun'
        ],
    ],
    /* 可用的网关配置 */
    'gateways' => [
        'qcloud' => [
            'sdk_app_id' => '',
            'app_key'    => '',
            'sign_name'  => '',
        ],
        'aliyun' => [
            'access_key_id'     => '',
            'access_key_secret' => '',
            'sign_name'         => '',
        ],
        //...
    ],
    'options'  => [
        'config' => [
            'handler' => (new HandlerStackFactory())->create([
                'min_connections' => 1,
                'max_connections' => 30,
                'wait_timeout'    => 3.0,
                'max_idle_time'   => 60,
            ]),
        ],
    ]
];