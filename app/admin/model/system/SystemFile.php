<?php
/**
 * @day: 2019年11月6日 14:39:33
 */

namespace app\admin\model\system;

use crmeb\traits\ModelTrait;
use crmeb\basic\BaseModel;

/**
 * 附件管理model
 * Class SystemAttachment
 * @package app\admin\model\system
 */
class SystemFile extends BaseModel
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
    protected $name = 'system_file';

    use ModelTrait;


}