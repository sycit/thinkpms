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

class Index extends BaseController
{
    /**
     * @desc index
     *
     * @Route(method="get",input="name")
     * @url POST
     */
    public function index()
    {
        return 'app::Index->index';
    }
}
