<?php

namespace Systems\Providers;

use Collective\Html\FormBuilder;
use Systems\View\ThemeViewFinder;

use Illuminate\Support\Facades\URL;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Collective\Html\HtmlServiceProvider;
use Illuminate\Contracts\View\Factory as ViewFactory;



class AppServiceProvider extends ServiceProvider
{
  /**
  * Bootstrap any application services.
  *
  * @return void
  */
  public function boot(ViewFactory $view) {
    $view->composer('admin.jquery.imageuploader','Systems\Http\ViewComposers\ImageCategoriesComposers');

    $this->app['view']->setFinder($this->app['theme.finder']);
    // URL::forceScheme('http');
  }

  /**
  * Register any application services.
  *
  * @return void
  */
  public function register()
  {
    $this->app->singleton('theme.finder', function ($app) {
      $finder = new ThemeViewFinder($app['files'], $app['config']['view.paths']);
      $config = $app['config']['cms.theme'];
      $finder->setBasePath(public_path().'/'.$config['folder']);
      $finder->setActiveTheme($config['active']);
      return $finder;
    });
  }
}
