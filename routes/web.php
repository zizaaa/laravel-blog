<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', [PageController::class,'index']);

Route::prefix('/')->group(function () {
    
    Route::get('/javascript', [CategoryController::class, 'javascript']);

    Route::get('/node', [CategoryController::class, 'nodejs']);

    Route::get('/reactjs', [CategoryController::class, 'react']);

    Route::get('/laravel', [CategoryController::class, 'laravel']);

    Route::get('/', [PageController::class, 'index']);

    Route::get('/',[CategoryController::class, 'allCategory']);
});

Route::get('/about', [PageController::class,'about']);

Route::prefix('/dashboard')->group(function (){

    Route::get('/form', [PageController::class,'form']);

    Route::get('/editBlogForm/{id}', [PageController::class, 'editBlogForm']);

    Route::get('/', [PageController::class,'dashboard']);

    Route::get('/', [PageController::class,'dashboardDatas']);
});

Route::get('/blog/{id}', [PageController::class, 'viewBlog']);

//api
Route::post('/blog/api', [ApiController::class,'store']);
Route::put('api/update/{id}', [ApiController::class,'update']);
Route::delete('/api/delete/{id}', [ApiController::class,'delete']);
