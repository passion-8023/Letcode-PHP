<?php


namespace App\Servides\AbstractFactory;


class AliFactory implements IFactory
{
    public static function create()
    {
        // TODO: Implement create() method.
        echo "这是支付宝";
    }
}