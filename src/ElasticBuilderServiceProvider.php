<?php
/**
 * Created by PhpStorm.
 * User: bmix
 * Date: 6/8/16
 * Time: 1:59 PM
 */


namespace ElasticBuilder;

use ElasticBuilder\Query\Boolean;
use ElasticBuilder\Query\DisMax;
use Illuminate\Support\ServiceProvider;

class ElasticBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // boolean query class
        $this->app->singleton('elasticbuilder', function ($app) {
            return new ElasticBuilder;
        });
        
    }
}