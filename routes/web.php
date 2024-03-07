<?php
use App\Http\Controllers\HomeController;
use App\Models\Episode;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;

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

Route::resource("/movie", MovieController::class);
Route::resource("/episode", EpisodeController::class);

Route::get('/',[HomeController::class,'index']);

Route::get('/admin',function(){
    return view('admin/index');
});

Route::get('/thong-tin-phim/{id}',[HomeController::class,'show']);
Route::get('/xem-phim/{movie_id}/{id}',[HomeController::class,'xemphim']);
Route::get('/tim-kiem/',[HomeController::class,'ketquatimkiem']);