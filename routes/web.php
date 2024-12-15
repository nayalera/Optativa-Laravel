<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use Illuminate\Support\Facades\Artisan;

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


// Route::get('/clear', function() {
//     // Storage::deleteDirectory('public');
//     // Storage::makeDirectory('public');
//     Artisan::call('route:clear');
//     Artisan::call('storage:link', []);
// });

//Para idioma
Route::get('lang/{lang}', function ($lang = ''){
    session(['locale' => $lang]);
    return back();
});

Route::get('admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->middleware('authadmin');
Route::get('admin/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->middleware('authadmin');
// Para cambiar la skin del panel administracion
Route::get('admin/change_skin/{skin}', function($skin = '') {
    $us_log = session()->get(config('app.session_admin'));
    $us_log->bgcolor = $skin;
    session([config('app.session_admin') => $us_log]);
    $o = Admin::findOrFail($us_log->id);
    $o->bgcolor = $skin;
    $o->save();
    redirect()->back();
})->middleware('authadmin');

Route::get('admin/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'index']);
Route::post('admin/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'index']);
Route::put('admin/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'index']);
Route::get('admin/logout', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->middleware('authadmin');

Route::get('admin/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'index'])->middleware('authadmin');
Route::post('admin/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'index'])->middleware('authadmin');

Route::get('admin/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware('authadmin');
Route::get('admin/admin/add', [\App\Http\Controllers\Admin\AdminController::class, 'add'])->middleware('authadmin');
Route::post('admin/admin/add', [\App\Http\Controllers\Admin\AdminController::class, 'add'])->middleware('authadmin');
Route::get('admin/admin/edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit'])->middleware('authadmin');
Route::post('admin/admin/edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit'])->middleware('authadmin');
Route::get('admin/admin/change/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'change'])->middleware('authadmin');
Route::get('admin/admin/remove/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'delete'])->middleware('authadmin');

Route::get('admin/user', [\App\Http\Controllers\Admin\UserController::class, 'index'])->middleware('authadmin');
Route::get('admin/user/add', [\App\Http\Controllers\Admin\UserController::class, 'add'])->middleware('authadmin');
Route::post('admin/user/add', [\App\Http\Controllers\Admin\UserController::class, 'add'])->middleware('authadmin');
Route::get('admin/user/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->middleware('authadmin');
Route::post('admin/user/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->middleware('authadmin');
Route::get('admin/user/change/{id}', [\App\Http\Controllers\Admin\UserController::class, 'change'])->middleware('authadmin');
Route::get('admin/user/remove/{id}', [\App\Http\Controllers\Admin\UserController::class, 'delete'])->middleware('authadmin');

Route::group(['middleware' => 'authadmin'], function () {
    //Categorias
    Route::get('admin/oppcategories', [\App\Http\Controllers\Admin\OpportunityCategoriesController::class, 'index']);
    Route::get('admin/oppcategories/add', [\App\Http\Controllers\Admin\OpportunityCategoriesController::class, 'add']);
    Route::post('admin/oppcategories/add', [\App\Http\Controllers\Admin\OpportunityCategoriesController::class, 'add']);
    Route::get('admin/oppcategories/edit/{id}', [\App\Http\Controllers\Admin\OpportunityCategoriesController::class, 'edit']);
    Route::post('admin/oppcategories/edit/{id}', [\App\Http\Controllers\Admin\OpportunityCategoriesController::class, 'edit']);
    Route::get('admin/oppcategories/remove/{id}', [\App\Http\Controllers\Admin\OpportunityCategoriesController::class, 'delete']);
    Route::get('admin/oppcategories/change/{id}', [\App\Http\Controllers\Admin\OpportunityCategoriesController::class, 'change']);
    //Blogs
    Route::get('admin/blog', [\App\Http\Controllers\Admin\BlogController::class, 'index']);
    Route::get('admin/blog/add', [\App\Http\Controllers\Admin\BlogController::class, 'add']);
    Route::post('admin/blog/add', [\App\Http\Controllers\Admin\BlogController::class, 'add']);
    Route::get('admin/blog/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'edit']);
    Route::post('admin/blog/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'edit']);
    Route::get('admin/blog/remove/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'delete']);
    Route::get('admin/blog/change/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'change']);
    //Blogcategories
    Route::get('admin/blogcategories', [\App\Http\Controllers\Admin\BlogCategoriesController::class, 'index']);
    Route::get('admin/blogcategories/add', [\App\Http\Controllers\Admin\BlogCategoriesController::class, 'add']);
    Route::post('admin/blogcategories/add', [\App\Http\Controllers\Admin\BlogCategoriesController::class, 'add']);
    Route::get('admin/blogcategories/edit/{id}', [\App\Http\Controllers\Admin\BlogCategoriesController::class, 'edit']);
    Route::post('admin/blogcategories/edit/{id}', [\App\Http\Controllers\Admin\BlogCategoriesController::class, 'edit']);
    Route::get('admin/blogcategories/remove/{id}', [\App\Http\Controllers\Admin\BlogCategoriesController::class, 'delete']);
    Route::get('admin/blogcategories/change/{id}', [\App\Http\Controllers\Admin\BlogCategoriesController::class, 'change']);
    //Opportunity
    Route::get('admin/opportunity', [\App\Http\Controllers\Admin\OpportunityController::class, 'index']);
    Route::get('admin/opportunity/add', [\App\Http\Controllers\Admin\OpportunityController::class, 'add']);
    Route::post('admin/opportunity/add', [\App\Http\Controllers\Admin\OpportunityController::class, 'add']);
    Route::get('admin/opportunity/edit/{id}', [\App\Http\Controllers\Admin\OpportunityController::class, 'edit']);
    Route::post('admin/opportunity/edit/{id}', [\App\Http\Controllers\Admin\OpportunityController::class, 'edit']);
    Route::get('admin/opportunity/remove/{id}', [\App\Http\Controllers\Admin\OpportunityController::class, 'delete']);//Opportunity
    Route::get('admin/opportunity/change/{id}', [\App\Http\Controllers\Admin\OpportunityController::class, 'change']);//Opportunity
    //Applicants
    Route::get('admin/applicants', [\App\Http\Controllers\Admin\ApplicantsController::class, 'index']);
    Route::post('admin/applicants', [\App\Http\Controllers\Admin\ApplicantsController::class, 'index']);
    Route::get('admin/applicants/add', [\App\Http\Controllers\Admin\ApplicantsController::class, 'add']);
    Route::post('admin/applicants/add', [\App\Http\Controllers\Admin\ApplicantsController::class, 'add']);
    Route::get('admin/applicants/edit/{id}', [\App\Http\Controllers\Admin\ApplicantsController::class, 'edit']);
    Route::post('admin/applicants/edit/{id}', [\App\Http\Controllers\Admin\ApplicantsController::class, 'edit']);
    Route::get('admin/applicants/remove/{id}', [\App\Http\Controllers\Admin\ApplicantsController::class, 'delete']);
    Route::get('admin/applicants/change/{id}', [\App\Http\Controllers\Admin\ApplicantsController::class, 'change']);
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('landing', [\App\Http\Controllers\HomeController::class, 'landing']);

Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::post('contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::post('busquedas-activas', [\App\Http\Controllers\OpportunityController::class, 'index']);
Route::get('busquedas-activas', [\App\Http\Controllers\OpportunityController::class, 'index']);
Route::get('busquedas-activas/get_opportunity/{skip}', [\App\Http\Controllers\OpportunityController::class, 'get_opportunity']);
Route::get('busquedas-activas/get_opportunity/{skip}/{category_id}', [\App\Http\Controllers\OpportunityController::class, 'get_opportunity']);
Route::get('busquedas-activas/{slug}', [\App\Http\Controllers\OpportunityController::class, 'show']);
Route::post('busquedas-activas/{slug}', [\App\Http\Controllers\OpportunityController::class, 'show']);
Route::get('busquedas-activas/category/{category_slug}', [\App\Http\Controllers\OpportunityController::class, 'index']);

Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('blog/category/{category_id}', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show']);
Route::get('blog/get_blogs/{skip}', [\App\Http\Controllers\BlogController::class, 'get_blogs']);
Route::get('blog/get_blogs/{skip}/{category_id}', [\App\Http\Controllers\BlogController::class, 'get_blogs']);
