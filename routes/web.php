<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\JobListingModel;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Policies\JobPolicy;
use App\Jobs\TranslateJob;


Route::get('test', function(){
    $job = JobListingModel::first();
    TranslateJob::dispatch($job);
    return 'Done';
});
Route::view('/','welcome');
Route::controller(JobController::class)->group(function(){
Route::get('/jobs','index');
Route::get('/jobs/create','create_view');
Route::post('/jobs/create','create_post');
Route::get('/jobs/{job}','job_detail')->name('job_detail');
Route::get('/jobs/{job}/edit','edit_job');
// ->middleware('auth')
// ->can('update','job');
Route::patch('/jobs/{job}','update');
Route::delete('/jobs/{job}','delete');
});

// Route::resource('jobs', JobController::class);
Route::view('/contact','contact');
Route::controller(RegisterController::class)->group(function(){
    Route::get('/register','create');
    Route::post('/register','store');
});

Route::controller(SessionController::class)->group(function(){
    Route::get('/login','create')->name('login');
    Route::post('/login','store');
    Route::get('/logout','destroy');
});

// require __DIR__.'/web.php';
