<?php

use App\Jobs\TranslateJob;
use App\Models\Job;
use App\Mail\JobPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;


Route::get('/test2',function(){
    $joblistening = Job::first();

    TranslateJob::dispatch($joblistening)->delay(now()->addMinutes(1)); //delay vezan uz dispatch
                                                                        //dispatch pravi instancu TranslateJOB

});

 //Route::get('test',function(){
   // Mail::to('marino.pusic.5@gmail.com')->send(new JobPosted());
    //return 'Done';
//});


Route::view('/','home');
Route::view('/contact','contact');

Route::middleware(['auth'])->group(function () {
    Route::controller(JobController::class)->group(function () {
        Route::get('jobs/create', 'index_create');
        Route::post('job/create', 'create_job');
        Route::get('/job/{id}', 'display_job'); // ->middleware(['auth',can:edit-job,job])
        Route::get('/job/{id}/edit', 'edit_job');//onda nema ni potrebe za Gate:authorize u controlleru
        Route::patch('/job/{id}', 'update_job');//ILI ->can('edit_job,job) ako je job parametar {job}
        Route::delete('/job/{id}', 'delete_job');
    });
});
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index_jobs');
});


Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);




//Route::resource('jobs',JobController::class); // need to be index store and so on in controller(functions)







