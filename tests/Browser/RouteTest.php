<?php

namespace CyrildeWit\TestbenchSetup\Tests\Browser;

// use Illuminate\Support\Facades\Auth;
use CyrildeWit\TestbenchSetup\Tests\BrowserTestCase;
use Laravel\Dusk\Browser;

class RouteTest extends BrowserTestCase
{
    // public function setUp()
    // {
    //     parent::setUp();
    // }

    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    // protected function getEnvironmentSetUp($app)
    // {
    //     // $app['router']->get('hello', ['as' => 'hi', 'uses' => function () {
    //     //     return 'hello world';
    //     // }]);

    //     // $app['router']->get('config', ['as' => 'hi', 'uses' => function () {
    //     //     return config('new_config_item');
    //     // }]);
    // }

    /** @test */
    public function can_use_dusk()
    {
        // dd(\DB::table('users')->get());

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel 5');
        });

        // $this->browse(function (Browser $browser) {
        //     $browser->visit('hello')
        //         ->assertSee('hello world');
        // });
    }
}
