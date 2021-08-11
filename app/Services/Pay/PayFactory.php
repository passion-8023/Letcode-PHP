<?php


namespace App\Servides\Pay;

/**
 * 简单的工厂模型
 * Class PayFactory
 * @package App\Servides\Pay
 */
class PayFactory
{
    const WECHAT = 1;
    const ALIPAY = 2;

    public static function getInstance($pay)
    {
        switch ($pay) {
            case self::WECHAT:
                $obj = new WechatPay();
                break;
            case self::ALIPAY:
                $obj = new AliPay();
                break;
            default:
                $obj = null;
        }
        return $obj;
    }
}