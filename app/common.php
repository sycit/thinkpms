<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2019  http://www.sycit.cn
// +----------------------------------------------------------------------
// | Author: Peter.Zhang  <hyzwd@outlook.com>
// +----------------------------------------------------------------------
// | Date:   2019/9/6
// +----------------------------------------------------------------------
// | Title:  common.php
// +----------------------------------------------------------------------

// 应用公共文件

/*
 * 格式化的dump
 * @author Peter.Zhang
 **/
function p($class ='', $function = '') {
    if (is_bool($class)) {
        var_export($class);
        echo PHP_EOL;
    } elseif (is_null($class)) {
        var_export(null);
        echo PHP_EOL;
    } else {
        $data = empty($function) ? print_r($class, true) : print_r($class.' -> '.$function, true);
        echo ">> " . $data . PHP_EOL;

        //echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($data, true) . "</pre>";
    }
}