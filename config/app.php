<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2019  http://www.sycit.cn
// +----------------------------------------------------------------------
// | Author: Peter.Zhang  <hyzwd@outlook.com>
// +----------------------------------------------------------------------
// | Date:   2019/9/6
// +----------------------------------------------------------------------
// | Title:  demo.php
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
    'domain_bind'           => [
        'demo'    => 'demo',
    ],
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
    // URL请求方法
    'request_method'        => ['GET', 'POST', 'PUT', 'DELETE', 'PATCH', 'OPTIONS', 'HEAD'],
    // 自动响应输出类型(为空不开启),如：'json'=>'\\app\\...', 默认Json
    'auto_response_type'    => [],
    // 强制REST定义(为空不开启),如：'index'=>'GET'
    'route_rest_action'     => [],
];
