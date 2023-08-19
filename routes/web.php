
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\SliderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Plants Routes
Route::get('plants', [PlantsController::class, 'index'])->name('plants.index');
Route::get('plants/addpage', [PlantsController::class, 'plantaddpage']);
Route::post('plants/store', [PlantsController::class, 'plantstore']);
Route::get('/plants/all/edit/{id}', [PlantsController::class, 'editplant']);
Route::post('/plants/all/update/{id}', [PlantsController::class, 'updateplant']);
Route::get('/plants/all/delete/{id}', [PlantsController::class, 'deleteplant']);


// Slider Routes
Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index');
Route::get('addslider', [SliderController::class, 'addslider']);
Route::post('slider/store', [SliderController::class, 'sliderstore']);
Route::get('/slider/edit/{id}', [SliderController::class, 'editslider']);
Route::post('/slider/update/{id}', [SliderController::class, 'updateslider']);
Route::get('/slider/delete/{id}', [SliderController::class, 'deleteslider']);

// Shop Routes
Route::get('shop', [ShopController::class, 'index'])->name('shop');




Route::get('/wishlist', function () {
    return view('pages.wishlist');
})->name('wishlist');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');
Route::get('/blog_detail', function () {
    return view('pages.blog_detail');
})->name('blog_detail');


Route::get('/',[HomeController::class, 'index'])->name('welcome_page');

Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});