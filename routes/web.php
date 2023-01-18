<?php

use App\Models\Blog;
use App\Models\Role;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Auth::routes([
    'login' => false,
]);
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

// Route::group(['middleware' => ['is_admin']], function() {
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

// Route::group(['middleware' => ['CustomerMiddleware']], function() {
// Route::get('/sub', [App\Http\Controllers\HomeController::class, 'sub'])->name('sub');
// });


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {

    Route::get('/{vue_capture?}', function () {
        return view('layout');
    })->where('vue_capture', '.*')->name('dashboard');
});
Route::get('/{vue_capture?}', function () {


    $categoriesCount = Category::where('name','ভিডিও গ্যালারি')->count();
    if($categoriesCount>0){
          $categories = Category::where('name','ভিডিও গ্যালারি')->first();

        $latestpost = Blog::where('cat_id','!=',$categories->id)->orderBy('id','desc')->latest()->limit(8)->get();
    }else{

        $latestpost = Blog::orderBy('id','desc')->latest()->limit(8)->get();
    }







    return view('frontlayout',compact('latestpost'));
})->where('vue_capture', '.*')->name('frontend');
