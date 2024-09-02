<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    $jobs = Job::all();
    dd($jobs);
    return view('home');
});

Route::get('jobs/create',function(){
    return view('jobs.create');
});
Route::post('job/create',function(Request $request){


    $request->validate([
        'title' => 'required|max:255',//rules
        'salary' => 'required',//rules
    ]);


    $job = Job::create([
        'title' => $request->input('title'),
        'salary' => $request->input('salary'),
        'employer_id' => 1,
    ]);
    if($job){
        return redirect()->back();
    }
    abort(403,'Nesto je poslo krivo!');

});

Route::get('/jobs',function(){
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', compact('jobs'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/job/{id}', function ($id) {

    $jobs = Job::all();

    $job = Job::find($id);

    return view('jobs.display_job',compact('job'));
});

Route::get('/job/{id}/edit', function ($id) {

    $job = Job::find($id);

    return view('jobs.edit',compact('job'));
});



Route::post('/job/{id}/update', function ($id, Request $request) {
    $job = Job::findOrFail($id);
    $request->validate([
        'title' => 'required|max:255',//rules
        'salary' => 'required',//rules
    ]);
    $job->update([
        'title' => request()->input('title'),
        'salary' => request()->input('salary'),

    ]);

    return redirect('/jobs');

});
Route::post('/job/{id}/delete', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});






