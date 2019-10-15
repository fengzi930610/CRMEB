<?php
// +----------------------------------------------------------------------
// | 模板设置
// +----------------------------------------------------------------------

return [
    // 模板后缀
    'view_suffix'  => 'php',
    // 视图输出字符串内容替换
    'tpl_replace_string'       => [
        '{__PUBLIC_PATH}' =>  '/public/',              //public 目录
        '{__STATIC_PATH}' =>  '/public/static/',       //全局静态目录
        '{__PLUG_PATH}'   =>  '/public/static/plug/',  //全局静态插件
        '{__ADMIN_PATH}'  =>  '/public/system/',        //后台目录
        '{__FRAME_PATH}'  =>  '/public/system/frame/',  //后台框架
        '{__MODULE_PATH}' =>  '/public/system/module/', //后台模块
    ]
];
