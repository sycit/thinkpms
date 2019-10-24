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
use app\index\model\User;

/**
 * @Desc 默认控制器
 */
class Index extends BaseController
{
    /**
     * @Url GET|POST
     * @Input string $username default="username" desc="用户名称"
     */
    public function index()
    {
        $data = $this->request->only(['username','password'],'data',['username' => 'www.sycit.cn', 'password'=>'hyzwd@outlook.com'],'string');
        return $data;
    }
}
