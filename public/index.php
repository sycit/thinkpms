<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2019  http://www.sycit.cn
// +----------------------------------------------------------------------
// | Author: Peter.Zhang  <hyzwd@outlook.com>
// +----------------------------------------------------------------------
// | Date:   2019/8/1
// +----------------------------------------------------------------------
// | Title:  index.php
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;

// 应用根目录
$rootPath = dirname(__DIR__) . DIRECTORY_SEPARATOR;

require sprintf("%svendor%sautoload.php", $rootPath, DIRECTORY_SEPARATOR);

// 执行HTTP应用并响应
$http = (new App($rootPath))->http;

$response = $http->run();

$response->send();

$http->end($response);