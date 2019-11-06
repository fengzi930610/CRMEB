<?php
/**
 * Date: 2019年11月6日 15:51:23
 */

namespace crmeb\services;

use crmeb\traits\LogicTrait;

/** 模版消息类
 * Class Template
 * @package crmeb\services
 */
class Template
{
    use LogicTrait;

    protected  $providers=[
        'routine_two'=>ProgramTemplateService::class,
    ];

}