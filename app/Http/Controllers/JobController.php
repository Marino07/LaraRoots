<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Mail\JobPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index_create(){
        return view('jobs.create');

    }
    public function display_job($id){

    $jobs = Job::all();

    $job = Job::find($id);

    return view('jobs.display_job',compact('job'));
    }
    public function index_jobs(){
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', compact('jobs'));
    }
    public function edit_job($id){


    $job = Job::find($id);

    Gate::authorize('edit',$job); // if there is a button

    return view('jobs.edit',compact('job'));
    }

    public function create_job(Request $request){
        $request->validate([
            'title' => 'required|max:255',//rules
            'salary' => 'required',//rules
        ]);


        $job = Job::create([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
            'employer_id' => 8,
        ]);
        Mail::to($job->employer->user)->queue(new JobPosted($job)); //dajemo id ali u sustini lar uzima email
                                                                    //ovaj job u const dajemo view-u za mail

        if($job){
            return redirect('/jobs');
        }
        abort(403,'Nesto je poslo krivo!');
    }
    public function update_job($id, Request $request){
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

    }
    public function delete_job($id){
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect('/jobs');
    }
}
