<?php
namespace Invigor\Confluence;

use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: ivan.li
 * Date: 10/5/2016
 * Time: 4:19 PM
 */
class ConfluenceServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfluence();
    }

    private function registerConfluence()
    {
        $this->app->bind('confluence', function ($app) {
            return new Confluence($app);
        });
        $this->app->alias('confluence', 'Invigor\Confluence\Confluence');
    }
}