<?php
// +----------------------------------------------------------------------
// | user.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------

// 用户登录
$router->add('/user/login', 'App\\Controllers\\User\\Login::index');
// 用户信息
$router->add('/user/info', 'App\\Controllers\\User\\User::info');
// 保存信息
$router->add('/user/save', 'App\\Controllers\\User\\User::save');
// 我的足迹列表
$router->add('/user/footmark/list', 'App\\Controllers\\User\\Footmark::index');
// 新增足迹
$router->add('/user/footmark/save', 'App\\Controllers\\User\\Footmark::save');
// 附近的足迹
$router->add('/user/footmark/near', 'App\\Controllers\\User\\Footmark::near');
// 我的Oauth授权列表
$router->add('/user/oauth/list', 'App\\Controllers\\User\\Oauth::list');
// 新增Oauth授权
$router->add('/user/oauth/save', 'App\\Controllers\\User\\Oauth::save');
// 获取Github用户信息
$router->add('/user/github/user', 'App\\Controllers\\User\\Github::user');
// 强制刷新Github用户信息
$router->add('/user/github/refresh', 'App\\Controllers\\User\\Github::refresh');
// 我的体重列表
$router->add('/user/weight/index', 'App\\Controllers\\User\\Weight::index');
// 新增体重
$router->add('/user/weight/add', 'App\\Controllers\\User\\Weight::add');
// 体重曲线
// $router->add('/user/weight/chart', 'App\\Controllers\\User\\Weight::chart');

