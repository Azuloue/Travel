<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CountryController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [PostController::class, 'index'])->name('top');
//トップページ

Route::get('/spots', [PostController::class, 'show'])->name('list');
//一覧画面

Route::get('/spots/{spot}', [PostController::class,'detail']);
//投稿詳細画面

Route::get('/tags/{tag}', [TagController::class,'show']);
//タグの絞り込み画面

Route::get('/countries/{country}', [CountryController::class,'show']);
//国での絞り込み画面

Route::group(['middleware' => ['auth']], function(){

    Route::get('/create', [PostController::class ,'create'])->name('create');
    //投稿作成画面
        
    Route::post('/spots', [PostController::class ,'store']);
    //投稿保存
    
    Route::get('/spots/{spot}/edit', [PostController::class ,'edit']);
    //投稿編集画面
    
    Route::put('/spots/{spot}', [PostController::class ,'update']);
    //投稿編集画面
    
    Route::delete('/spots/{spot}', [PostController::class,'delete']);

});
