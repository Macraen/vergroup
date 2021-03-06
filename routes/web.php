<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['permission:permission_admin_panel'])->prefix('admin_panel')->group( function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    Route::middleware(['permission:user_show'])->resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::prefix('poster')->group(static function () {
        Route::get('/', [App\Http\Controllers\admin\PosterController::class, 'index'])->name('main.poster');
        Route::post('/save', [App\Http\Controllers\admin\PosterController::class, 'save'])->name('main.poster.save');
    });
    Route::prefix('skills')->group(static function () {
        Route::get('/', [App\Http\Controllers\admin\SkillsController::class, 'index'])->name('main.skills');
        Route::post('/save', [App\Http\Controllers\admin\SkillsController::class, 'save'])->name('main.skills.save');
    });
    Route::prefix('experience')->group(static function () {
        Route::get('/', [App\Http\Controllers\admin\ExperienceController::class, 'index'])->name('main.experience');
        Route::post('/save', [App\Http\Controllers\admin\ExperienceController::class, 'save'])->name('main.experience.save');
    });
    Route::prefix('contact')->group(static function () {
        Route::get('/', [App\Http\Controllers\admin\ContactController::class, 'index'])->name('main.contact');
        Route::post('/save', [App\Http\Controllers\admin\ContactController::class, 'save'])->name('main.contact.save');
    });
    Route::prefix('projects')->group(static function () {
        Route::get('/', [App\Http\Controllers\admin\ProjectsController::class, 'index'])->name('main.projects');
        Route::post('/save', [App\Http\Controllers\admin\ProjectsController::class, 'save'])->name('main.projects.save');
    });
});
