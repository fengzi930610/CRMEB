<?php
/**
 * @day: 2019年11月6日 14:38:11
 */

namespace app\admin\model\store;

use crmeb\traits\ModelTrait;
use crmeb\basic\BaseModel;

/**
 * 点赞and收藏 model
 * Class StoreProductRelation
 * @package app\admin\model\store
 */
class StoreProductRelation extends BaseModel
{

    /**
     * 模型名称
     * @var string
     */
    protected $name = 'store_product_relation';

    use ModelTrait;

    public static function getCollect($pid){
      $model = new self();
      $model = $model->where('r.product_id',$pid)->where('r.type','collect');
      $model = $model->alias('r')->join('__WECHAT_USER__ u','u.uid=r.uid');
      $model = $model->field('r.*,u.nickname');
      return self::page($model);
    }
    public static function getLike($pid){
      $model = new self();
      $model = $model->where('r.product_id',$pid)->where('r.type','like');
      $model = $model->alias('r')->join('__WECHAT_USER__ u','u.uid=r.uid');
      $model = $model->field('r.*,u.nickname');
      return self::page($model);
    }

}