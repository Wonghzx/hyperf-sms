<?php
/**
 * Created By PhpStorm
 * Author Wongzx <wonghzx@hotmail.com>
 */
declare(strict_types=1);

namespace Hzx\HyperfSms;

use Hyperf\Contract\ConfigInterface;
use Overtrue\EasySms\EasySms;
use Psr\Container\ContainerInterface;

class SmsFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class)->get('sms');
        return new EasySms($config);
    }
}