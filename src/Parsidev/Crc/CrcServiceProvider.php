<?php

namespace Parsidev\Crc;

use Illuminate\Support\ServiceProvider;

class CrcServiceProvider extends ServiceProvider {

    protected $defer = true;

    public function register() {
        $this->app->singleton('CRC', function($app) {
            return new Crc();
        });
    }

    public function provides() {
        return ['CRC'];
    }

}
