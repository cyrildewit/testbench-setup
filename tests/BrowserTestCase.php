<?php

namespace CyrildeWit\TestbenchSetup\Tests;

use Orchestra\Testbench\Dusk\TestCase as BaseTestCase;

abstract class BrowserTestCase extends BaseTestCase
{
    use CreatesApplication;

    // protected $laravelPath = 'vendor/orchestra/testbench-dusk/laravel';

    // protected static $baseServeHost = '127.0.0.1';
    // protected static $baseServePort = 5230;
}
