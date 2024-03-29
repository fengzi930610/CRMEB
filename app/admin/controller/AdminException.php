<?php
/**
 *
 * @day: 2019年11月6日 14:35:31
 */

namespace app\admin\controller;

use think\exception\Handle;
use think\exception\ValidateException;
use think\Response;
use Throwable;

/**
 * 后台异常处理
 *
 * Class AdminException
 * @package app\admin\controller
 */
class AdminException extends Handle
{

    public function render($request, Throwable $e): Response
    {
        // 参数验证错误
        if ($e instanceof ValidateException) {
            return app('json')->make(422, $e->getError());
        }
        if ($e instanceof \Exception && request()->isAjax()) {
            return app('json')->fail(['code' => $e->getCode(), 'message' => $e->getMessage(), 'file' => $e->getFile()]);
        }

        return parent::render($request, $e);
    }
}