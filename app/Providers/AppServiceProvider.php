<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Model::preventLazyLoading();
        // npr ako hoces bootstrap
        //down
        //Paginator::useBootstrap();
       // Gate::define('edit_job',function(User $user, Job $job){
        //    return $job->employer->user->is(Auth::user());
       // });

    }
}
