<?php

namespace Createforweb\CryptoMessage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Createforweb\CryptoMessage\CryptoMessage
 */
class CryptoMessage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Createforweb\CryptoMessage\CryptoMessage::class;
    }
}
