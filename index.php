<?php
// +----------------------------------------------------------------------
// | NO DREAM NO SUCCESS
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2017 http://caizhaoke.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: zorke <zhaoke_cai@163.com>
// +----------------------------------------------------------------------
// | User: zhaoke  |  Date: 2017/4/16  |  Time: 16:38
// +----------------------------------------------------------------------

//本文件为应用入口文件

//ThinkPHP路径
define('THINK_PATH','./ThinkPHP/');

//检测PHP环境：ThinkPHP3.2.3要求php版本大于5.4.0
if (version_compare(PHP_VERSION,'5.4.0','<')){
    die('require PHP > 5.4.0');
}

// 定义应用目录
define('APP_PATH','./Application/');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 引入ThinkPHP入口文件
require THINK_PATH.'ThinkPHP.php';






