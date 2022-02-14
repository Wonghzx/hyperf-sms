<?php
/**
 * Created By PhpStorm
 * Author Wongzx <wonghzx@hotmail.com>
 */
declare(strict_types=1);

namespace Hzx\HyperfSms\Contract;

interface SmsInterface
{
    /**
     * @param string|array                                       $phone
     * @param \Overtrue\EasySms\Contracts\MessageInterface|array $message
     * @param array                                              $gateways
     * @return mixed
     */
    public function send($phone, $message, array $gateways = []);
}