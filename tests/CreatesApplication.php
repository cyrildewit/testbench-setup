<?php

namespace CyrildeWit\TestbenchSetup\Tests;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
// use TCG\Voyager\VoyagerServiceProvider;
// use TCG\Voyager\Facades\Voyager;
// use TCG\Voyager\Models\User;

trait CreatesApplication
{
    protected $laravelPath;

    public function setUp()
    {
        parent::setUp();

        // Load default Laravel migrations (users and password_resets table)
        $this->loadLaravelMigrations();

        // // Remove web routes file and create default one
        $this->resetWebRoutesFile();

        // Register test database migrations and factories
        // $this->registerTestMigrations(); // TODO: fix error
        $this->registerTestFactories();

        // // Regsiter the web routes
        $this->loadWebRoutes();

        $this->showRoutes();
        // dd();
    }

    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // $app['router']->group(['prefix' => 'admin'], function () {
        //     \Voyager::routes();
        // });

        // $app[]->middleware

        // $app['router']->groep('test', ['uses' => function () {
        //     return 'yolo';
        // }]);
    }

    // protected function getPackageProviders($app)
    // {
    //     return [
    //         VoyagerServiceProvider::class,
    //     ];
    // }

    // protected function getPackageAliases($app)
    // {
    //     return [
    //         'Voyager' => Voyager::class,
    //     ];
    // }

    // /**
    //  * Create default web routes file.
    //  *
    //  * @return void
    //  */
    // protected function resetWebRoutesFile()
    // {
    //     $routesPath = 'vendor/orchestra/testbench-dusk/laravel/routes';

    //     if (! File::exists($routesPath)) {
    //         File::makeDirectory($routesPath);
    //     }

    //     $webRoutesPath = base_path('routes/web.php');
    //     $webRoutesContent = "<?php Route::get('/', function () {return view('welcome');});";
    //     $webRoutesContent += "Route::get('/test', function () {return 'yolo';});";

    //     File::put($webRoutesPath, $webRoutesContent);
    // }

    /**
     * Register test database migrations.
     *
     * @return void
     */
    protected function registerTestMigrations()
    {
        $this->loadMigrationsFrom(realpath(__DIR__.'/database/migrations'));
    }

    /**
     * Register test database factories.
     *
     * @return void
     */
    protected function registerTestFactories()
    {
        $this->withFactories(realpath(__DIR__.'/database/factories'));
    }

    // protected function loadWebRoutes()
    // {
    //     Route::middleware('web')
    //         ->group(base_path('routes/web.php'));
    // }

    protected function showRoutes()
    {
        $routeList = \Route::getRoutes();

        foreach ($routeList as $value)
        {
            var_dump($value->uri());
        }
    }
}
