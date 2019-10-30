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
     * @Input url $username default="http://www.sycit.cn" desc="用户名称"
     * @Input email $password default="hyzwd@outlook.com" desc="用户密码"
     */
    public function index()
    {
        $data = $this->request->get(['username','password']);

        return $data;
    }
}
