<?php
/**
 * @day: 2019年11月6日 15:34:21
 */

namespace app\models\store;

use crmeb\basic\BaseModel;
use crmeb\traits\ModelTrait;

/**
 * TODO 订单修改状态记录Model
 * Class StoreOrderStatus
 * @package app\models\store
 */
class StoreOrderStatus extends BaseModel
{
    /**
     * 模型名称
     * @var string
     */
    protected $name = 'store_order_status';

    use ModelTrait;

    public static function status($oid,$change_type,$change_message,$change_time = null)
    {
        if($change_time == null) $change_time = time();
        return self::create(compact('oid','change_type','change_message','change_time'));
    }

    public static function getTime($oid,$change_type)
    {
        return self::where('oid',$oid)->where('change_type',$change_type)->value('change_time');
    }

}