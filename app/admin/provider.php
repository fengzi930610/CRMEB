<?php

use app\Request;

// 容器Provider定义文件
return [
    'think\exception\Handle' => \app\admin\controller\AdminException::class,
];
