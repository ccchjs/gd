<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller()->group(function () {
Route::get('/index.html', [App\Http\Controllers\Admin\IndexController::class,'index' ]); 
Route::resource('/index',App\Http\Controllers\Admin\RoleController::class );
Route::resource('/permission',App\Http\Controllers\Admin\PermissionController::class);
Route::get('/create.p', [App\Http\Controllers\Admin\PermissionController::class,'create' ]);
Route::get('/create.r',[App\Http\Controllers\Admin\RoleController::class,'create']);

})->middleware(['auth', 'role:admin'])->name('admin.index');

Route::controller(App\Http\Controllers\Admin\PermissionController::class)->group(function () {
    Route::post('/create.p','store');
    Route::get('/permission.edit/{permission_id}','edit');
    Route::put('/permission.update/{permission_id}','update');
    Route::delete('/permission.delete/{permission_id}','destroy');
   

})->middleware(['auth', 'role:admin'])->name('admin.index');
require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\Admin\RoleController::class)->group(function () {
    Route::post('/create.r','store');
    Route::get('/Roles.edit/{role_id}','edit');
    Route::put('/Roles.update/{role_id}','update');
    Route::delete('/Roles.delete/{role_id}','destroy');

})->middleware(['auth', 'role:admin'])->name('admin.index');
require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
    Route::get('/guidance.html','guidance');

    Route::get('/add-schedule.html','addschedule');
    Route::get('/schedule.html','schedule');

    Route::get('/addrecord.html','addrecord');
    Route::get('/record.html','record');
    
    Route::get('/addscholar.html','addscholar');
    Route::get('/scholar.html','scholar');

    Route::get('/evaluation.html','evaluation');
    Route::get('/teacher-records.html','teacher');

    Route::get('/student.html','student');
});
