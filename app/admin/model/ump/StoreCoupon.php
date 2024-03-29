<?php
/**
 * @day: 2019年11月6日 15:03:56
 */

namespace app\admin\model\ump;

use crmeb\traits\ModelTrait;
use crmeb\basic\BaseModel;

/**
 * Class StoreCategory
 * @package app\admin\model\store
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

    /**
     * @param $where
     * @return array
     */
    public static function systemPage($where){
        $model = new self;
        if($where['status'] != '')  $model = $model->where('status',$where['status']);
        if($where['title'] != '')  $model = $model->where('title','LIKE',"%$where[title]%");
//        if($where['is_del'] != '')  $model = $model->where('is_del',$where['is_del']);
        $model = $model->where('is_del',0);
        $model = $model->order('sort desc,id desc');
        return self::page($model,$where);
    }

    /**
     * @param $where
     * @return array
     */
    public static function systemPageCoupon($where){
        $model = new self;
        if($where['status'] != '')  $model = $model->where('status',$where['status']);
        if($where['title'] != '')  $model = $model->where('title','LIKE',"%$where[title]%");
//        if($where['is_del'] != '')  $model = $model->where('is_del',$where['is_del']);
        $model = $model->where('is_del',0);
        $model = $model->where('status',1);
        $model = $model->order('sort desc,id desc');
        return self::page($model,$where);
    }

    public static  function editIsDel($id){
        $data['status'] = 0;
        self::beginTrans();
        $res1 = self::edit($data,$id);
        $res2 = false !== StoreCouponUser::where('cid',$id)->update(['is_fail'=>1]);
        $res3 = false !== StoreCouponIssue::where('cid',$id)->update(['status'=>-1]);
        $res  = $res1 && $res2 && $res3;
        self::checkTrans($res);
        return $res;

    }
}