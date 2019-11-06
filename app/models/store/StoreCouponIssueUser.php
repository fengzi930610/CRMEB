<?php
/**
 * @day: 2019年11月6日 15:33:53
 */

namespace app\models\store;


use crmeb\basic\BaseModel;
use crmeb\traits\ModelTrait;

/**
 * TODO 优惠券前台用户领取Model
 * Class StoreCouponIssueUser
 * @package app\models\store
 */
class StoreCouponIssueUser extends BaseModel
{
    /**
     * 模型名称
     * @var string
     */
    protected $name = 'store_coupon_issue_user';

    use ModelTrait;

    public static function addUserIssue($uid,$issue_coupon_id)
    {
        $add_time = time();
        return self::create(compact('uid','issue_coupon_id','add_time'));
    }
}