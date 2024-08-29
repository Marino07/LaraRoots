<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    $jobs = Job::all();
    dd($jobs);
    return view('home');
});

Route::get('/jobs',function(){
    $jobs = Job::all();
    return view('jobs', compact('jobs'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/job/{id}', function ($id) {

    $jobs = Job::all();

    $job = Job::find($id);

    return view('jobb',compact('job'));
});






