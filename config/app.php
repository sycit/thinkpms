<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2019  http://www.sycit.cn
// +----------------------------------------------------------------------
// | Author: Peter.Zhang  <hyzwd@outlook.com>
// +----------------------------------------------------------------------
// | Date:   2019/9/6
// +----------------------------------------------------------------------
// | Title:  app.php
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

use think\facade\Env;

return [
    // 是否启用事件
    'with_event'            => true,
    // 版本控制 数组['v1']
    'app_versions'          => [],
    // 自动多应用模式
    'auto_multi_app'        => true,
    // 应用映射（自动多应用模式有效）
    'app_map'               => [],
    // 域名绑定（自动多应用模式有效）
    'domain_bind'           => [],
    // 禁止URL访问的应用列表（自动多应用模式有效）
    'deny_app_list'         => ['library'],
    // 默认时区
    'default_timezone'      => 'Asia/Shanghai',
    // 默认应用
    'default_app'           => 'index',
    // 默认控制器名
    'default_controller'    => 'Index',
    // 默认操作名
    'default_action'        => 'index',
    // pathinfo分隔符
    'pathinfo_depr'         => '/',
    // 是否强制使用REST
    'route_rest_must'       => false,
    // REST定义
    'route_rest_action'     => [
        'index'  => 'GET',
        'create' => 'GET',
        'edit'   => 'GET',
        'read'   => 'GET',
        'save'   => 'POST',
        'update' => 'PUT',
        'delete' => 'DELETE',
    ],
];
