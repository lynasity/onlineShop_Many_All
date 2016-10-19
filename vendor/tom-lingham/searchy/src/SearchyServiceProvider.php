<?php

namespace TomLingham\Searchy;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

/**
 * This is the searchy service provider class.
 *
 * @author Tom Lingham <tjlingham@gmail.com>
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class SearchyServiceProvider extends ServiceProvider
{
  // 设置一个服务提供者是否延迟加载
     protected $defer = true;
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/searchy.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('searchy.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('searchy');
        }

        $this->mergeConfigFrom($source, 'searchy');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSearchBuilder();
    }

    /**
     * Register the search builder class.
     *
     * @return void
     */
    public function registerSearchBuilder()
    {
        $this->app->singleton('searchy', function (Container $app) {
            $config = $app['config'];

            return new SearchBuilder($config);
        });

        $this->app->alias('searchy', HashidsFactory::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    // 设置延迟后必须定义provides方法返回我们在register方法中定义的绑定名称
    public function provides()
    {
        return [
            'searchy',
        ];
    }
}
