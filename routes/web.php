<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
//トップページ

Route::get('/spots', [PostController::class, 'show']);
//一覧画面

Route::get('/create', [PostController::class ,'create']);
//投稿作成画面

Route::get('/spots/{spot}', [PostController::class,'detail']);
//投稿詳細画面

Route::post('/spots', [PostController::class ,'store']);
//投稿保存

Route::get('/spots/{spot}/edit', [PostController::class ,'edit']);
//投稿編集画面

Route::put('/spots/{spot}', [PostController::class ,'update']);
//投稿編集画面

Route::delete('/spots/{spot}', [PostController::class,'delete']);


//タグ、国ごとの絞り込み、自身の投稿表示は後で


