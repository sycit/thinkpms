<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2019  http://www.sycit.cn
// +----------------------------------------------------------------------
// | Author: Peter.Zhang  <hyzwd@outlook.com>
// +----------------------------------------------------------------------
// | Date:   2019/9/6
// +----------------------------------------------------------------------
// | Title:  provider.php
// +----------------------------------------------------------------------

// 容器Provider定义文件
use app\ExceptionHandle;
use app\Request;

return [
    'think\Request'          => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
];