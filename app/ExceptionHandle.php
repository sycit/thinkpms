<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2019  http://www.sycit.cn
// +----------------------------------------------------------------------
// | Author: Peter.Zhang  <hyzwd@outlook.com>
// +----------------------------------------------------------------------
// | Date:   2019/9/6
// +----------------------------------------------------------------------
// | Title:  ExceptionHandle.php
// +----------------------------------------------------------------------

namespace app;

use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
use think\exception\ApiException;
use think\exception\Handle;
use think\exception\ResponseException;
use think\exception\ValidateException;
use think\Response;
use Throwable;

/**
 * 应用异常处理类
 */
class ExceptionHandle extends Handle
{
    /**
     * 不需要记录信息（日志）的异常类列表
     * @var array
     */
    protected $ignoreReport = [
        ApiException::class,
        ResponseException::class,
        ModelNotFoundException::class,
        DataNotFoundException::class,
        ValidateException::class,
    ];

    /**
     * 记录异常信息（包括日志或者其它方式记录）
     *
     * @access public
     * @param  Throwable $e
     * @return void
     */
    public function report(Throwable $e): void
    {
        // 使用内置的方式记录异常日志
        parent::report($e);
    }


    /**
     * Render an exception into an HTTP response.
     *
     * @access public
     * @param Throwable $e
     * @return Response
     */
    public function render(Throwable $e): Response
    {
        // 添加自定义异常处理机制

        // 其他错误交给系统处理
        return parent::render($e);
    }
}
