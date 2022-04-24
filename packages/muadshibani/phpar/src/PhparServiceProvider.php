<?php
namespace Muadshibani\Phpar;

use Illuminate\Support\ServiceProvider;

class PhparServiceProvider extends ServiceProvider
{
  /**
  * Bootstrap the application services.
  *
  * @return void
  */
  public function boot()
  {
    
  }

  /**
  * Register the application services.
  *
  * @return void
  */
  public function register()
  {
//    $this->app['phpar'] = $this->app->share(function($app) {
//      return new Phpar;
//    });
  }
}
