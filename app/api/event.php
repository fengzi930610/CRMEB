<?php

// 事件定义文件
return [
    'listen'    => [
        'AppInit'  => [],
        'HttpRun'  => [],
        'HttpEnd'  => [],
        'LogLevel' => [],
        'LogWrite' => [],
        'UserLogin'=>[
             \crmeb\listeners\user\UserLogin::class
        ]
    ]
];
