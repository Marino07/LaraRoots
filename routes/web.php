<?php

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;


Route::view('/','home');
Route::view('/contact','contact');
Route::controller(JobController::class)->group(function (){
    Route::get('jobs/create','index_create');
    Route::post('job/create','create_job');
    Route::get('/jobs','index_jobs');
    Route::get('/job/{id}','display_job');
    Route::get('/job/{id}/edit','edit_job');
    Route::patch('/job/{id}','update_job');
    Route::delete('/job/{id}','delete_job');
});

Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);



//Route::resource('jobs',JobController::class); // need to be index store and so on in controller(functions)







