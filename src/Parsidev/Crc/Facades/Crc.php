<?php

namespace Parsidev\Crc\Facades;

use Illuminate\Support\Facades\Facade;

class Crc extends Facade {

    protected static function getFacadeAccessor() {
        return 'CRC';
    }
}
