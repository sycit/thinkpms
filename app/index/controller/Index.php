<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2019  http://www.sycit.cn
// +----------------------------------------------------------------------
// | Author: Peter.Zhang  <hyzwd@outlook.com>
// +----------------------------------------------------------------------
// | Date:   2019/6/6
// +----------------------------------------------------------------------
// | Title:  Index.php
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\BaseController;

/**
 * @Desc 默认控制器
 */
class Index extends BaseController
{
    /**
     * @Url GET|POST
     * @Input string $username {10} default="默认用户名称" desc="用户名称" filter="app(app,name)"
     */
    public function index()
    {
        return $this->request->get(['username']);
    }
}
