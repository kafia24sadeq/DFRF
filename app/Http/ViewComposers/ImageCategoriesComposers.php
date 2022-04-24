<?php

namespace Systems\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Systems\ImageCategory;

class ImageCategoriesComposers
{
  /**
  * The user repository implementation.
  *
  * @var UserRepository
  */
  protected $ImageCategories;

  /**
  * Create a new profile composer.
  *
  * @param  UserRepository  $ImageCategories
  * @return void
  */
  public function __construct(ImageCategory $ImageCategories)
  {
    // Dependencies automatically resolved by service container...
    $this->ImageCategories = $ImageCategories;
  }

  /**
  * Bind data to the view.
  *
  * @param  View  $view
  * @return void
  */
  public function compose(View $view)
  {
    $view->with('ImageCategory', $this->ImageCategories->pluck('name', 'id') );
  }
}
