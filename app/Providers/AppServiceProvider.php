<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
<<<<<<< HEAD
    protected $policies = [
        \App\Models\Note::class => \App\Policies\NotePolicy::class,
    ];
=======
>>>>>>> 64a5ab2a5988cab9cf331743d868ea1b5066a892
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
