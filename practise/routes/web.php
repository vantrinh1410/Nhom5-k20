<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
/*  1. Truyền tham số vào đường dẫn tại trang chủ
    2. Giới thiệu về trường học 
    3. Đăng nhập
    4. Đăng ký
    5. Tìm kiếm
    6. Read-more
*/


Route::get('/',[PagesController::class,'index']);

// // 1. Truyền tham số vào đường dẫn tại trang chủ
Route::get('/demo/{name}',[PagesController::class,'changes']);

// 2. Giới thiệu về trường học 
Route::get('/about',[PagesController::class,'about']);

// 3. Đăng nhập
Route::get('/login',[PagesController::class,'login']);

// 4. Đăng ký
Route::get('/register',[PagesController::class,'register']);

// 5. Tìm kiếm
Route::get('search',function(){
    return view('index');
});

Route::post('search',function(){
    return '<h1 style="text-align:center;color:red">Đây là kết quả bạn cần tìm👻👻👻</h1>';
});
// 6. Read-more
Route::get('about', function(){
    return view('about');
})->name('read-more');
//7. Chạy thử middleware

// Route::get('/admin', function(){
//     return 'Chào mừng các bạn đến với HPC cs Thanh Trì';
// })->middleware('sub'); 

// Route::get('/adc', function(){
//     return 'Chúc mừng bạn lên tt 7';
// })->middleware('sub');

//8.main
Route::get('/admin', function(){
    return view('admin.main');});



