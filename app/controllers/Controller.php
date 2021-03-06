<?php
// +----------------------------------------------------------------------
// | 控制器基类 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Controllers;

use App\Controllers\Traits\Response;
use Xin\Phalcon\Logger\Factory;

abstract class Controller extends \Phalcon\Mvc\Controller
{
    use Response;

    public function initialize()
    {
        $url = $this->request->getURI();
        $params = $this->request->get();

        /** @var Factory $factory */
        $factory = di('logger');
        $logger = $factory->getLogger('request');
        $message = 'URI:' . $url . PHP_EOL;
        $message .= 'PARAMS:' . json_encode($params, JSON_UNESCAPED_UNICODE) . PHP_EOL;
        $logger->info($message);
    }

    public function beforeExecuteRoute()
    {
        // 在每一个找到的动作前执行
    }

    public function afterExecuteRoute()
    {
        // 在每一个找到的动作后执行
    }
}
