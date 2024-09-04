<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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


//Route::resource('jobs',JobController::class); // need to be index store and so on in controller(functions)







