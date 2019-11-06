<?php
/**
 * @day: 2019年11月6日 15:35:33
 */

namespace app\models\system;

use crmeb\traits\ModelTrait;
use crmeb\basic\BaseModel;

/**
 * 物流公司
 * Class Express
 * @package app\models\system
 */
class Express extends BaseModel
{

    /**
     * 数据表主键
     * @var string
     */
    protected $pk = 'id';

    /**
     * 模型名称
     * @var string
     */
    protected $name = 'express';

    use ModelTrait;

    public static function lst()
    {
        $model = new self;
        $model = $model->where('is_show', 1);
        $model = $model->order('sort DESC,id DESC');
        return $model->select();
    }
}