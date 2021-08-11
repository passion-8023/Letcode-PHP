<?php


namespace App\Servides\AbstractFactory;


class WechatFactory implements IFactory
{
    public static function create()
    {
        // TODO: Implement create() method.
        echo "这是微信的支付";
    }
}