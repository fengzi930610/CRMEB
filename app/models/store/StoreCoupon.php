<?php
/**
 * @day: 2019年11月6日 15:33:41
 */

namespace app\models\store;


use crmeb\basic\BaseModel;
use crmeb\traits\ModelTrait;

/**
 * TODO 优惠券Model
 * Class StoreCoupon
 * @package app\models\store
 */
class StoreCoupon extends BaseModel
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
    protected $name = 'store_coupon';

    use ModelTrait;
}