<?php
/**
 * @day: 2019年11月6日 14:39:40
 */

namespace app\admin\model\system;

use crmeb\traits\ModelTrait;
use crmeb\basic\BaseModel;

/**
 * 数据组model
 * Class SystemGroup
 * @package app\admin\model\system
 */
class SystemGroup extends BaseModel
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
    protected $name = 'system_group';

    use ModelTrait;

    /**
     * 根据id获取当前记录中的fields值
     * @param $id
     * @return array
     */
    public static function getField($id){
        $fields = json_decode(self::where('id',$id)->value("fields"),true)?:[];
        return compact('fields');
    }
}