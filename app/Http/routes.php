<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//Route::post('', 'MailsController@store')->name('mails.store');

//Route::auth();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::get('/services', function(){


    return view('services.index');
});

Route::get('/law', function(){


    return view('pages.law');
});
Route::get('/structure', function(){


    return view('pages.structure');
});
Route::get('/goals', function(){


    return view('pages.goals');
});
Route::get('/history', function(){


    return view('pages.history');
});


Route::get('/locations', function(){

    return view('locations.index');
});


Route::get('/', 'HomeController@index');


//public pages show
Route::get('pages/{id}/',  'PagesController@show');

// Route::get('pages/{id}/', function(){
//  return "data";
// }
// );


Route::get('programs/', [
    'as' => 'programs', 'uses' => 'ProgramsController@index'
]);
//
//
Route::get('program/{id}/', [
    'as' => 'program', 'uses' => 'ProgramsController@show'
]);

Route::get('works/', [
    'as' => 'works', 'uses' => 'WorkController@index'
]);


Route::get('work/{id}/', [
    'as' => 'work', 'uses' => 'WorkController@show'
]);


// //products
// Route::get('products/', [
//     'as' => 'products', 'uses' => 'ProductsController@index'
// ]);

// Route::get('product/{id}/', [
//     'as' => 'product', 'uses' => 'ProductsController@show'
// ]);

// Route::get('products/categories/{id}', [
//     'as' => 'products_cat', 'uses' => 'ProductsController@getResults'
// ]);


Route::get('pcat/{id}/', [
    'as' => 'pcat', 'uses' => 'ProductsController@indexCat'
]);

Route::get('news/{id}/', [
    'as' => 'post', 'uses' => 'PostController@show'
])->middleware('counter');

Route::get('print/{id}/', [
    'as' => 'print', 'uses' => 'PostController@printPage'
]);


Route::get('product/{id}/print', [
    'as' => 'productprint', 'uses' => 'ProductsController@printPage'
]);

Route::get('pdf', [
    'as' => 'pdf', 'uses' => 'AllpdfController@index'
]);




Route::get('news/', [
    'as' => 'posts', 'uses' => 'PostController@index'
]);

Route::get('/success_stories', [
    'as' => 'stories', 'uses' => 'StoryController@index'
]);

Route::get('/success_stories/{id}', [
    'as' => 'story', 'uses' => 'StoryController@show'
]);


Route::get('/before_establishment', [
    'as' => 'stories', 'uses' => 'BeforeEstablishment@index'
]);

Route::get('/before_establishment/{id}', [
    'as' => 'story', 'uses' => 'BeforeEstablishment@show'
]);



Route::get('search/', [
    'as' => 'search', 'uses' => 'PostController@search'
]);
//writers
Route::get('writers/', [
    'as' => 'writers', 'uses' => 'WritersController@index'
]);

Route::get('writer/{id}', [
    'as' => 'writer', 'uses' => 'WritersController@show'
]);


Route::get('rss/', function() {


    $post = \Systems\Category::take(10)->get()->toArray();

    return response()->json($post);
} );









Route::get('cat/{id}/', [
    'as' => 'cat', 'uses' => 'PostController@indexCat'
]);

Route::get('vcat/{id}/', [
    'as' => 'vcat', 'uses' => 'VideoController@indexCat'
]);

Route::get('video/{id}/', [
    'as' => 'video', 'uses' => 'VideoController@show'
]);


Route::get('videos/', [
    'as' => 'videos', 'uses' => 'VideoController@index'
]);

Route::get('image/{id}/', [
    'as' => 'photo', 'uses' => 'PhotoController@show'
]);

 Route::get('images/', [
     'as' => 'photos', 'uses' => 'PhotoController@index'
 ]);

Route::get('images/{id}/', [
    'as' => 'photoscat', 'uses' => 'PhotoController@indexcat'
]);


Route::get('ads/', [
    'as' => 'ads', 'uses' => 'AnnouncementController@index'
]);

Route::get('ads/{id}/', [
    'as' => 'ads_show', 'uses' => 'AnnouncementController@show'
]);


Route::get('/jobs', [
    'as' => 'jobs', 'uses' => 'JobsController@index'
]);
//
Route::get('job/{id}', [
    'as' => 'job', 'uses' => 'JobsController@show'
]);
//
//Route::get('tenders/', [
//    'as' => 'tenders', 'uses' => 'TendersController@index'
//]);
//
//Route::get('tender/{id}/', [
//    'as' => 'tender', 'uses' => 'TendersController@show'
//]);

//Route::get('companies/', [
//    'as' => 'companies', 'uses' => 'AllCompanyController@index'
//]);
//
//Route::get('courses/', [
//    'as' => 'courses', 'uses' => 'CoursesController@index'
//]);

//Route::get('courses/{id}', [
//    'as' => 'course', 'uses' => 'CoursesController@show'
//]);
//
//Route::get('company/{id}', [
//    'as' => 'comapny', 'uses' => 'AllCompanyController@show'
//]);
//
Route::get('/docs', [
    'as' => 'media', 'uses' => 'MediaController@index'
]);


//Route::resource('polls', 'PollsController');

//
//Route::resource('volunteer', 'VolunteeringFormController');
//
Route::resource('members', 'MembersController');

// Route::resource('companies', 'AllCompanyController');



//rss
Route::get('rss/main', [
    'as' => 'mainrss', 'uses' => 'RssController@main'
]);

Route::get('rss', [
    'as' => 'allrss', 'uses' => 'RssController@index'
]);

Route::get('rss/sections/{id}', [
    'as' => 'sectionrss', 'uses' => 'RssController@sections'
]);

Route::get('rss/breaking', [
    'as' => 'breakingrss', 'uses' => 'RssController@breaking'
]);





//sitemap
Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
    // by default cache is disabled
    $sitemap->setCache('laravel.sitemap', 60);

    // check if there is cached sitemap and build new only if is not
    if (!$sitemap->isCached())
    {
        // add item to the sitemap (url, date, priority, freq)
//        $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
//        $sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

        // get all posts from db
        $posts = DB::table('posts')->orderBy('fd_at', 'desc')->get();

        // add every post to the sitemap
        foreach ($posts as $post)
        {
            $sitemap->add(route('post',$post->id), $post->updated_at, 1 , 0.5);
        }
    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    return $sitemap->render('xml');

});




//admin




//upload



Route::group(['middleware' => [ 'web']], function () {
    Route::post('uploadimage', 'UploadController@image');
    Route::post('updateimage', 'UploadController@updateimage');
    Route::post('uploadfile', 'UploadController@uploadfile');
    Route::post('uploadmultiimage', 'UploadController@multiimage');
    Route::get('inliner', 'UploadController@inliner');
    Route::get('uploadimage/{id?}/edit', 'UploadController@imageedit');
    Route::post('/tiny-uploader', 'UploadController@tinyUploader')->name('tiny.upload');


    Route::get('/logout', '\Systems\Http\Controllers\Auth\LoginController@logout');
    Route::post('getvideoinfo', 'UploadController@getVideoInfo');
    Route::post('searchImage', 'UploadController@searchImage');
    Route::post('searchWriter', 'UploadController@searchWriter');

});



Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>  ['admin']  ], function () {

    //posts
    Route::get('indexCategory/{id}/', 'PostController@indexCategory');
    Route::resource('uploadfiles', 'UploadsController');
    Route::resource('reports', 'ReportsController');
    Route::resource('posts', 'PostController');


    Route::resource('advertisements', 'AdvertisementController');
    Route::resource('announcements', 'AnnouncementController');
//    Route::resource('articles', 'ArticleController');
    Route::resource('categories', 'CategoryController');

    //products
    Route::resource('products', 'ProductController');
    Route::resource('productcategories', 'ProductCategoriesController');

    //programs & works
    Route::resource('programs', 'ProgramsController');

    Route::resource('works', 'WorksController');

    //store -update -view images
    Route::resource('pictures', 'PhotosController');

//    Route::post

    Route::resource('jobs', 'JobsController');
    Route::resource('tenders', 'TendersController');

    Route::resource('members', 'MembersController');

    //pages
    Route::resource('pages', 'PageController');
//    Route::resource('polls', 'PollsController');

//    Route::resource('writers', 'WriterController');


    //tasks
    Route::resource('tasks', 'TasksController');

    //images
    Route::resource('images', 'ImageController');
    Route::resource('imagecategories', 'ImageCategoriesController');

    //videos
    Route::resource('videos', 'VideoController');
    Route::resource('videocategories', 'VideoCategoriesController');


    Route::put('/image_update/{id}/edit','ImageController@updateImage')->name('images.updateImage');

    //roles from entrust
    Route::resource('roles', 'RolesController');

    //Permissions from entrust
    Route::resource('permissions', 'PermissionsController');


    //users
    Route::resource('users', 'UserController');
    Route::resource('password', 'PasswordController');


    //settings
    Route::resource('settings','SettingsController');

    //control panel home
    //control panel home
    Route::resource('controlpanel','PanelController');
    Route::get('/','PanelController@index');
    Route::get(' ','PanelController@index');


    //userlogs
    Route::resource('userlogs','LogController');


    //trash
    Route::resource('trash','TrashController');

    //Mail
    Route::resource('mail', 'MailController');
//    Route::get('/mail/index','MailController@index');

    Route::resource('applicants','ApplicantsController');
     //Company
     Route::resource('companies','CompanyController');

     //projects
     Route::resource('projects','ProjectsController');
     Route::resource('courses','CourseController');

     //groups
     Route::resource('groups','GroupsController');


    // Route::resource('projects','ProjectsController@pupdate');

    Route::get('/groups/{id}/export','GroupsController@export')->name('groups.export');
//    Route::get('groups//export/{id}/', [
//        'as' => 'groups', 'uses' => 'GroupsController@export'
//    ]);
//    Route::get('/applicants/export',[ 'as'=>'export','uses'=> 'ApplicantsController@export']);

});

//Route::resource('media','MediaController');
//Route::resource('courses','CoursesController');
//
//Route::get('/export',function (){
//    return 'hello';
//});
Route::resource('applicants','ApplicantsController');

Route::get('reports/{id}/', [
    'as' => 'reports', 'uses' => 'MediaController@show'
]);
Route::get('cour/{id}/', [
    'as' => 'cour', 'uses' => 'CoursesController@course'
]);

Route::resource('/mails', 'MailsController');

Route::resource('home','HomeController');


// //projects

Route::get('ourworks', [
    'as' => 'ourworks', 'uses' => 'OurworkController@index'
]);

//Issues
Route::get('issues/one/', [
    'as' => 'issues', 'uses' => 'IssuesController@issues_one'
]);
Route::get('issues/two/', [
    'as' => 'issues', 'uses' => 'IssuesController@issues_two'
]);
Route::get('issues/three/', [
    'as' => 'issues', 'uses' => 'IssuesController@issues_three'
]);
Route::get('issues/four/', [
    'as' => 'issues', 'uses' => 'IssuesController@issues_four'
]);
Route::get('issues/fifteen/', [
    'as' => 'issues', 'uses' => 'IssuesController@issues_fifteen'
]);
///statistics
Route::get('statistics/', [
    'as' => 'statistics', 'uses' => 'statisticsController@index'
]);

//about 
